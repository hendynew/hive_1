<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	public function all_post(){
		$hasil = $this->db->get("post")->result_array();
		for ($i=0; $i < sizeof($hasil); $i++) {
			$hasil[$i]["date"] = $this->change_format_date($hasil[$i]["date"]);
		}
		return $hasil;
	}

	public function view_post($id){
		$hasil = $this->db->where("post_id",$id)->get("post")->row();
		$hasil->date = $this->change_format_date($hasil->date);
		return $hasil;
	}

	public function view_post_month($month,$year){
		$hasil = $this->db->query("SELECT * FROM post WHERE DATE(date) BETWEEN '" . $year . '-' . $month . "-01' AND '" . $year . '-' . $month . "-31'")->result();
		foreach($hasil as $h){
			$h->date = $this->change_format_date($h->date);
		}
		return $hasil;
	}

	public function change_format_date($date){
		return date("l, d.m.y",strtotime($date));
	}

	public function count_post(){
		return $this->db->count_all("post");
	}

	public function new_post($data){
		$arr = [
			"post_id"=>$this->count_post() + 1,
			"title"=>$data['title'],
			"date"=>date("y-m-d"),
			"caption"=>$data['caption'],
			"post"=>$data['content'],
			"status"=>1
		];
		if($data['file'] != "0") $arr["url_image"] = $data['file'];
		if($this->db->insert("post",$arr)) echo "1";
	}

}
