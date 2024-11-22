<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PttReguler_model extends CI_Model {

    public function get_expiring_contracts($threshold_date) {
    // Ambil pegawai yang kontraknya akan berakhir dan belum dikirimi notifikasi
        $this->db->where('end_date <=', $threshold_date);
        $this->db->where('is_notified', 0);
        return $this->db->get('ptt_reguler')->result();
    }

    public function get_total_rows()
    {
    return $this->db->count_all('ptt_reguler');
    }

    function tampil_data($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by("
            CASE 
            WHEN end_date >= CURDATE() THEN 0
            ELSE 1
            END, end_date DESC
            ");

        return $this->db->get('ptt_reguler');
    }

    public function search_pegawai($keyword)
{
    $this->db->like('nama', $keyword);
    $this->db->or_like('unit_organisasi', $keyword);
    $this->db->or_like('jabatan', $keyword);
    return $this->db->get('ptt_reguler')->result_array();
}

    function insert_data($data){
        return $this->db->insert('ptt_reguler', $data);
    }

    function edit_data($where){
        return $this->db->get_where('ptt_reguler', $where);
    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('ptt_reguler', $data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('ptt_reguler');

    } 
}
