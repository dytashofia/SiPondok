<?php 

class M_khataman extends CI_Model{

    function tampil_khataman(){
       $query= $this->db->query("SELECT tb_santri.nama_santri, tb_perizinan.alasan, tb_perizinan.tgl_izin, tb_perizinan.tgl_datang,  tb_perizinan.status, tb_perizinan.NIS,tb_perizinan.keterangan, tb_santri.nama_santri FROM tb_perizinan JOIN tb_santri ON tb_perizinan.NIS=tb_santri.NIS;");
    return $query;
  
    }


function tambah_data($data, $table)
   {
       $this->db->insert($table, $data);
   }

    function tampil_juz(){
      return $this->db->get('tb_juz');
    }

  function hapus_data($where,$table){
    $this->db->where($where); 
    $this->db->delete($table);
  }

 function update_data($where,$data){
    $this->db->where($where);
    $this->db->update('tb_perizinan',$data);
  } 


  
}