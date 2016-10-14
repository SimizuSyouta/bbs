<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

	public function index()
	{
			$this->load->view("login_view");
			//$this->load->
	}

	public function job()
	{

		//$nickname = $this->input->post('nickname');
    $this->load->view("job_view");
	}

	//	public function job()
		//{

	//$this->load->view("job_view");
		//}
}
