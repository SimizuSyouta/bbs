<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Game_model extends CI_Model
{
  function __construct()
  {
    parent:: __construct();
    $this->load->library('session');
    $this->load->database();
  }


  public  function index()
  {
    $data = array("userid"=>$this->input->post('userid',true),'username'=>$this->input->post("username",true),
    'comment'=>$this->input->post("comment",true),);
    $this->db->insert('gamedata',$data);
    $query = $this->db->query('SELECT * FROM gamedata');
    //$data['gamedata'] = [];
    if($query->num_rows() > 0)
    {
      foreach ($query->result() as $row)
      {
        $data['gamedata'][]=array('username'=>$row->username,'comment'=>$row->comment);

      }
      $this->load->view('game_view',$data);
    }
  }

  public function save()
  {
  $this->db->select('username,comment');
  $this->db->from('gamedata');

  $value = $this->db->get()->result_array();

  return $value;
  }
}
