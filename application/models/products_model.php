<?php

class Products_model extends CI_Model {

  public function __construct() 
  {
    $this->load->database();
  }

  public function get_products($slug = FALSE) 
  {
    if ($slug === FALSE) {
      $query = $this->db->get_where('products',array('delete'=> FALSE));
      return $query->result_array();
    }

    $query = $this->db->get_where('products', array('id' => $slug,'delete'=> FALSE));
    return $query->row_array();
  }
  
  public function get_actives_products() 
  {
    $query = $this->db->get_where('products',array('active'=> TRUE,'delete'=> FALSE));
    return $query->result_array();
  }
  
  public function delete_products($id)
  {
    $data = array('delete' => TRUE);
    $this->db->where('id',$id);
    $this->db->update('products',$data);
  }
  
  public function set_products($image_name) 
  {
    
    $data = array(
        'name' => $this->input->post('name'),
        'description' => $this->input->post('description'),
        'active' => $this->input->post('active'),
        'delete' => $this->input->post('delete'),
        'image' => $image_name,
        'peso_price' => $this->input->post('peso_price'),
        'dolar_price' => $this->input->post('dolar_price'),
        'stock' => $this->input->post('stock'),
        'creation_datetime' => date_format(new DateTime('NOW'),'Y-m-d H:i:s'),
        'update_datetime' => date_format(new DateTime('NOW'),'Y-m-d H:i:s')
        
    );

    return $this->db->insert('products', $data);
  }

  public function update_product($image_name)
  {
    $data = array(
        'name' => $this->input->post('name'),
        'description' => $this->input->post('description'),
        'active' => $this->input->post('active'),
        'delete' => $this->input->post('delete'),
        'image' => $image_name,
        'peso_price' => $this->input->post('peso_price'),
        'dolar_price' => $this->input->post('dolar_price'),
        'stock' => $this->input->post('stock'),
        'update_datetime' => date_format(new DateTime('NOW'),'Y-m-d H:i:s')
    );
    
    $this->db->where('id',$this->input->post('id'));
    $this->db->update('products',$data);
  }
  
}