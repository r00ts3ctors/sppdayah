<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Jurnal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    // list katagori transaksi
    public function listKatagori()
    {
      $dataKatagori = $this->db->get('kode_transaksi')->result_array();
    
    }







    // tambah katagori transaksi (pengeluaran / pemasukan)
    

    // hapus katagori tranasksi

    // edit katagori transaksi

    // update katagori transaksi




    // laporan penerimaan 

    // laporan pengeluaran

    // laporan penerimaan perorangan

    // laporan pengeluaran perorangan


}

/* End of file Jurnal.php and path /application/controllers/petugas/Jurnal.php */
