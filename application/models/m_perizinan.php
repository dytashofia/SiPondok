<?php 

class M_perizinan extends CI_Model{

function tampil_data(){
		 $query= $this->db->query("SELECT tb_perizinan.id_perizinan, tb_perizinan.alasan, tb_perizinan.tgl_izin, tb_perizinan.tgl_datang, tb_perizinan.NIS,tb_perizinan.keterangan, tb_santri.nama_santri FROM tb_perizinan JOIN tb_santri ON tb_perizinan.NIS=tb_santri.NIS;");
    return $query;
  
	}
	
function hapus_data($where,$table){
		$this->db->where($where); 
		$this->db->delete($table);
	}

function tambah_data($data, $table)
   {
       $this->db->insert($table, $data);
   }

    function tampil_data_akhir()
  {
    $this->db->order_by('id_perizinan', 'DESC');
    return $this->db->get('tb_perizinan', 1);
  }

function tampil_perizinan()
   {
      return $this->db->get('tb_perizinan');
   }

function edit_data($where,$table){    
  return $this->db->get_where($table,$where);
  }


function update_data($where,$data){
    $this->db->where($where);
    $this->db->update('tb_perizinan',$data);


  } 


}