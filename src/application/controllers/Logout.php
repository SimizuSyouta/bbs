<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->model('User_model', 'user');
    $this->user->logout();
    redirect(base_url().'login');
  }
}
