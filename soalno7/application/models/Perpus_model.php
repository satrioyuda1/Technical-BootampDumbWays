<?php
class Perpus_model extends CI_Model {

 public function ambil_data()
  {
    return $this->db->get('perpustakaan')->result();
  }

}

 ?>

