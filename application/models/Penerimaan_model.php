<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerimaan_model extends CI_Model
{

    public function katagoriPenerimaan($id)
    {
        return $this->db->get_where('kode_transaksi', ['jenis_transaksi' => $id])->result_array();
    }

    public function tambah($data)
    {
        $this->db->insert('kode_transaksi', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kode_transaksi');
    }

    public function penerimaan()
    {
     $a =  $this->db->get('kode_transaksi')->result_array();
      
       
    }
}


/* End of file Penerimaan_model.php and path /application/models/Penerimaan_model.php */
