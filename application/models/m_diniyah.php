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
        return $this->db->get('tb_mapel');
    }

    public function tampil_santri()
    {
        return $this->db->get('tb_santri');
    }

    public function tambah_diniyah($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_diniyah($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_diniyah($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_diniyah($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_diniyah($where, $table)
    {
        $data = array
        (
            "tb_diniyah.id_diniyah", 
            "tb_diniyah.tgl_diniyah", 
            "tb_mapel.nama_mapel" 
        );

        $this->db->select($data);
        $this->db->where($where);
        $this->db->from('tb_diniyah', 'tb_mapel');
        $this->db->join('tb_mapel', 'tb_diniyah.id_mapel = tb_mapel.id_mapel');
        $query = $this->db->get();
        return $query->row();
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

    public function tambah_absen_diniyah($data, $table)
    {
        $this->db->insert($table, $data);
    }

    
}
