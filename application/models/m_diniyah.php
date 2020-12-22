<?php

class M_diniyah extends CI_Model
{

    public function tampil_diniyah()
    {
        return $this->db->get('tb_diniyah');
    }

    public function tambah_diniyah($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
