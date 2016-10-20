<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talk_model extends CI_Controller {
  function __construct()
{
    parent:: __construct();
    $this->load->database();
}

  public  function index()
{
  $data=array("userid"=>$this->input->post('userid',true),'username'=>$this->input->post("username",true),
  'comment'=>$this->input->post("comment",true),);
  $this->db->insert('talkdata',$data);
  $query = $this->db->query('SELECT * FROM talkdata');
  if($query->num_rows() > 0){
  foreach ($query->result() as $row)
  {
    $data['jobdata'][]=array('username'=>$row->username,'comment'=>$row->comment);


}
  $this->load->view('job_view',$data);
}
}
}
