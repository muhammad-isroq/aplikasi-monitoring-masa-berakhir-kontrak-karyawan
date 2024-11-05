<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

    public function get_expiring_contracts($threshold_date) {
        // Ambil karyawan dengan kontrak berakhir sebelum atau tepat pada threshold_date
        $this->db->where('end_date <=', $threshold_date);
        return $this->db->get('employees')->result();
    }
}
