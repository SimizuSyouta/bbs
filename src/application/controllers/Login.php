<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
			$this->load->view("login_view");
			//$this->load->
	}

	public function check()
	{

		$nickname = $this->input->post('nickname');
		$password = $this->input->post('passwd');
$this->load->view("top_view");
	}
}