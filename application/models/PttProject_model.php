<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PttProject_model extends CI_Model {

    public function get_expiring_contracts($threshold_date) {
    // Ambil pegawai yang kontraknya akan berakhir dan belum dikirimi notifikasi
        $this->db->where('tgl_selesai <=', $threshold_date);
        $this->db->where('is_notified', 0);
        return $this->db->get('ptt_project')->result();
    }

    public function get_total_rows()
    {
    return $this->db->count_all('ptt_project');
    }

    function tampil_data($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by("
            CASE 
            WHEN tgl_selesai >= CURDATE() THEN 0
            ELSE 1
            END, tgl_selesai DESC
            ");

        return $this->db->get('ptt_project');
    }

    public function search_pegawai($keyword)
{
    $this->db->like('nama', $keyword);
    $this->db->or_like('no_kontrak', $keyword);
    $this->db->or_like('nama_project', $keyword);
    return $this->db->get('ptt_project')->result_array();
}

    function insert_data($data){
        return $this->db->insert('ptt_project', $data);
    }

    function edit_data($where){
        return $this->db->get_where('ptt_project', $where);
    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('ptt_project', $data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('ptt_project');

    } 
}
