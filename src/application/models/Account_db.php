
<?php
class Account_db extends CI_Model
{
    public function useraccout()
    {

$this->load->database();
if ($this->db->conn_id === FALSE)
{
    echo 'データベースに接続されていません。'
}
else
{
    echo 'データベースに接続されています。'
}

      }
