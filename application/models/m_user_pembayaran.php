<?php

class M_user_pembayaran extends CI_Model {

    public function tampil_data() 
    {
        $id= $this->session->userdata('NIS');
        //$id = '7272';
        $fields = array(
            "tb_pembayaran.id_pembayaran",
            "tb_pembayaran.tgl_pembayaran",
            "tb_pembayaran.nama_pembayar",
            "detail_pembayaran.jenis_pembayaran",
            "detail_pembayaran.jumlah_bayar",
            "tb_pembayaran.bukti_pembayaran",
            "tb_pembayaran.status",
             
          );
          $this->db->select($fields);
          $this->db->from('tb_pembayaran');
          $this->db->join('detail_pembayaran', 'tb_pembayaran.id_setbayar=detail_pembayaran.id_setbayar');
          $this->db->where('tb_pembayaran.NIS', $id);
          $this->db->order_by('tb_pembayaran.tgl_pembayaran DESC');
          $query = $this->db->get();
          return $query;
      }

    public function tampil_data_info() 
      {
          return $this->db->get('detail_pembayaran');
      }
    }