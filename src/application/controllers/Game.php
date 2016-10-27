<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Game extends CI_Controller
{
  function __construct()
{
		parent:: __construct();
	  $this->load->library('session');
		$this->load->database();
}


  public  function index()
    {
      $this->load->model('Game_model');
      $value['gamedata']=$this->Game_model->save();
      $this->load->model('User_model','user');
      $is_logged_in=$this->user->is_logged_in();
          if($is_logged_in){

          $this->load->view('game_view',$value);
          }
          else {
            redirect(base_url().'login');
          }
        }

    public function  send()
    {
      $this->load->model('Game_model');
      $this->Game_model->index();
      redirect(base_url().'game');

    }


}
