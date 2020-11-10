<?php
//  berfungsi untuk melayani segala query CRUD database
class M_master_produk extends CI_Model
{
    // function untuk mengambil keseluruhan baris data dari tabel admin
  public function produk()
    {
      
      $fields = array(
         "tb_produk.id_produk",
         "tb_admin.nama_admin",
         "tb_produk.nama_produk",
         "tb_produk.deskripsi",
         "tb_produk.resep",
         "tb_produk.foto_produk",
          
       );
       $this->db->select($fields);
       $this->db->from('tb_produk');
       $this->db->join('tb_admin', 'tb_produk.id_admin = tb_admin.id_admin');
       $query = $this->db->get();
       return $query;
   }

   function tampil_produk_akhir()
  {
    $this->db->order_by('id_produk', 'DESC');
    return $this->db->get('tb_produk', 1);
  }

   function tampil_admin()
   {
      return $this->db->get('tb_admin');
   }

   function tambah_produk($data, $table)
   {
       $this->db->insert($table, $data);
   }

  function tampil_produk_where($where, $table)
  {
    $fields = array(
      "tb_produk.id_produk",
      "tb_admin.nama_admin",
      "tb_produk.nama_produk",
      "tb_produk.deskripsi",
      "tb_produk.resep",
      "tb_produk.foto_produk",
       
    );

    $this->db->select($fields);
    $this->db->from($table);
    $this->db->join('tb_admin', 'tb_produk.id_admin = tb_admin.id_admin');
    $this->db->where($where);
    return $this->db->get();
  }
  
  function tampil_produk_where_only($where, $table)  
  {
    return $this->db->get_where($table, $where);
    
  }

  function update_produk($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function delete_produk($where, $table)
  {
    $this->db->delete($table, $where);
  }

}
