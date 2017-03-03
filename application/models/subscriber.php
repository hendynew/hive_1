<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscriber extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	public function add($email)
	{
		$hasil = $this->db->where("email",$email)->get("subscriber")->row();
		if(empty($hasil))
			$this->db->insert("subscriber",array("email"=>$email,"status"=>"1"));
	}

	public function select_all(){
		return $this->db->get("subscriber")->result_array();
	}

	public function get(){
		return $this->db->where('status','1')->get("subscriber")->result();
	}
}
