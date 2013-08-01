<?php

class Users_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  
  public function login()
  {
    $password = sha1($this->input->post('password'));
    $query = $this->db->get_where('users', array(
        'email' => $this->input->post('email'),
        'password'=>$password
    ));
    return $query->row();
  }

}