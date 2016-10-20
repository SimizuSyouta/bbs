<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Game extends CI_Controller
{


      public  function index()
    {
$this->load->model('Game_model');
$value['gamedata']=$this->Game_model->save();
$this->load->view('game_view',$value);
    }

    public function  send()
    {
      $this->load->model('Game_model');
      $this->Game_model->index();
      redirect(base_url().'game');

    }


}
