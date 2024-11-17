<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PegawaiEpisi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata('login'))){
        redirect('Auth');
        }
        $this->load->model('Episi_model');
        $this->load->model('User_model');
        $this->load->library('Mailer');
    }

    public function index()
    {
    // Load library pagination
        $this->load->library('pagination');

    // Konfigurasi pagination
        $config['base_url'] = site_url('PegawaiEpisi/index');
    $config['total_rows'] = $this->Episi_model->get_total_rows(); // Ambil total data
    $config['per_page'] = 5; // Jumlah data per halaman
    $config['uri_segment'] = 3;
    
    // Bootstrap 5 Pagination Styling
    $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul>';

    $config['first_link'] = 'First';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';

    $config['last_link'] = 'Last';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';

    $config['next_link'] = 'Next';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';

    $config['prev_link'] = 'Previous';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';

    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
    $config['cur_tag_close'] = '</a></li>';

    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    $config['attributes'] = ['class' => 'page-link'];


    // Inisialisasi pagination
    $this->pagination->initialize($config);

    // Ambil data dengan limit dan offset
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $data['episi'] = $this->Episi_model->tampil_data($config['per_page'], $page)->result_array();

    // Link pagination
    $data['pagination'] = $this->pagination->create_links();
    $data['page'] = $page;

    // Load view
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

    private function send_email($recipients, $subject, $body) {
        $this->load->library('email');

        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'isroqtest@gmail.com',
            'smtp_pass' => 'bijh bywl jfgy yhsw',
            'smtp_port' => 587,
            'smtp_crypto' => 'tls',
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->email->initialize($config);
        $this->email->from('isroqtest@gmail.com', 'Simkarya');
        $this->email->to($recipients);
        $this->email->subject($subject);
        $this->email->message($body);

        if ($this->email->send()) {
            echo "Notifikasi berhasil dikirim ke " . implode(", ", $recipients) . ".<br>";
        } else {
            echo "Gagal mengirim email ke " . implode(", ", $recipients) . ".<br>";
            show_error($this->email->print_debugger());
        }
    }

    public function send_contract_notifications() {
        $threshold_date = date('Y-m-d', strtotime('+1 month'));
        $expiring_employees = $this->Episi_model->get_expiring_contracts($threshold_date);

    // Ambil email dan pesan dari tabel users
        $user_data = $this->db->select('email1, email2, message1, message2')->get('users')->result();

        foreach ($user_data as $user) {
        // Cek apakah email1 dan email2 tersedia
            if (!empty($user->email1)) {
                $recipients = [$user->email1];
                $subject = 'Pemberitahuan Masa Berakhir Kontrak';
                $body = $user->message1 . '<br><br>';

                foreach ($expiring_employees as $employee) {
                    $body .= 'Kontrak karyawan atas nama ' . $employee->nama_pegawai . '('. $employee->brevet.')' . ' akan berakhir pada ' . date('d-m-Y', strtotime($employee->kontrak_akhir)) . '.<br>';
                }
                $body .= '<br>Terima kasih.';

            // Kirim email ke email1
                $this->send_email($recipients, $subject, $body);
            }

            if (!empty($user->email2)) {
                $recipients = [$user->email2];
                $subject = 'Pemberitahuan Masa Berakhir Kontrak';
                $body = $user->message2 . '<br><br>';

                foreach ($expiring_employees as $employee) {
                    $body .= 'Kontrak karyawan atas nama ' . $employee->nama_pegawai . '('. $employee->brevet.')' . ' akan berakhir pada ' . date('d-m-Y', strtotime($employee->kontrak_akhir)) . '.<br>';
                }
                $body .= '<br>Terima kasih.';

            // Kirim email ke email2
                $this->send_email($recipients, $subject, $body);
            }
        }
    }



}
