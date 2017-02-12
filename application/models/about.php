<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	public function load()
	{
		return $this->db->get("page_about")->row();
	}

	public function update($data){
		if($data["file"] == "0") {
			unset($data["file"]);
		}
		$this->db->update("page_about",$data);
	}
}
