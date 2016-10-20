<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Job_model extends CI_Controller
{
      function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

public  function index()
{
$data = array("userid"=>$this->input->post('userid',true),'username'=>$this->input->post("username",true),
'comment'=>$this->input->post("comment",true),);
$this->db->insert('talkdata',$data);
$query = $this->db->query('SELECT * FROM talkdata');
//$data['gamedata'] = [];
if($query->num_rows() > 0)
{
  foreach ($query->result() as $row)
  {
    $data['talkdata'][]=array('username'=>$row->username,'comment'=>$row->comment);

  }
$this->load->view('job_view',$data);
}

}

public function save()
{
  $this->db->select('username,comment');
  $this->db->from('talkdata');

  $value = $this->db->get()->result_array();

  return $value;
}
}
