<?php

class M_pembayaran extends CI_Model {

    public function tampil_data() 
    {

		$query= $this->db->query("SELECT tb_pembayaran.id_pembayaran, tb_pembayaran.NIS, tb_pembayaran.jenis_pembayaran, tb_pembayaran.tgl_pembayaran, tb_pembayaran.bukti_pembayaran, tb_pembayaran.status, tb_pembayaran.nama_pembayar, tb_santri.nama_santri,tb_santri.nama_wali FROM tb_pembayaran JOIN tb_santri ON tb_pembayaran.NIS=tb_santri.NIS;");
        return $query;
  
	}

}
