<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}

	// --------------------------------------------------------------------

  protected function login_check()
  {
    $this->load->model('User_model', 'user');
    $is_logged_in = $this->user->is_logged_in();
    if(!$is_logged_in)
    {
      redirect('login');
    }
  }
}
