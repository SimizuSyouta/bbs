<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newaccount extends CI_Controller {
	function __construct()
{
		parent:: __construct();
	    $this->load->library('session');
	  	$this->load->database();
}
	public function newdata()
	{

		$this->load->view('newaccount_view');
	}

	public function  redirect()
	{
		redirect(base_url().'newaccount/newdata');
	}
}
