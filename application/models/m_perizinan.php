 <?php 

class M_perizinan extends CI_Model{

function tampil_data(){
		 $query= $this->db->query("SELECT tb_perizinan.id_perizinan, tb_perizinan.alasan, tb_perizinan.tgl_izin, tb_perizinan.tgl_datang,  tb_perizinan.status, tb_perizinan.NIS,tb_perizinan.keterangan, tb_santri.nama_santri FROM tb_perizinan JOIN tb_santri ON tb_perizinan.NIS=tb_santri.NIS;");
    return $query;
  
	}
	
  function cek($startdate,$enddate,$alasan){
     $query= $this->db->query("SELECT tb_santri.nama_santri, tb_perizinan.alasan, tb_perizinan.tgl_izin FROM tb_perizinan JOIN tb_santri ON tb_perizinan.NIS=tb_santri.NIS WHERE EXISTS(SELECT NIS FROM tb_santri WHERE tb_santri.NIS=tb_perizinan.NIS and tb_perizinan.tgl_izin BETWEEN '$startdate' and '$enddate' and tb_perizinan.alasan='$alasan')");
     return $query->result();
  }

  function cek2($startdate,$enddate){
     $query= $this->db->query("SELECT *FROM tb_santri WHERE NOT EXISTS(SELECT NIS FROM tb_perizinan WHERE tb_santri.NIS=tb_perizinan.NIS and tb_perizinan.tgl_izin BETWEEN '$startdate' and '$enddate')");
     return $query->result();
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

  function detail_data($where){ 

    $fields = array(
      "tb_perizinan.id_perizinan", 
      "tb_perizinan.alasan", 
      "tb_perizinan.tgl_izin", 
      "tb_perizinan.tgl_datang", 
      "tb_perizinan.NIS",
      "tb_perizinan.keterangan", 
      "tb_perizinan.status",
      "tb_santri.nama_santri", 
      "tb_santri.no_hp", 
      "tb_santri.alamat"
          
       );
       $this->db->select($fields);
       $this->db->from('tb_perizinan');
       $this->db->where($where);
       $this->db->join('tb_santri', 'tb_perizinan.NIS = tb_santri.NIS');
       $query = $this->db->get();
       return $query;
  }


}