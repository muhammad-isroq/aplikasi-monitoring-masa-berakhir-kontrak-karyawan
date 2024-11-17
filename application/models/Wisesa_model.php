<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisesa_model extends CI_Model {

    public function get_expiring_contracts($threshold_date) {
    // Ambil pegawai yang kontraknya akan berakhir dan belum dikirimi notifikasi
        $this->db->where('kontrak_akhir <=', $threshold_date);
        $this->db->where('is_notified', 0);
        return $this->db->get('wisesa')->result();
    }

    public function get_total_rows()
    {
    return $this->db->count_all('wisesa');
    }

    function tampil_data($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by("
            CASE 
            WHEN kontrak_akhir >= CURDATE() THEN 0
            ELSE 1
            END, kontrak_akhir ASC
            ");

        return $this->db->get('wisesa');
    }

    public function search_pegawai($keyword)
{
    $this->db->like('nama', $keyword);
    $this->db->or_like('npp', $keyword);
    $this->db->or_like('posisi_pekerjaan', $keyword);
    return $this->db->get('wisesa')->result_array();
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
