<?php

class M_pembayaran extends CI_Model {

    public function tampil_data() 
    {

		 $query= $this->db->query("SELECT tb_pembayaran.id_pembayaran, tb_pembayaran.NIS, tb_pembayaran.jenis_pembayaran, tb_pembayaran.tgl_pembayaran, tb_pembayaran.bukti_pembayaran, tb_pembayaran.status, tb_pembayaran.nama_pembayar, tb_santri.nama_santri,tb_santri.nama_wali FROM tb_pembayaran JOIN tb_santri ON tb_pembayaran.NIS=tb_santri.NIS;");
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

	}
