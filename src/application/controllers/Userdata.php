<?php

Class Userdata extends CI_Controller
{
  function __construct()
  {
      parent:: __construct();
      $this->load->database();
  }

  function index()
  {
    if($this->input->post('username') != null)
    {
      $data=array('username'=>$this->input->post('username',true),
        'password'=>$this->input->post('password',true));
      $this->db->insert('account',$data);
      $this->load->view("top_view");
   }
   else
   {
     $this->load->view("newaccount_view");
   }
  }
}
