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
    public function tampil_data_bayar() 
      {
  
      $query= $this->db->query("SELECT tb_pembayaran.id_pembayaran, tb_pembayaran.NIS, detail_pembayaran.jenis_pembayaran, detail_pembayaran.jumlah_bayar, tb_pembayaran.tgl_pembayaran, tb_pembayaran.bukti_pembayaran, tb_pembayaran.status, tb_pembayaran.nama_pembayar, tb_santri.nama_santri,tb_santri.nama_wali, tb_pembayaran.id_setbayar FROM tb_pembayaran JOIN tb_santri ON tb_pembayaran.NIS=tb_santri.NIS JOIN detail_pembayaran ON tb_pembayaran.id_setbayar=detail_pembayaran.id_setbayar;");
          return $query;
    
      }
    function tampil_data_akhir()
    {
      $this->db->order_by('id_pembayaran', 'DESC');
      return $this->db->get('tb_pembayaran', 1);
    }
    
    function tambah_data_bayar($data, $table)
    {
        $this->db->insert($table, $data);
    }
    
    function edit_data($where,$table){    
      return $this->db->get_where($table,$where);
    }

    function update_data($where, $data, $table)
    {
      $this->db->where($where);
      $this->db->update($table, $data);
    }
    
    public function tampil_data_info_where($where,$table){    
      return $this->db->get_where($table,$where);
    }

  }