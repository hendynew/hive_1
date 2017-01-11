<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	public function add($name,$email,$message){
		$arr = [
			"id_message"=>($this->db->count_all("message")+1),
			"name"=>$name,
			"email"=>$email,
			"message"=>$message,
			"status"=>'1'
		];
		$this->db->insert("message",$arr);
	}
}
