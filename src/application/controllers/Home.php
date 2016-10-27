<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  function __construct()
{

    parent:: __construct();
    parent::login_check();
    $this->load->library('session');
    $this->load->database();
}

   public function top()
   {
     $this->load->view('top_view');
   }

   public function job()
   {
     redirect(base_url().'job');
   }

  public function game()

 {

    //$this->load->model('Game_model');
     //$value['gamedata']=$this->Game_model->save();
     redirect(base_url().'game');



}
 public function sports()
 {
 //	$this->load->view("sports_view");
   redirect(base_url().'sports');
 }

 public function music()
 {
   //$this->load->view("music_view");
   redirect(base_url().'music');
 }

 public function  send()
 {
   $this->load->model('Game_model');
   $this->Game_model->index();
   redirect(base_url().'home/game');

 }

}
