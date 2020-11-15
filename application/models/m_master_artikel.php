<?php
//  berfungsi untuk melayani segala query CRUD database
class M_master_artikel extends CI_Model
{
   public function artikel()
    {
      
      $fields = array(
         "tb_artikel.id_artikel",
         "tb_admin.nama_admin",
         "tb_artikel.gambar",
         "tb_artikel.deskripsi",
          
       );
       $this->db->select($fields);
       $this->db->from('tb_artikel');
       $this->db->join('tb_admin', 'tb_artikel.id_admin = tb_admin.id_admin');
       $query = $this->db->get();
       return $query;
   }

   function tampil_artikel_akhir()
  {
    $this->db->order_by('id_artikel', 'DESC');
    return $this->db->get('tb_artikel', 1);
  }

  function tampil_admin()
   {
      return $this->db->get('tb_admin');
   }

   function tambah_artikel($data, $table)
   {
       $this->db->insert($table, $data);
   }

   function tampil_artikel_where($where, $table)
  {
    $fields = array(
      "tb_artikel.id_artikel",
         "tb_admin.nama_admin",
         "tb_artikel.gambar",
         "tb_artikel.deskripsi",
       
    );

    $this->db->select($fields);
    $this->db->from($table);
    $this->db->join('tb_admin', 'tb_artikel.id_admin = tb_admin.id_admin');
    $this->db->where($where);
    return $this->db->get();
  }

  function tampil_artikel_where_only($where, $table)  
  {
    return $this->db->get_where($table, $where);
    
  }

  function update_artikel($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function delete_artikel($where, $table)
  {
    $this->db->delete($table, $where);
  }



}
