<?php
class Perpustakaan extends CI_Controller {

 public function index()
  {
    $this->load->model('Perpus_model');

    $this->data['tampilkan_data'] = $this->Perpus_model->ambil_data();

    $this->load->view('home', $this->data);
  }





}
