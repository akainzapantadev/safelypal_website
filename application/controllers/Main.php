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
}