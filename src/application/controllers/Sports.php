<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sports extends CI_Controller
{


      public  function index()
    {
$this->load->model('Sports_model');
$value['sportsdata']=$this->Sports_model->save();
$this->load->view('sports_view',$value);
    }

    public function  send()
    {
      $this->load->model('Sports_model');
      $this->Sports_model->index();
      redirect(base_url().'sports');

    }


}
