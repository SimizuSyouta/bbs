<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
  private $_user_id;

  public function __construct()
  {
    parent::__construct();
  }

  public function initialize($user_id)
  {
    $this->_user_id = $user_id;
  }

  public function exists($password)
  {
    $this->db->select('username');
    $this->db->from('account');
    $this->db->where('password', $password);
    $this->db->where('username', $this->_user_id);

    $result = $this->db->get()->result();

    if(count($result) === 0)
    {
      return FALSE;
    }
    return TRUE;
  }

  public function login()
  {
    $CI = get_instance();
    $CI->session->set_userdata('user_id', $this->_user_id);
  }

  public function is_logged_in()
  {
    $CI = get_instance();
    $user_id = $CI->session->userdata('user_id');

    if($user_id === NULL)
    {
      return FALSE;
    }
    return TRUE;
  }

  public function logout()
  {
    $CI = get_instance();
    $CI->session->sess_destroy();
  }
}
