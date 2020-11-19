<?php

class M_admin extends CI_Model {
    
    public function tampil_admin() 
    {
        return $this->db->get('tb_admin');
    }

    public function tampil_data_akhir()
    {
        $this->db->order_by('id_admin', 'DESC');
        return $this->db->get('tb_admin', 1);
    }

    public function detail_admin($where, $table) 
    {
        return $this->db->get_where($table, $where);
    }

    public function tambah_admin($data, $table) 
    {
        $this->db->insert($table, $data);
    }

    public function edit_admin($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function update_admin($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_admin($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
 
}




?>