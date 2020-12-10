<?php

class M_user_pelanggaran extends CI_Model {

    public function tampil_pelanggaran_santri() 
    {
        $id = $this->session->userdata('NIS');
        $_field = array(
            "tb_pelanggaran.id_pelanggaran", 
            "tb_santri.NIS", 
            "tb_santri.nama_santri", 
            "tb_pelanggaran.jenis_pelanggaran", 
            "tb_pelanggaran.tgl", 
            "tb_pelanggaran.sanksi", 
            "tb_pelanggaran.catatan"
        );
        
        $this->db->select($_field);
        $this->db->from('tb_pelanggaran');
        $this->db->join('tb_santri', 'tb_santri.NIS = tb_pelanggaran.NIS');
        $this->db->where('tb_pelanggaran.NIS', $id);
        $query = $this->db->get();
        return $query;
    }

    /*public function detail_pelanggaranSantri($where, $table) 
    {
        $field = array(
            "tb_pelanggaran.id_pelanggaran", 
            "tb_santri.NIS", 
            "tb_santri.nama_santri", 
            "tb_pelanggaran.jenis_pelanggaran", 
            "tb_pelanggaran.tgl", 
            "tb_pelanggaran.sanksi", 
            "tb_pelanggaran.catatan" 
        );

        $this->db->select($field);
        $this->db->where($where);
        $this->db->from('tb_pelanggaran');
        $this->db->join('tb_santri', 'tb_pelanggaran.NIS = tb_santri.NIS');
        $query = $this->db->get();
        return $query;
    }*/


}

?>