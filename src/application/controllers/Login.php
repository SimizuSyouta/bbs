<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
{
		parent:: __construct();
	    $this->load->library('session');
	  	$this->load->database();
}

	public function index()
	{
			$this->load->view("login_view");
		//  $this->load->model('Logincheck_model');
	}

  public function check()
	{

		$username = $this->input->post('username');
	  $hashed_pass = md5($this->input->post('password'));
		$this->load->model('User_model', 'user');
		$this->user->initialize($username);
		if($this->user->exists($hashed_pass))
		{
			$this->user->login();
			redirect(base_url().'home/top');
			return;
		}
		redirect(base_url().'login');
	}



	public function account()
	{
		$data = array('username'=>$this->input->post("username",true),'password'=>md5($this->input->post("password",true)),);
		$this->db->insert('account',$data);
			redirect(base_url().'login');
	}

	public function job()
	{
    $this->load->view("job_view");
	}
}
