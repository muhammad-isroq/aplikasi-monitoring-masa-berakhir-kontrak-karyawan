<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PegawaiEpisi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Episi_model');
        $this->load->library('Mailer');
    }

    public function index()
    {
        $data['episi'] = $this->Episi_model->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('episi/v_episi', $data);
        $this->load->view('v_footer'); 
    }

    public function insert_episi()
    {

        $penyedia_eksternal = $this->input->POST('penyedia_eksternal');        
        $nip = $this->input->POST('nip');
        $cabang = $this->input->POST('cabang');
        $wilayah = $this->input->POST('wilayah');
        $nama_pegawai = $this->input->POST('nama_pegawai');
        $no_ktp = $this->input->POST('no_ktp');
        $no_kk = $this->input->POST('no_kk');        
        $no_npwp = $this->input->POST('no_npwp');
        $no_rekening = $this->input->POST('no_rekening');
        $no_bpjs_kesehatan = $this->input->POST('no_bpjs_kesehatan');
        $no_bpjs_ketenagakerjaan = $this->input->POST('no_bpjs_ketenagakerjaan');
        $bank = $this->input->POST('bank');
        $tempat_lahir = $this->input->POST('tempat_lahir');
        $tgl_lahir = $this->input->POST('tgl_lahir');
        $usia_ditahun2023 = $this->input->POST('usia_ditahun2023');
        $jenis_kelamin = $this->input->POST('jenis_kelamin');
        $alamat_tinggal = $this->input->POST('alamat_tinggal');
        $provinsi = $this->input->POST('provinsi');
        $kota_kab = $this->input->POST('kota_kab');
        $alamat_ktp = $this->input->POST('alamat_ktp');
        $email = $this->input->POST('email');
        $keahlian = $this->input->POST('keahlian');
        $brevet = $this->input->POST('brevet');
        $operasional_nonoperasional = $this->input->POST('operasional_nonoperasional');
        $pendidikan = $this->input->POST('pendidikan');
        $jurusan = $this->input->POST('jurusan');
        $status_kawin = $this->input->POST('status_kawin');
        $agama = $this->input->POST('agama');
        $kontrak_awal = $this->input->POST('kontrak_awal');
        $kontrak_akhir = $this->input->POST('kontrak_akhir');
        $devisi = $this->input->POST('devisi');

        $data = array(
            'penyedia_eksternal' => $penyedia_eksternal,
            'nip' => $nip,
            'cabang' => $cabang,
            'wilayah' => $wilayah,
            'nama_pegawai' => $nama_pegawai,
            'no_ktp' => $no_ktp,
            'no_kk' => $no_kk,
            'no_npwp' => $no_npwp,
            'no_rekening' => $no_rekening,
            'no_bpjs_kesehatan' => $no_bpjs_kesehatan,
            'no_bpjs_ketenagakerjaan' => $no_bpjs_ketenagakerjaan,
            'bank' => $bank,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'usia_ditahun2023' => $usia_ditahun2023,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat_tinggal' => $alamat_tinggal,
            'provinsi' => $provinsi,
            'kota_kab' => $kota_kab,
            'alamat_ktp' => $alamat_ktp,
            'email' => $email,
            'keahlian' => $keahlian,
            'brevet' => $brevet,
            'operasional_nonoperasional' => $operasional_nonoperasional,
            'pendidikan' => $pendidikan,
            'jurusan' => $jurusan,
            'status_kawin' => $status_kawin,
            'agama' => $agama,
            'kontrak_awal' => $kontrak_awal,
            'kontrak_akhir' => $kontrak_akhir,
            'devisi' => $devisi

        );
        

        $this->Episi_model->insert_data($data);
        $this->session->set_flashdata('success','data berhasil di tambah');

        redirect('PegawaiEpisi');
    }

    public function update_episi()
    {
        $id = $this->input->POST('id_episi');
        $penyedia_eksternal = $this->input->POST('penyedia_eksternal');        
        $nip = $this->input->POST('nip');
        $cabang = $this->input->POST('cabang');
        $wilayah = $this->input->POST('wilayah');
        $nama_pegawai = $this->input->POST('nama_pegawai');
        $no_ktp = $this->input->POST('no_ktp');
        $no_kk = $this->input->POST('no_kk');        
        $no_npwp = $this->input->POST('no_npwp');
        $no_rekening = $this->input->POST('no_rekening');
        $no_bpjs_kesehatan = $this->input->POST('no_bpjs_kesehatan');
        $no_bpjs_ketenagakerjaan = $this->input->POST('no_bpjs_ketenagakerjaan');
        $bank = $this->input->POST('bank');
        $tempat_lahir = $this->input->POST('tempat_lahir');
        $tgl_lahir = $this->input->POST('tgl_lahir');
        $usia_ditahun2023 = $this->input->POST('usia_ditahun2023');
        $jenis_kelamin = $this->input->POST('jenis_kelamin');
        $alamat_tinggal = $this->input->POST('alamat_tinggal');
        $provinsi = $this->input->POST('provinsi');
        $kota_kab = $this->input->POST('kota_kab');
        $alamat_ktp = $this->input->POST('alamat_ktp');
        $email = $this->input->POST('email');
        $keahlian = $this->input->POST('keahlian');
        $brevet = $this->input->POST('brevet');
        $operasional_nonoperasional = $this->input->POST('operasional_nonoperasional');
        $pendidikan = $this->input->POST('pendidikan');
        $jurusan = $this->input->POST('jurusan');
        $status_kawin = $this->input->POST('status_kawin');
        $agama = $this->input->POST('agama');
        $kontrak_awal = $this->input->POST('kontrak_awal');
        $kontrak_akhir = $this->input->POST('kontrak_akhir');
        $devisi = $this->input->POST('devisi');

        $data = array(
            'penyedia_eksternal' => $penyedia_eksternal,
            'nip' => $nip,
            'cabang' => $cabang,
            'wilayah' => $wilayah,
            'nama_pegawai' => $nama_pegawai,
            'no_ktp' => $no_ktp,
            'no_kk' => $no_kk,
            'bank' => $l,
            'no_npwp' => $no_npwp,
            'no_rekening' => $no_rekening,
            'no_bpjs_kesehatan' => $no_bpjs_kesehatan,
            'no_bpjs_ketenagakerjaan' => $no_bpjs_ketenagakerjaan,
            'bank' => $bank,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'usia_ditahun2023' => $usia_ditahun2023,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat_tinggal' => $alamat_tinggal,
            'provinsi' => $provinsi,
            'kota_kab' => $kota_kab,
            'alamat_ktp' => $alamat_ktp,
            'email' => $email,
            'keahlian' => $keahlian,
            'brevet' => $brevet,
            'operasional_nonoperasional' => $operasional_nonoperasional,
            'pendidikan' => $pendidikan,
            'jurusan' => $jurusan,
            'status_kawin' => $status_kawin,
            'agama' => $agama,
            'kontrak_awal' => $kontrak_awal,
            'kontrak_akhir' => $kontrak_akhir,
            'devisi' => $devisi
        );


        $where = array('id_episi' => $id);
        $this->Episi_model->update_data($data, $where);
        $this->session->set_flashdata('edit','data berhasil di update');
        redirect('PegawaiEpisi');   
    }

    public function hapus_episi($id)
    {
        $where = array('id_episi' => $id);
        $this->Episi_model->hapus_data($where);
        $this->session->set_flashdata('delete','data berhasil di hapus');
        redirect('PegawaiEpisi');
    }

    public function send_contract_notifications() {
        $threshold_date = date('Y-m-d', strtotime('+1 month'));
        $expiring_employees = $this->Episi_model->get_expiring_contracts($threshold_date);
        $recipients = ['muhammadisroq7@gmail.com'];

        foreach ($expiring_employees as $employee) {
            $subject = 'Pemberitahuan Masa Berakhir Kontrak';
            $body = 'Halo,<br><br>';
            $body .= 'Kontrak karyawan atas nama '. $employee->nama_pegawai . ' akan berakhir pada ' . date('d-m-Y', strtotime($employee->kontrak_akhir)) . '. ';
            $body .= '<br><br>Terima kasih.';
        // Kirim email notifikasi
            if ($this->mailer->send_email($recipients, $subject, $body)) {
            // Perbarui status is_notified menjadi 1
                $this->db->where('id_episi', $employee->id_episi);
                $this->db->update('episi', ['is_notified' => 1]);

                echo "Notifikasi berhasil dikirim atas berakhirnya masa kontrak karyawan " . $employee->nama_pegawai . ".<br>";
            } else {
                echo "Gagal mengirim notifikasi atas berakhirnya masa kontrak karyawan " . $employee->nama_pegawai . ".<br>";
            }
        }
    }


}
