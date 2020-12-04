<?php 

class M_perizinansantri extends CI_Model{

	function tampil_data(){
  		$id=$this->session->userdata('NIS');
		 $fields = array(
      "tb_perizinan.id_perizinan", 
      "tb_perizinan.alasan", 
      "tb_perizinan.tgl_izin", 
      "tb_perizinan.tgl_datang", 
      "tb_perizinan.NIS",
      "tb_perizinan.keterangan", 
      "tb_perizinan.status",
      "tb_santri.username",
      "tb_santri.nama_santri", 
      "tb_santri.no_hp", 
      "tb_santri.alamat"
          
       );
       $this->db->select($fields);
       $this->db->from('tb_perizinan');
       $this->db->join('tb_santri', 'tb_perizinan.NIS = tb_santri.NIS');
       $this->db->where('tb_perizinan.NIS',$id);
       $query = $this->db->get();
       return $query;
  
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

  function hapus_data($where,$table){
    $this->db->where($where); 
    $this->db->delete($table);
  }

 function update_data($where,$data){
    $this->db->where($where);
    $this->db->update('tb_perizinan',$data);


  } 


}