<?php
class Yonetimpaneli extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		{
				$this->guvenlik();
		}
	}
	 function guvenlik(){
		$kontrol = $this->session->userdata('kontrol');
		if(!isset($kontrol) || $kontrol != true){
			redirect('yonetim');
		}

	}

	public function index(){
		$this->load->view('yonetim/anasayfa');
	}

	public function bloglar(){
		$this->load->model('vt');
		$cekilen=$this->vt->blogcek();
		$data = new stdClass;
		$data->bilgi=$cekilen;
		$this->load->view('yonetim/bloglar',$data);
	}

	public function blogekle(){
		$this->load->view('yonetim/blogekle');
	}

	public function bloginsert(){
		$baslik = $this->input->post('baslik');
		$aciklama = $this->input->post('aciklama');
		$tarih = date('Y-m-d');
		$this->load->model('vt');
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload',$config);
		if($this->upload->do_upload("img")){
			$img = $this->upload->data("file_name");
			$data = array('blog_baslik'=>$baslik,
				'blog_aciklama'=>$aciklama,
				'tarih'=>$tarih,
				'blog_link'=>permalink($baslik),
				'tiksay'=>0,
				'img' => $img
			);
			
				$insert = $this->vt->blogekle($data);
		if($insert = true) {
			$this->session->set_flashdata('bilgi', '<div class="alert alert-success alert-dismissable">
				<button type="button" class="close"	aria-hidden="true"></button>
				Blog Eklendi</div> ');
			redirect('yonetimpaneli/bloglar');
		}
		
			}	
	}

	public function blogsil($id){
		$this->load->model('vt');
		$delete = $this->vt->blogsil($id);
		if($delete){
		redirect('yonetimpaneli/bloglar');
		}
	}

	public function blogguncelle($id){
		$this->load->model('vt');
		$inf = $this->vt->blogbilgi($id);
		$data['inf'] = $inf;
		$this->load->view('yonetim/blogguncelle',$data);

	}

	public function blogupdate($id){
		$baslik = $this->input->post('baslik');
		$aciklama = $this->input->post('aciklama');
		$tarih = date('Y-m-d');
		$data = array('blog_baslik'=>$baslik,
			'blog_aciklama'=>$aciklama,
			'tarih'=>$tarih,
			'blog_link'=>permalink($baslik));
		$this->load->model('vt');
		$sonuc = $this->vt->blogguncelle($data,$id);
		if($sonuc){
			$this->session->set_flashdata('bilgi', '<div class="alert alert-success alert-dismissable">
				<button type="button" class="close"	aria-hidden="true"></button>
				Blog Güncellendii</div> ');
			redirect('yonetimpaneli/bloglar');
		}
	}

}
