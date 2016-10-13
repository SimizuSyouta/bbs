<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newaccount extends CI_Controller {

	public function index()
	{
			$this->load->view("login_view");
			//$this->load->
	}


	public function account()
	{

			$this->load->view("newaccount_view");
	}
	public function data(){
$username = $this->input->post('username');
$password = $this->input->post('password');
$this->load->model('Account_db''useraccount');
$this->Acount_db->create();
}
}
