<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	public function load()
	{
		return $this->db->get("page_home")->row();
	}

	public function load_content_2(){
		return $this->db->get("home_content_2")->result();
	}

	public function load_content_5(){
		return $this->db->get("partner")->result();
	}

	public function update($data){
		$this->db->where('id_change','1');
		return $this->db->update("page_home",$data);
	}

}
