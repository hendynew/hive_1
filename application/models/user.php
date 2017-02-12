<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	public function select_all(){
		return $this->db->get("user")->row();
	}

	public function get(){
		return $this->db->select("email,telp")->get("user")->row();
	}

	public function login($username, $pass)
	{
		$arr = [
			"username"=>$username,
			"password"=>$pass
		];
		$this->db->where($arr);
		return $this->db->get("user")->row();
	}

	public function email(){
		return $this->db->select("email")->get("user")->row();
	}

	public function update($data){
		if($data["password"] == ""){
			unset($data["password"]);
		}
		$this->db->update("user",$data);
	}
}
