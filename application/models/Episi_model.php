<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Episi_model extends CI_Model {

    public function get_expiring_contracts($threshold_date) {
    // Ambil pegawai yang kontraknya akan berakhir dan belum dikirimi notifikasi
        $this->db->where('kontrak_akhir <=', $threshold_date);
        $this->db->where('is_notified', 0);
        return $this->db->get('episi')->result();
    }


    public function get_total_rows()
    {
    return $this->db->count_all('episi');
    }

    function tampil_data($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by("
            CASE 
            WHEN kontrak_akhir >= CURDATE() THEN 0
            ELSE 1
            END, kontrak_akhir ASC
            ");

        return $this->db->get('episi');
    }


    function insert_data($data){
        return $this->db->insert('episi', $data);
    }

    function edit_data($where){
        return $this->db->get_where('episi', $where);
    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('episi', $data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('episi');

    } 
}
