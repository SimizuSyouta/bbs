<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Job extends CI_Controller
{


      public  function index()
    {
$this->load->model('job_model');
$value['talkdata']=$this->job_model->save();
$this->load->view('job_view',$value);
    }

    public function  send()
    {
      $this->load->model('job_model');
      $this->job_model->index();
      redirect(base_url().'job');

    }


}
