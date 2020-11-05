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

   public function tampil_admin()
   {
      return $this->db->get('tb_admin');
   }

   function tambah_produk($data, $table)
   {
       $this->db->insert($table, $data);
   }
}
