<?php

class M_diniyah extends CI_Model
{

    public function tampil_diniyah()
    {
        $data = array
        (
            "tb_diniyah.id_diniyah", 
            "tb_diniyah.tgl_diniyah", 
            "tb_mapel.nama_mapel" 
        );

        $this->db->select($data);
        $this->db->from('tb_diniyah', 'tb_mapel');
        $this->db->join('tb_mapel', 'tb_diniyah.id_mapel = tb_mapel.id_mapel');
        $query = $this->db->get();
        return $query;
    }

    public function ringkasan($NIS)
    {
        
        $NIS = $this->session->userdata('NIS');
        
        $query = $this->db->query("SELECT detail_diniyah.id_diniyah, tb_santri.nama_santri, tb_diniyah.tgl_diniyah, tb_mapel.nama_mapel FROM detail_diniyah, tb_santri, tb_diniyah, tb_mapel WHERE detail_diniyah.id_diniyah = tb_diniyah.id_diniyah AND detail_diniyah.NIS = tb_santri.NIS AND tb_diniyah.id_mapel = tb_mapel.id_mapel AND detail_diniyah.NIS = '$NIS'");
        return $query;
    }
    
    public function tampil_ringkasan($where)
    {
        $data = array
        (
            "detail_diniyah.id_diniyah", 
            "tb_santri.NIS", 
            "detail_diniyah.ringkasan_materi"
        );

        $this->db->select($data);
        $this->db->from('detail_diniyah', 'tb_santri');
        $this->db->join('tb_santri', 'detail_diniyah.NIS = tb_santri.NIS');
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }

    public function tampil($where)
    {
        $data = array
        (
            "tb_diniyah.id_diniyah", 
            "tb_diniyah.tgl_diniyah", 
            "tb_mapel.nama_mapel" 
        );

        $this->db->select($data);
        $this->db->from('tb_diniyah', 'tb_mapel');
        $this->db->join('tb_mapel', 'tb_diniyah.id_mapel = tb_mapel.id_mapel');
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_data_akhir()
    {
        $this->db->order_by('id_diniyah', 'DESC');
        return $this->db->get('tb_diniyah', 1);
    }

    public function tampil_mapel()
    {
        $query = $this->db->query('SELECT * FROM tb_mapel');
        return $query;
    }

    public function tampil_santri()
    {
        return $this->db->get('tb_santri');
    }
   
    public function absen_santri($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function tambah_absen_diniyah($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function detailAbsen_santri()
    {
        $data = array
        (
            "detail_diniyah.id_diniyah",
            "tb_santri.nama_santri", 
            "detail_diniyah.ringkasan_materi" 
        );

        $this->db->select($data);
        $this->db->from('detail_diniyah', 'tb_santri');
        $this->db->join('tb_santri', 'detail_diniyah.NIS = tb_santri.NIS');
        $query = $this->db->get();
        return $query;

    }

//  ======================================== Absen Diniyah ========================================
    
    public function absen_diniyah($where, $table)
    {
        $data = array
        ( 
            "tb_diniyah.id_diniyah",
            "tb_diniyah.tgl_diniyah", 
            "tb_mapel.nama_mapel", 
            "tb_mapel.nama_ustad"

        );

        $this->db->select($data);
        $this->db->where($where);
        $this->db->from('tb_diniyah', 'tb_mapel');
        $this->db->join('tb_mapel', 'tb_diniyah.id_mapel = tb_mapel.id_mapel');
        $query = $this->db->get();
        return $query;
    }

    
}
