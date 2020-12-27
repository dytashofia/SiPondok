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

  function khatamanharian($id){
    $nis=$this->session->userdata('NIS');
    $query= $this->db->query("SELECT detail_khataman.tgl_juz, tb_juz.nama_juz FROM detail_khataman JOIN tb_juz ON detail_khataman.id_juz=tb_juz.id_juz WHERE detail_khataman.id_khataman='$id' And detail_khataman.NIS ='$nis';");
    return $query;
  }

function jumlahkhatam($id)

   {
    $nis=$this->session->userdata('NIS');
    $query= $this->db->query("SELECT COUNT('NIS') FROM detail_khataman WHERE NIS='$nis' AND id_khataman='$id';");
    return $query;
   }

}