<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Santri_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('santri')->result(); // Tampilkan semua data yang ada di tabel siswa
    }

    public function search($keyword)
    {
        $this->db->like('nis', $keyword);
        $this->db->or_like('nama', $keyword);
      
        $result = $this->db->get('santri')->result(); // Tampilkan data siswa berdasarkan keyword        return $result;   
    }

    public function periode()
    {
        $this->db->where('status', 'aktif');
        return $this->db->get('periode')->result_array();
    }

    // tambah data santri
    // tambah data wali
    // tambah data orang tua

    public function saveSantri($data)
    {
        $dataInput = [
            'nis'
        ];
        $this->db->insert('santri', $dataInput);
        
        # code...
    }

    
}


/* End of file Santri_model.php and path /application/models/Santri_model.php */
