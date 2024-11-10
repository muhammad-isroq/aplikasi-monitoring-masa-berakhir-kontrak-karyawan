<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PegawaiWisesa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Wisesa_model');
        $this->load->library('Mailer');
    }

    public function index()
    {
        $data['wisesa'] = $this->Wisesa_model->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('wisesa/v_wisesa', $data);
        $this->load->view('v_footer'); 
    }

    public function insert_wisesa()
    {

        $z = $this->input->POST('npp');
        $x = $this->input->POST('nama');
        $c = $this->input->POST('posisi_pekerjaan');
        $v = $this->input->POST('lokasi');
        $b = $this->input->POST('tgl_lahir');
        $n = $this->input->POST('gaji_pokok');
        $m = $this->input->POST('tunjangan');
        $l = $this->input->POST('bank');
        $k = $this->input->POST('no_rek');
        $j = $this->input->POST('total');
        $h = $this->input->POST('pendidikan');
        $g = $this->input->POST('jurusan');
        $f = $this->input->POST('no_kontrak');
        $d = $this->input->POST('kontrak_awal');
        $s = $this->input->POST('kontrak_akhir');
        $a = $this->input->POST('jumlah_bulan');
        $q = $this->input->POST('devisi');
        
        $data = array(
            'npp' => $z,
            'nama' => $x,
            'posisi_pekerjaan' => $c,
            'lokasi' => $v,
            'tgl_lahir' => $b,
            'gaji_pokok' => $n,
            'tunjangan' => $m,
            'bank' => $l,
            'no_rek' => $k,
            'total' => $j,
            'pendidikan' => $h,
            'jurusan' => $g,
            'no_kontrak' => $f,
            'kontrak_awal' => $d,
            'kontrak_akhir' => $s,
            'jumlah_bulan' => $a,
            'devisi' => $q
        );
        

        $this->Wisesa_model->insert_data($data);
        $this->session->set_flashdata('success','data berhasil di tambah');

        redirect('PegawaiWisesa');
    }

    public function update_wisesa()
    {
        $id = $this->input->POST('id_wisesa');
        $z = $this->input->POST('npp');
        $x = $this->input->POST('nama');
        $c = $this->input->POST('posisi_pekerjaan');
        $v = $this->input->POST('lokasi');
        $b = $this->input->POST('tgl_lahir');
        $n = $this->input->POST('gaji_pokok');
        $m = $this->input->POST('tunjangan');
        $l = $this->input->POST('bank');
        $k = $this->input->POST('no_rek');
        $j = $this->input->POST('total');
        $h = $this->input->POST('pendidikan');
        $g = $this->input->POST('jurusan');
        $f = $this->input->POST('no_kontrak');
        $d = $this->input->POST('kontrak_awal');
        $s = $this->input->POST('kontrak_akhir');
        $a = $this->input->POST('jumlah_bulan');
        $q = $this->input->POST('devisi');

        $data = array(
            'npp' => $z,
            'nama' => $x,
            'posisi_pekerjaan' => $c,
            'lokasi' => $v,
            'tgl_lahir' => $b,
            'gaji_pokok' => $n,
            'tunjangan' => $m,
            'bank' => $l,
            'no_rek' => $k,
            'total' => $j,
            'pendidikan' => $h,
            'jurusan' => $g,
            'no_kontrak' => $f,
            'kontrak_awal' => $d,
            'kontrak_akhir' => $s,
            'jumlah_bulan' => $a,
            'devisi' => $q
        );


        $where = array('id_wisesa' => $id);
        $this->Wisesa_model->update_data($data, $where);
        $this->session->set_flashdata('edit','data berhasil di update');
        redirect('PegawaiWisesa');   
    }

    public function hapus_wisesa($id)
    {
        $where = array('id_wisesa' => $id);
        $this->Wisesa_model->hapus_data($where);
        $this->session->set_flashdata('delete','data berhasil di hapus');
        redirect('PegawaiWisesa');
    }

    public function send_contract_notifications() {
        // Ambil tanggal satu bulan ke depan dari hari ini
        $threshold_date = date('Y-m-d', strtotime('+1 month'));
        
        // Ambil karyawan yang kontraknya akan berakhir dalam waktu satu bulan
        $expiring_employees = $this->Wisesa_model->get_expiring_contracts($threshold_date);

        // Email tujuan
        $recipients = ['muhammadisroq7@gmail.com'];
        
        foreach ($expiring_employees as $employee) {
            $subject = 'Pemberitahuan Masa Berakhir Kontrak';
            $body = 'Halo ,<br><br>';
            $body .= 'Kontrak karyawan atas nama ' . $employee->nama . ' akan berakhir pada ' . date('d-m-Y', strtotime($employee->kontrak_akhir)) . '. ';
            $body .= '<br><br>Terima kasih.';

            // Kirim email notifikasi
            if ($this->mailer->send_email($recipients, $subject, $body)) {
                echo "Notifikasi berhasil dikirim atas berakhirnya masa kontrak karyawan " . $employee->nama . ".<br>";
            } else {
                echo "Gagal mengirim notifikasi atas berakhirnya masa kontrak karyawan " . $employee->nama . ".<br>";
            }
        }
    }
}
