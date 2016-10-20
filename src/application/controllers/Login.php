<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
			$this->load->view("login_view");
		  $this->load->model('Logincheck_model');
	}

  public function check()
	{
		$username = $this->input->post('username');
    $password = $this->input->post('password');
    $this->load->model('Logincheck_model');
$this->load->view("top_view");
{

	//redirect(base_url().'login');

  $this->load->view("top_view");
}
}
	public function account()
	{
		$this->load->view("newaccount_view");
	}

	public function job()
	{
    $this->load->view("job_view");
	}

	public function game()
	{
	$this->load->view("game_view");

	}

public function redirect()
{
	redirect("base_url()"."login/game");
}
	public function sports()
	{
		$this->load->view("sports_view");
	}

	public function music()
	{
		$this->load->view("music_view");
	}

}
