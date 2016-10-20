<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Music extends CI_Controller
{


      public  function index()
    {
$this->load->model('Music_model');
$value['musicdata']=$this->Music_model->save();
$this->load->view('Music_view',$value);
    }

    public function  send()
    {
      $this->load->model('Music_model');
      $this->Music_model->index();
      redirect(base_url().'music');

    }


}
