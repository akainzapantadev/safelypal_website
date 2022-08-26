<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
	}

	public function index(){
		$this->load->view('index');
	}
	public function about(){
		$this->load->view('about');
	}
	public function robots(){
		echo(file_get_contents("application/views/others/robots.txt"));
	}
	public function sitemap(){

		$res = $this->_getRecordsData(
			$selectfields = array('*'), 
			$tables = array('blogs_tbl'),$fieldName = null, $where = null,$join = null,$joinType = null,$sortBy = null, 
			$sortOrder = null, $limit = null, $fieldNameLike = null, $like = null,$whereSpecial = null, $groupBy = null );

			$data = array(
				'res' => $res,
			);

			header("Content-type: text/xml");
			$this->load->view('others/sitemap.php',$data);
	}
	public function subscribe(){
		$this->db->where('ip',$_GET["ip"]);
		$q = $this->db->get('subscribers_tbl');
		$check = $q->result_array();

		$timeStamp = date('Y-m-d H:i:s');
		$insertRecord = array(
			'email' => $_GET["email"],
			'ip' => $_GET["ip"],
			'timestamp' => $timeStamp,
		);
		$saveQueryNotif = $this->db->escape("subscribers_tbl",$insertRecord);
		if ($saveQueryNotif) {
			echo true;
		}else{
			echo false;
		}
	}

	public function insertContactUs(){
		$name = $_GET['name'];
		$emailaddress = $_GET['emailaddress'];
		$message = $_GET['message'];

		$insert_contactus = array(
			'name'=>$name,
			'emailaddress'=>$emailaddress,
			'message'=>$message,
			'dateCreated' => $this->_getTimeStamp24Hours(),
		);

		$insertcontactus = $this->_insertRecords('contactus_tbl', $insert_contactus);

		if ($insertcontactus) {
			echo true;
		}else{
			echo false;
		}
	}

}