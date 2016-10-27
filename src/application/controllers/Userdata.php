<?php

Class Userdata extends CI_Controller
{
  function __construct()
  {

      parent:: __construct();
      $this->load->database();
      $this->load->library('session');
  }

  function index()
  {

    if($this->input->post('username') != null)
    {
      $data=array('username'=>$this->input->post('username',true),
    'password'=>md5($this->input->post('password',true)));
    //post('password',true));
      $this->session->set_userdata($data);
      $this->db->insert('account',$data);
      $this->load->view("top_view");
   }

   else
   {
  redirect(base_url().'login/account');
   }
  }
}
