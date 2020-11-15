<?php 
class M_master_pelanggaran extends CI_Model {

    public function tampil_pelanggaran() 
    {
        $field = array(
            "tb_santri.NIS",
            "tb_santri.nama_santri",
            "tb_pelanggaran.jenis_pelanggaran",
            "tb_pelanggaran.tgl",
            "tb_pelanggaran.sanksi",
            "tb_pelanggaran.catatan",
        );

        $this->db->select($field);
        $this->db->from('tb_pelanggaran');
        $this->db->join('tb_santri', 'tb_santri.NIS = tb_pelanggaran.NIS');
        $query = $this->db->get();
        return $query;
    }

    public function tambah_pelanggaran($data, $table) {
        $this->db->insert($table, $data);
    }

    public function edit_pelanggaran($table, $where) {
        return $this->db->get->where($where, $table);
    }

    public function update_pelanggaran($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_pelanggaran($table, $where) {
        return $this->db->delete($where, $table);
    }



}



?>
