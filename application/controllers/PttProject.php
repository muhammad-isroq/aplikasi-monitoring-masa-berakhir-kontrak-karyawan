<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PttProject extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata('login'))){
            redirect('Auth');
        }
        $this->load->model('PttProject_model');
        $this->load->model('User_model');
        $this->load->library('Mailer');
    }

    public function index()
    {
    // Load library pagination
        $this->load->library('pagination');

    // Konfigurasi pagination
    $config['base_url'] = site_url('PttProject/index');
    $config['total_rows'] = $this->PttProject_model->get_total_rows(); // Ambil total data
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
    $data['ptt_project'] = $this->PttProject_model->tampil_data($config['per_page'], $page)->result_array();

    // Link pagination
    $data['pagination'] = $this->pagination->create_links();
    $data['page'] = $page;

    // Load view
    $this->load->view('v_header', $data);
    $this->load->view('ptt_project/v_ptt_project', $data);
    $this->load->view('v_footer'); 
}

public function search()
{
    $keyword = $this->input->post('keyword');
    $data['result'] = $this->PttProject_model->search_pegawai($keyword);

    // Load hasil pencarian di dalam modal
    $this->load->view('v_header', $data);
    $this->load->view('ptt_project/v_result', $data);
    $this->load->view('v_footer'); 
}


public function insert_ptt_project()
{

    
    $x = $this->input->POST('nama');
    $c = $this->input->POST('tempat_lahir');
    $v = $this->input->POST('tgl_lahir');
    $n = $this->input->POST('gender');
    $m = $this->input->POST('agama');
    $l = $this->input->POST('no_kontrak');
    $k = $this->input->POST('tgl_mulai');
    $s = $this->input->POST('tgl_selesai');
    $d = $this->input->POST('nama_project');
    $a = $this->input->POST('lokasi');
    

    $data = array(
        
        'nama' => $x,
        'tempat_lahir' => $c,
        'tgl_lahir' => $v,
        'gender' => $n,
        'agama' => $m,
        'no_kontrak' => $l,
        'tgl_mulai' => $k,        
        'tgl_selesai' => $s,
        'nama_project' => $d,
        'lokasi' => $a
    );


    $this->PttProject_model->insert_data($data);
    $this->session->set_flashdata('success','data berhasil di tambah');

    redirect('PttProject');
}

public function update_ptt_project()
{
    $id = $this->input->POST('id_ptt_project');    
    $x = $this->input->POST('nama');
    $c = $this->input->POST('tempat_lahir');
    $v = $this->input->POST('tgl_lahir');
    $n = $this->input->POST('gender');
    $m = $this->input->POST('agama');
    $l = $this->input->POST('no_kontrak');
    $k = $this->input->POST('tgl_mulai');
    $s = $this->input->POST('tgl_selesai');
    $d = $this->input->POST('nama_project');
    $a = $this->input->POST('lokasi');
    

    $data = array(
        
        'nama' => $x,
        'tempat_lahir' => $c,
        'tgl_lahir' => $v,
        'gender' => $n,
        'agama' => $m,
        'no_kontrak' => $l,
        'tgl_mulai' => $k,        
        'tgl_selesai' => $s,
        'nama_project' => $d,
        'lokasi' => $a
    );


    $where = array('id_ptt_project' => $id);
    $this->PttProject_model->update_data($data, $where);
    $this->session->set_flashdata('edit','data berhasil di update');
    redirect('PttProject');   
}

public function hapus_ptt_project($id)
{
    $where = array('id_ptt_project' => $id);
    $this->PttProject_model->hapus_data($where);
    $this->session->set_flashdata('delete','data berhasil di hapus');
    redirect('PttProject');
}

