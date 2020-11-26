
<?php 

class M_setbayar extends CI_Model{

function tampil_data()
   {
      return $this->db->get('detail_pembayaran');
   }

   function hapus_data($where,$table){
    $this->db->where($where); 
    $this->db->delete($table);
  }

 function update_data($where,$data){
    $this->db->where($where);
    $this->db->update('detail_pembayaran',$data);
}

function tambah_data($data, $table)
   {
       $this->db->insert($table, $data);
   }

    function tampil_data_akhir()
  {
    $this->db->order_by('id_setbayar', 'DESC');
    return $this->db->get('detail_pembayaran', 1);
  }
}