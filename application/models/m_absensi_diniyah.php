<?php

class M_absensi_diniyah extends CI_Model
{

    public function tampil_absen_diniyah()
    {
        $data = array
        (
            "tb_absensi_diniyah.id_diniyah", 
            "tb_santri.NIS", 
            "tb_santri.nama_santri", 
            "tb_absensi_diniyah.tgl", 
            "tb_absensi_diniyah.keterangan", 
            "tb_mapel_diniyah.nama_mapel",
            "tb_absensi_diniyah.ringkasan_materi"
        );

        $this->db->select($data);
        $this->db->from('tb_absensi_diniyah');
        $this->db->join('tb_santri', 'tb_santri.NIS = tb_absensi_diniyah.NIS');
        $this->db->join('tb_mapel_diniyah', 'tb_mapel_diniyah.id_diniyah = tb_absensi_diniyah.id_diniyah');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_mapel()
    {
       return $this->db->get('tb_mapel_diniyah');
    }

    public function tampil_santri()
    {
       return $this->db->get('tb_santri');
    }

    public function tampil_data_akhir_diniyah()
    {
        $this->db->order_by('id_diniyah', 'DESC');
        return $this->db->get('tb_absensi_diniyah', 1);
    }

    public function tambah_absen_diniyah($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_absen_diniyah($table, $where)
    {
        return $this->db->get_where($where, $table);
    }

    public function update_absen_diniyah($where, $data, $table)
    {
        $this->db->update($where);
        $this->db->update($table, $data);
    }

    public function hapus_absen_diniyah($table, $where) 
    {
        return $this->db->delete($where, $table);
    }

    public function detail_absen_diniyah()
    {

    }
   
    
}


?>