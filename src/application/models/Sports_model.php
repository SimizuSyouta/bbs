<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sports_model extends CI_Controller
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
$this->db->insert('sportsdata',$data);
$query = $this->db->query('SELECT * FROM talkdata');
//$data['gamedata'] = [];
if($query->num_rows() > 0)
{
  foreach ($query->result() as $row)
  {
    $data['sportsdata'][]=array('username'=>$row->username,'comment'=>$row->comment);

  }
$this->load->view('sports_view',$data);
}

}

public function save()
{
  $this->db->select('username,comment');
  $this->db->from('sportsdata');

  $value = $this->db->get()->result_array();

  return $value;
}
}
