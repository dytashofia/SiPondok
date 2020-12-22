<?php

class M_user_absensi extends CI_Model
{
    public function tampil_absen_khataman()
    {
        $id = $this->session->userdata('NIS');
        $data = array
        (
            "tb_absensi_khataman.id_khataman",
            "tb_santri.NIS", 
            "tb_santri.nama_santri", 
            "tb_absensi_khataman.tgl", 
            "tb_absensi_khataman.keterangan"
        );

        $this->db->select($data);
        $this->db->from('tb_absensi_khataman', 'tb_santri');
        $this->db->join('tb_santri', 'tb_absensi_khataman.NIS = tb_santri.NIS');
        $this->db->where('tb_absensi_khataman.NIS', $id);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_absen_diniyah()
    {
        $id = $this->session->userdata('NIS');
        $data = array
        (
            "tb_absensi_diniyah.id_diniyah",
            "tb_santri.NIS", 
            "tb_santri.nama_santri", 
            "tb_absensi_diniyah.tgl", 
            "tb_absensi_diniyah.keterangan", 
            "tb_absensi_diniyah.ringkasan_materi"
        );

        $this->db->select($data);
        $this->db->from('tb_absensi_diniyah', 'tb_santri');
        $this->db->join('tb_santri', 'tb_absensi_diniyah.NIS = tb_santri.NIS');
        $this->db->where('tb_absensi_diniyah.NIS', $id);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data_akhir_khataman()
    {
        $this->db->order_by('id_khataman', 'DESC');
        return $this->db->get('tb_absensi_khataman', 1);
    }

    public function tampil_data_akhir_diniyah()
    {
        $this->db->order_by('id_diniyah', 'DESC');
        return $this->db->get('tb_absensi_diniyah', 1);
    }

    public function tambah_absen_khataman($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function tambah_absen_diniyah($data, $table)
    {
        $this->db->insert($table, $data);
    }
   
    
}


?>