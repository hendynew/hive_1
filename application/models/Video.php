<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	public function get_page()
	{
		return $this->db->get("page_videos")->row();
	}

	public function get(){
		$data = $this->db->where("status","1")->get("videos")->result();
		foreach($data as $d){
			$d->date = $this->change_format_date($d->date);
		}
		return $data;
	}

	public function select_all(){
		$data = $this->db->get("videos")->result_array();
		for ($i = 0; $i < sizeof($data); $i++) {
			$data[$i]['date'] = $this->change_format_date($data[$i]['date']);
		}
		return $data;
	}

	public function select_video($id){
		return $this->db->where("video_id",$id)->get("videos")->row();
	}

	public function change_format_date($date){
		return date("d. m. y",strtotime($date));
	}

	public function add($data){
		$hasil = [
			"video_id" => $this->db->count_all("videos") + 1,
			"title" => $data['title'],
			"caption" => $data['caption'],
			"url" => $data['url'],
			"date" => date("y-m-d"),
			"status" => "1"
		];
		return $this->db->insert("videos",$hasil);
	}

	public function update($data){
		if($data["file"] == "0") {
			unset($data["file"]);
		}else {
			$data['url_image'] = $data['file'];
			unset($data['file']);
		}
		if(isset($data["edit3"])) {
			unset($data["edit3"]);
		}
		$this->db->update("page_about",$data);
	}

	public function update_videos($data){
		$data2 = $data;
		unset($data2['video_id']);
		unset($data2['target']);
		return $this->db->where("video_id",$data['video_id'])->update("videos",$data2);
	}
}
