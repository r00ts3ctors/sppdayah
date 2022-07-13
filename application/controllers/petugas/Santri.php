<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Santri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

    }

    public function tambahSantri()
    {
            $data = [
                'konten' => ['santri/tambahSantri'],

            ];
            $this->load->view('template/index',$data);
            
    }

    public function saveSantri()
    {
        # code...
    }

    public function cariSiswa()
    {
        $idkelas = $this->input->post('idkelas', true);
        $idsantri = $this->input->post('idsantri', true);

        // data kelas
        $this->db->where('id', $idkelas);
        
        $this->db->get('kelas_santri')->result_array();
        
        // data santri
        // data tagihan.
        


    }
    
}

