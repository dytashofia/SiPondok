
<?php 

class M_setdiniyah extends CI_Model
{

    public function tampil_data()
    {
        $data = array
        (
            "tb_diniyah.id_diniyah", 
            "tb_diniyah.tgl_diniyah", 
            "tb_mapel.nama_mapel"
        );
        
        $this->db->select($data);
        $this->db->from('tb_diniyah');
        $this->db->join('tb_mapel', 'tb_diniyah.id_mapel = tb_mapel.id_mapel');
        $query = $this->db->get();
        return $query;  
    }

    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where); 
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where,$data)
    {
        $this->db->where($where);
        $this->db->update('tb_diniyah', $data);
    }

    public function tampil_data_akhir()
    {
        $this->db->order_by('id_diniyah', 'DESC');
        return $this->db->get('tb_diniyah', 1);
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
        $this->db->from('tb_diniyah');
        $this->db->join('tb_mapel', 'tb_diniyah.id_mapel = tb_mapel.id_mapel');
        $query = $this->db->get();
        return $query; 
    }
}
