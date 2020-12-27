<?php

class M_diniyah extends CI_Model
{
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
        $query = $this->db->query("SELECT * FROM detail_diniyah");
        return $query;
    }

    
}
