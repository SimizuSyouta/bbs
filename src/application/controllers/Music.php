<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Music extends CI_Controller
{
  function __construct()
{
		parent:: __construct();
	    $this->load->library('session');
}

      public  function index()
    {

      $this->load->model('Music_model');
      $value['musicdata']=$this->Music_model->save();
      $this->load->model('User_model','user');
      $is_logged_in=$this->user->is_logged_in();
      if($is_logged_in){

      $this->load->view('Music_view',$value);
      }
      else {
        redirect(base_url().'login');
      }
    }

    public function  send()
    {
      $this->load->model('Music_model');
      $this->Music_model->index();
      redirect(base_url().'music');

    }


}
