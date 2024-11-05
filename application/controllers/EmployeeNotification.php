<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeNotification extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Employee_model');
        $this->load->library('Mailer');
    }

    public function send_contract_notifications() {
        // Ambil tanggal satu bulan ke depan dari hari ini
        $threshold_date = date('Y-m-d', strtotime('+1 month'));
        
        // Ambil karyawan yang kontraknya akan berakhir dalam waktu satu bulan
        $expiring_employees = $this->Employee_model->get_expiring_contracts($threshold_date);

        // Email tujuan
        $recipients = ['muhammadisroq7@gmail.com'];
        
        foreach ($expiring_employees as $employee) {
            $subject = 'Pemberitahuan Masa Berakhir Kontrak';
            $body = 'Halo ' . $employee->name . ',<br><br>';
            $body .= 'Kontrak Anda akan berakhir pada ' . date('d-m-Y', strtotime($employee->end_date)) . '. ';
            $body .= 'Silakan hubungi HRD untuk informasi lebih lanjut.<br><br>Terima kasih.';

            // Kirim email notifikasi
            if ($this->mailer->send_email($recipients, $subject, $body)) {
                echo "Notifikasi berhasil dikirim untuk karyawan " . $employee->name . ".<br>";
            } else {
                echo "Gagal mengirim notifikasi untuk karyawan " . $employee->name . ".<br>";
            }
        }
    }
}
