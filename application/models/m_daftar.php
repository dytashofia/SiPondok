<?php
//  berfungsi untuk melayani segala query CRUD database
class M_daftar extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('tb_santri', $data);
    }
}