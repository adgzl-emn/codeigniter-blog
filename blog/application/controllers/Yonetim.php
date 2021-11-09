<?php
class Yonetim extends CI_Controller {

	public function index(){
		$this->load->view('yonetim/login');
	}

	public function cikis(){
		$this->session->sess_destroy();
		redirect('yonetim');
	}


	public function panel(){
		$this->load->view('yonetim/anasayfa');
	}


	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kad','Kullanıcı adı','required|trim');
		$this->form_validation->set_rules('sifre','Şifre','required|trim');

		if ($this->form_validation->run()){
			$kad = $this->input->post('kad');
			$sifre =$this->input->post('sifre');
			$this->load->model('vt');
			$sonuc =$this->vt->loginkontrol($kad,$sifre);

			if($sonuc){
				$this->session->set_userdata('kontrol',true);
				$this->session->set_userdata('info',$sonuc);
				redirect('yonetimpaneli');
			}
			else{
				$this->session->set_flashdata('hata','<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close"	aria-hidden="true"></button>
				Kullanıcı Adı veya Parola hatalı!!</div> ');
				redirect('yonetimpaneli');
			}

		}
		else{
			$this->load->view('yonetim/login');
		}

	}

	public function anasayfa()
	{
		$this->load->view('yonetim/anasayfa');
	}
}
