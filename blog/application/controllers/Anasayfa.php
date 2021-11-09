<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {
	public function index()
	{
		$this->load->model('vt');
		$sonuc = $this->vt->blogcek();
		$data = new stdClass();
		$data->bilgi = $sonuc;
		$this->load->view('anasayfa',$data);
	}
	public function bloglar($link){
		$this->load->model('vt');
		$sonuc = $this->vt->blog($link);
		$data['bilgi'] = $sonuc;
		$this->load->view('blog-detail',$data);
	}
}