private function send_email($recipients, $subject, $body) {
    $this->load->library('email');

    // Ambil smtp_user dan smtp_pass dari tabel users
    $user_data = $this->db->select('smtp_user, smtp_pass')
                          ->where('id', 1) // Ganti sesuai ID user yang Anda inginkan
                          ->get('users')
                          ->row();

    // Konfigurasi email
    $config = [
        'protocol'  => 'smtp',
        'smtp_host' => 'smtp.gmail.com',
        'smtp_user' => $user_data->smtp_user,
        'smtp_pass' => $user_data->smtp_pass,
        'smtp_port' => 587,
        'smtp_crypto' => 'tls',
        'mailtype'  => 'html',
        'charset'   => 'utf-8',
        'newline'   => "\r\n"
    ];

    $this->email->initialize($config);
    $this->email->from($user_data->smtp_user, 'Simkarya');
    $this->email->to($recipients);
    $this->email->subject($subject);
    $this->email->message($body);

    // Kirim email dan cek hasilnya
    if ($this->email->send()) {
        echo "Notifikasi berhasil dikirim ke " . implode(", ", $recipients) . ".<br>";
    } else {
        echo "Gagal mengirim email ke " . implode(", ", $recipients) . ".<br>";
        show_error($this->email->print_debugger());
    }
}

public function send_contract_notifications() {
        $threshold_date = date('Y-m-d', strtotime('+1 month'));
        $expiring_employees = $this->PttProject_model->get_expiring_contracts($threshold_date);

         if (empty($expiring_employees)) {
        echo "Tidak ada data yang perlu dikirim notifikasi.<br>";
        return;
    }

    // Ambil email dan pesan dari tabel users
        $user_data = $this->db->select('email1, email2, message1, message2')->get('users')->result();

        foreach ($user_data as $user) {
        // Cek apakah email1 dan email2 tersedia
            if (!empty($user->email1)) {
                $recipients = [$user->email1];
                $subject = 'Pemberitahuan Masa Berakhir Kontrak';
                $body = $user->message1 . '<br><br>';

                foreach ($expiring_employees as $employee) {
                    $body .= 'Kontrak karyawan atas nama ' . $employee->nama . '('. $employee->tempat_lahir.')' . ' akan berakhir pada ' . date('d-m-Y', strtotime($employee->tgl_selesai)) . '.<br>';
                }
                $body .= '<br>Terima kasih.';

            // Kirim email ke email1 dan perbarui status jika berhasil
            if ($this->mailer->send_email($recipients, $subject, $body)) {
            // Perbarui status is_notified menjadi 1
                $this->db->where('id_ptt_project', $employee->id_ptt_project);
                $this->db->update('ptt_project', ['is_notified' => 1]);

                echo "Notifikasi berhasil dikirim atas berakhirnya masa kontrak karyawan " . $employee->nama . ".<br>";
            } else {
                echo "Gagal mengirim notifikasi atas berakhirnya masa kontrak karyawan " . $employee->nama . ".<br>";
            }
            }

            if (!empty($user->email2)) {
                $recipients = [$user->email2];
                $subject = 'Pemberitahuan Masa Berakhir Kontrak';
                $body = $user->message2 . '<br><br>';

                foreach ($expiring_employees as $employee) {
                    $body .= 'Kontrak karyawan atas nama ' . $employee->nama . '('. $employee->tempat_lahir.')' . ' akan berakhir pada ' . date('d-m-Y', strtotime($employee->tgl_selesai)) . '.<br>';
                }
                $body .= '<br>Terima kasih.';
                foreach ($expiring_employees as $employee) {
            // Kirim email ke email2
                if ($this->mailer->send_email($recipients, $subject, $body)) {
            // Perbarui status is_notified menjadi 1
                $this->db->where('id_ptt_project', $employee->id_ptt_project);
                $this->db->update('ptt_project', ['is_notified' => 1]);

                echo "Notifikasi berhasil dikirim atas berakhirnya masa kontrak karyawan " . $employee->nama . ".<br>";
            } else {
                echo "Gagal mengirim notifikasi atas berakhirnya masa kontrak karyawan " . $employee->nama . ".<br>";
            }
            }
        }
        }
    }



}
