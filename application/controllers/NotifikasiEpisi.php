<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotifikasiEpisi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // if(empty($this->session->userdata('login'))){
        //     redirect('Auth');
        // }
        $this->load->model('Episi_model');
        $this->load->model('User_model');
        $this->load->library('Mailer');
    }

    public function index()
    {
      $threshold_date = date('Y-m-d', strtotime('+1 month'));
      $expiring_employees = $this->Episi_model->get_expiring_contracts($threshold_date);

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
                $body .= 'Kontrak karyawan atas nama ' . $employee->nama_pegawai . '('. $employee->posisi_pekerjaan.')' . ' akan berakhir pada ' . date('d-m-Y', strtotime($employee->kontrak_akhir)) . '.<br>';
            }
            $body .= '<br>Terima kasih.';

            // Kirim email ke email1 dan perbarui status jika berhasil
            if ($this->mailer->send_email($recipients, $subject, $body)) {
            // Perbarui status is_notified menjadi 1
                $this->db->where('id_episi', $employee->id_episi);
                $this->db->update('episi', ['is_notified' => 1]);

                echo "Notifikasi berhasil dikirim atas berakhirnya masa kontrak karyawan " . $employee->nama_pegawai . ".<br>";
            } else {
                echo "Gagal mengirim notifikasi atas berakhirnya masa kontrak karyawan " . $employee->nama_pegawai . ".<br>";
            }
        }

        if (!empty($user->email2)) {
            $recipients = [$user->email2];
            $subject = 'Pemberitahuan Masa Berakhir Kontrak';
            $body = $user->message2 . '<br><br>';

            foreach ($expiring_employees as $employee) {
                $body .= 'Kontrak karyawan atas nama ' . $employee->nama_pegawai . '('. $employee->posisi_pekerjaan.')' . ' akan berakhir pada ' . date('d-m-Y', strtotime($employee->kontrak_akhir)) . '.<br>';
            }
            $body .= '<br>Terima kasih.';
            foreach ($expiring_employees as $employee) {
            // Kirim email ke email2
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



                
}