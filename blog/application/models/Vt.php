<?php

class Vt extends CI_Model{

	function loginkontrol($kad,$sifre){
		$result = $this->db->select('*')
			->from('yonetici')
			->where('kad',$kad)
			->where('sifre',$sifre)
			->get()
			->result();
		if(count($result)!=1){
			return false;
		}
		else{
			return $result;
		}
	}

	function blogekle($data = array()){
		$result = $this->db->insert('bloglar',$data);
	}

	function blogcek(){
		$result = $this->db->select('*')
			->from('bloglar')
			->order_by('id','DESC')
			->get()
			->result();
		return $result;
	}
	function blogsil($id){
		$result = $this->db->select('*')->from('bloglar')->where('id',$id)->delete();
		return $result;
	}

	function blogbilgi($kad){
		$result = $this->db->select('*')
			->from('bloglar')
			->where('id',$kad)
			->get()
			->result();
		if(count($result) != 1){
			return false;
		}
		else{
			return $result;
		}
	}

	function blogguncelle($data,$id){
		$result = $this->db->where('id',$id)->update('bloglar',$data);
		return $result;
	}

	function blog($a){
		$result = $this->db->select('*')
			->from('bloglar')
			->where('blog_link',$a)
			->get()
			->result();
		if(count($result) != 1){
			return false;
		}
		else{
			return $result;
		}
	}

}
