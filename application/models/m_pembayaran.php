<?php

class M_pembayaran extends CI_Model {

    public function tampil_data() 
    {

		$query= $this->db->query("SELECT tb_pembayaran.id_pembayaran, tb_pembayaran.NIS, detail_pembayaran.jenis_pembayaran, detail_pembayaran.jumlah_bayar, tb_pembayaran.tgl_pembayaran, tb_pembayaran.bukti_pembayaran, tb_pembayaran.status, tb_pembayaran.nama_pembayar, tb_santri.nama_santri,tb_santri.nama_wali, tb_pembayaran.id_setbayar FROM tb_pembayaran JOIN tb_santri ON tb_pembayaran.NIS=tb_santri.NIS JOIN detail_pembayaran ON tb_pembayaran.id_setbayar=detail_pembayaran.id_setbayar;");
        return $query;
  
	}


	function tambah_data($data, $table)
   {
       $this->db->insert($table, $data);
   }

    function tampil_data_akhir()
  {
    $this->db->order_by('id_pembayaran', 'DESC');
    return $this->db->get('tb_pembayaran', 1);
  }

function hapus_data($where,$table){
    $this->db->where($where); 
    $this->db->delete($table);
  }

  function detail_data($where){ 

    $fields = array(
      "tb_pembayaran.id_pembayaran", 
      "tb_pembayaran.NIS", 
      "tb_pembayaran.nama_pembayar", 
      "detail_pembayaran.jenis_pembayaran", 
      "tb_pembayaran.tgl_pembayaran",
      "tb_pembayaran.status", 
      "tb_pembayaran.bukti_pembayaran", 
      "tb_santri.no_hp", 
          
       );
       $this->db->select($fields);
       $this->db->from('tb_pembayaran');
       $this->db->where($where);
       $this->db->join('tb_santri', 'tb_pembayaran.NIS = tb_santri.NIS');
       $this->db->join('detail_pembayaran', 'tb_pembayaran.id_setbayar = detail_pembayaran.id_setbayar');
       $query = $this->db->get();
       return $query;
  } 

  function edit_data($where,$table){    
  return $this->db->get_where($table,$where);
  }


function update_data($where,$data){
    $this->db->where($where);
    $this->db->update('tb_pembayaran',$data);


  } 

	}


