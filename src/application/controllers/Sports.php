<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sports extends CI_Controller
{


      public  function index()
    {
      $this->load->model('Sports_model');
      $value['sportsdata']=$this->Sports_model->save();
      $this->load->model('User_model','user');
      $is_logged_in=$this->user->is_logged_in();
      if($is_logged_in){

      $this->load->view('sports_view',$value);
      }
      else {
        redirect(base_url().'login');
      }
    }


    public function  send()
    {
      $this->load->model('Sports_model');
      $this->Sports_model->index();
      redirect(base_url().'sports');

    }


}
