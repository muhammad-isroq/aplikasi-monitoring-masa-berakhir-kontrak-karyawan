<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PegawaiWisesa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata('login'))){
            redirect('Auth');
        }
        $this->load->model('Wisesa_model');
        $this->load->model('User_model');
        $this->load->library('Mailer');
    }

    public function index()
    {
    // Load library pagination
        $this->load->library('pagination');

    // Konfigurasi pagination
        $config['base_url'] = site_url('PegawaiWisesa/index');
    $config['total_rows'] = $this->Wisesa_model->get_total_rows(); // Ambil total data
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
    $data['wisesa'] = $this->Wisesa_model->tampil_data($config['per_page'], $page)->result_array();

    // Link pagination
    $data['pagination'] = $this->pagination->create_links();
    $data['page'] = $page;

    // Load view
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
    $expiring_employees = $this->Wisesa_model->get_expiring_contracts($threshold_date);

    // Ambil email dan pesan dari tabel users
    $user_data = $this->db->select('email1, email2, message1, message2')->get('users')->result();

    foreach ($user_data as $user) {
        // Cek apakah email1 dan email2 tersedia
        if (!empty($user->email1)) {
            $recipients = [$user->email1];
            $subject = 'Pemberitahuan Masa Berakhir Kontrak';
            $body = $user->message1 . '<br><br>';

            foreach ($expiring_employees as $employee) {
                $body .= 'Kontrak karyawan atas nama ' . $employee->nama . '('. $employee->posisi_pekerjaan.')' . ' akan berakhir pada ' . date('d-m-Y', strtotime($employee->kontrak_akhir)) . '.<br>';
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
                $body .= 'Kontrak karyawan atas nama ' . $employee->nama . '('. $employee->posisi_pekerjaan.')' . ' akan berakhir pada ' . date('d-m-Y', strtotime($employee->kontrak_akhir)) . '.<br>';
            }
            $body .= '<br>Terima kasih.';

            // Kirim email ke email2
            $this->send_email($recipients, $subject, $body);
        }
    }
}




}
