<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sigoto extends CI_Controller
{

  public  function index()
{
  $this->load->model('job_model');
  $value['talkdata']=$this->job_model->save();
  $this->load->view('job_view',$value);
}
