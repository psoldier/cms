<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Frontend extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('products_model');
    $this->load->model('users_model');
  }

  public function index() {
    
    $data['products'] = $this->products_model->get_actives_products();

    $this->load->view('templates/header');
    $this->load->view('frontend/index', $data);
    $this->load->view('templates/footer');
  }

  public function login() {
    $data = array();
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Contrase&ntilde;a', 'required');
    
    $this->form_validation->set_message('required', 'El campo %s es requerido.');

    if ($this->form_validation->run() === TRUE) {
      $user = $this->users_model->login();
      if($user)
      {
        $this->session->set_userdata('logged_user', $user);
        redirect('products');
      }
      else
      {
        $data['error_login'] = TRUE;
      }
    } 
    $this->load->view('templates/header');
    $this->load->view('frontend/login',$data);
    $this->load->view('templates/footer');
  }
  
  public function logout() 
  {
    $this->session->unset_userdata('logged_user');
    redirect('');
  }

  public function ajax_product($product_id) {
    $data['product'] = $this->products_model->get_products($product_id);
    $this->load->view('frontend/ajax_product', $data);
  }

}
