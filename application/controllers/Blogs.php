<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blogs extends MY_Controller {


	public function index()
	{
		$this->load->view('blogs/blogs');
	}
	public function blogs()
	{
		$this->load->view('blogs/blogs');
	}
}