<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisesa_model extends CI_Model {

    public function get_expiring_contracts($threshold_date) {
    // Ambil pegawai yang kontraknya akan berakhir dan belum dikirimi notifikasi
    $this->db->where('kontrak_akhir <=', $threshold_date);
    $this->db->where('is_notified', 0);
    return $this->db->get('wisesa')->result();
}


     function tampil_data(){
       return $this->db->get('wisesa');
    }

    function insert_data($data){
        return $this->db->insert('wisesa', $data);
    }

    function edit_data($where){
        return $this->db->get_where('wisesa', $where);
    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('wisesa', $data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('wisesa');

    } 
}
