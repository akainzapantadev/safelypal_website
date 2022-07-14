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
}