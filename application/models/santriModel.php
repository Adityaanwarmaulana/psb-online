<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SantriModel extends CI_Model {
  public function view(){
    return $this->db->get('tbl_santri')->result(); // Tampilkan semua data yang ada di tabel santri
  }
}