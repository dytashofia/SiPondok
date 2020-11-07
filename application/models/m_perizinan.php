<?php 

class M_perizinan extends CI_Model{

function tampil_data(){
		 $query= $this->db->query("SELECT tb_perizinan.id_perizinan, tb_perizinan.alasan, tb_perizinan.tgl_izin, tb_perizinan.tgl_datang, tb_perizinan.NIS, tb_santri.nama_santri FROM tb_perizinan JOIN tb_santri ON tb_perizinan.NIS=tb_santri.NIS;");
    return $query;
  
	}

}