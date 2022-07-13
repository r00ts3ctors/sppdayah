<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerimaan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penerimaan_model', 'mpenerimaan');
        $this->load->model('Santri_model', 'msantri');
    }

    public function aturTagihan()
    {
        // atur berdasarkan santri

        // atur berdasarkan kelas
        // atur berdasarkan tahun ajaran aktif
    }

    public function aturTagihanSantri($idsantri, $idtransaksi, $nilaibayar)
    {
        // periksa jenis transaksi yang di masukan sudah ada atau belum
        $this->db->where('id_santri', $idsantri);
        $this->db->where('id_transaksi', $idtransaksi);
        $dataTransaksi = $this->db->get('data_transaksi')->row_array();

        // data kelas santri 

        $this->db->where('id_santri', $idsantri);
        $dataKelas = $this->db->get('alokasi')->row_array();
        


        if ($dataTransaksi >= 1) {
            echo "Tagihan yang di masukan sudah pernah ada.";
        } else {
            // proses simpan tagihan.
            // periksa santri aktif atau tidak
            // 0 aktif 1 tidak aktif
            $this->db->where('id', $idsantri);
            $dataSantri = $this->db->get('santri')->row_array();
            if($dataSantri['status_santri'] == 0){
                // santri aktif
                // jika santri aktif maka bisa di proses masukan tagihan santri
                // masukan data santri ke tagihan_santri
                $dataInput = [
                    'id_santri' => $idsantri,
                    'id_transaksi' => $idtransaksi,
                    'id_kelas' => $dataKelas['id_kelas'],
                    'nilai' => $nilaibayar,
                    'status' => '1'
                ];
                $this->db->insert('tagihan_santri', $dataInput);
                
            }
        }




    }


    public function aturTagihanKelas()
    {
        # code...
    }
    public function aturTagihanTahun()
    {
        # code...
    }

    public function penerimaan()
    {

        $kelas =    $this->db->get('kelas_santri')->result_array();
        $this->db->where('status', 'aktif');
        $this->db->get('periode', 1)->row_array();


        $data = [
            'konten' => ['penerimaan/penerimaan_in'],
            'isi' => $kelas,
            'isiperiode' => $this->msantri->periode()

        ];
        $this->load->view('template/index', $data);
    }

    public function cariData()
    {
        var_dump($_POST);
    }


    // petugas/Penerimaan/hapusKatagori
    // tambah katagori
    public function addkatagori()
    {

        $data = [
            'konten' => ['jurnal/add_katagori'],
            'penerimaan' => $this->mpenerimaan->katagoriPenerimaan(1),
            'pengeluaran' => $this->mpenerimaan->katagoriPenerimaan(2)
        ];
        $this->load->view('template/index', $data);
    }
    public function hapusKatagori($id)
    {
        $this->mpenerimaan->hapus($id);

        $this->session->set_flashdata('pesan', '<span class="alert alert-success">Katagori Transaksi Berhasil di Hapus.</span>');
        redirect('petugas/Penerimaan/addkatagori', 'refresh');
    }

    public function saveKatagori()
    {
        $dataInput = [
            'nama_transaksi' => $this->input->post('nama', true),
            'jenis_transaksi' => $this->input->post('jenis', true),
            'keterangan' => $this->input->post('ket', true),
            'type_transaksi' => $this->input->post('typetransaksi', true),
            'status_transaksi ' => 1
        ];
        $this->mpenerimaan->tambah($dataInput);
        $this->session->set_flashdata('pesan', '<span class="alert alert-success">Katagori Transaksi Berhasil Ditambahkan.</span>');

        redirect('petugas/Penerimaan/addkatagori', 'refresh');
    }
}

/* End of file Penerimaan.php and path /application/controllers/petugas/Penerimaan.php */
