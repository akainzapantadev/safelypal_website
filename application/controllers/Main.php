<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {


	public function index()
	{
		$this->load->view('index');
	}
	public function livetest()
	{
		$this->load->view('livetest');
	}

    public function arldev()
	{
		$this->load->view('arldev_templates');
	}

	public function robots()	{
		echo(file_get_contents("application/views/others/robots.txt"));
	}

	public function sitemap(){
		header("Content-type: text/xml");
		$this->load->view('others/sitemap.php');
	}


	public function subscribe(){

		$this->db->where('ip',$_GET["ip"]);
		$q = $this->db->get('subscribers_tbl');
		$check = $q->result_array();

		if(count($check)!=0){
		 	echo json_encode('You have already subscribed using this device! We limit one (1) subscription per device to prevent spamming. Thank you for understanding!');
		}else{
			$timeStamp = date('Y-m-d H:i:s');
			$insertRecord = array(
				'email' => $_GET["email"],
				'ip' => $_GET["ip"],
				'timestamp' => $timeStamp,
			);
	
			$saveQueryNotif = $this->db->insert("subscribers_tbl",$insertRecord);
			if ($saveQueryNotif) {
				echo true;
			}else{
				echo false;
			}
		}
	}


}