<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logincheck_model extends CI_Controller
{
      function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    public function loginture()
    {
      $username=array('username'=>$this->input->post('username'));
      $password=array('password'=>$this->input->post('password'));

      $this->db->where($username);
      $this->db->where($password);
      $query=$this->db->get('account');
      $result=$query->num_rows();
      if ($result != 0) {
    $result = $query->row();

    $username = $result->username;
    $password= $result->password;
    $newdata = array(
        'username' => $username,
        'password' => $password,
        'logged_in' => TRUE
    );
    $this->session->set_userdata($newdata);
} else {
    $data = array(
        'error_message' => 'ユーザIDかパスワードが間違っています'
    );
    return $data;
}
一致するデータがある時 ( $result != 0 );
    }
  }
