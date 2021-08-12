<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Siswa extends CI_Model {

  function getDataSiswa(){
    $query = $this->db->get('tb_siswa');
    return $query->result();
  }
  function insertDataSiswa($data)
  {
    $this->db->insert('tb_siswa', $data);
  }
  function getDataSiswaDetail($nis)
  {
    $this->db->where('nis', $nis);
    $query = $this->db->get('tb_siswa');
    return $query->row();
  }
  function updateDataSiswa($nis, $data)
  {
    $this->db->where('nis', $nis);
    $this->db->update('tb_siswa', $data);
  }
  function deleteDataSiswa($nis)
  {
    $this->db->where('nis', $nis);
    $this->db->delete('tb_siswa');
  }
}
