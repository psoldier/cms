<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Products extends CI_Controller 
{

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('products_model');
    
    $this->validate_user();
  }

  private function validate_user()
  {
    if(!$this->session->userdata('logged_user'))
    {
      redirect('');
    }
  }
  
  public function index() 
  {
    $data['products'] = $this->products_model->get_products();

    $this->load->view('templates/header');
    $this->load->view('products/index', $data);
    $this->load->view('templates/footer');
  }

  public function view($slug) 
  {
    $data['news'] = $this->products_model->get_products($slug);
  }

  public function delete($id)
  {
    $this->products_model->delete_products($id);
    header("Location: ../../products");
  } 
  
  public function create() 
  {
    $this->config_form();
    
    $this->load->view('templates/header');
    if (($this->form_validation->run() === TRUE)&&( $this->upload->do_upload("product_file"))) 
    {
      $upload_data = array('upload_data' => $this->upload->data());
      $data['products'] = $this->products_model->set_products($upload_data['upload_data']['file_name']);
      header("Location: ../products");
    }else
    {
      $data['error'] = array('error' => $this->upload->display_errors());
      $this->load->view('products/create', $data);
    }
    $this->load->view('templates/footer');
  }
  
  public function update($id="") 
  {
    if($id==""){$id=$this->input->post('id');}
    
    $this->config_form();
    
    
    $this->load->view('templates/header');
    if ( $this->form_validation->run() === TRUE && ( $this->upload->do_upload("product_file") OR $_FILES['product_file']['name'] == '')) 
    {
      if($_FILES['product_file']['name'] == '')
      {
        $image = $this->input->post('image');
      }else
      {
        $upload_data = array('upload_data' => $this->upload->data());
        $image = $upload_data['upload_data']['file_name'];
      }
      $data['product'] = $this->products_model->update_product($image);
      header("Location: ../products");
    }
    else
    {
      $data['error'] = array('error' => $this->upload->display_errors());
      $data['product'] = $this->products_model->get_products($id);
      $this->load->view('products/update', $data);
    }
    $this->load->view('templates/footer');
  }
  
  private function config_form()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');
    
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = '1000';
    $config['max_width'] = '1024';
    $config['max_height'] = '768';
    $config['remove_spaces'] = TRUE;

    $this->load->library('upload', $config);

    $this->form_validation->set_rules('name', 'Nombre', 'required');
    $this->form_validation->set_rules('peso_price', '$', 'required|(decimal||integer)');
    $this->form_validation->set_rules('dolar_price', 'U$s', 'required|(decimal||integer)');
    $this->form_validation->set_rules('stock', 'Stock', 'required|integer');
    
    
    $this->form_validation->set_message('required', 'El campo %s es obligatorio');
    $this->form_validation->set_message('integer', 'El campo %s debe ser un numero entero');
    $this->form_validation->set_message('decimal', 'El campo %s debe ser un numero decimal');
  }

}
