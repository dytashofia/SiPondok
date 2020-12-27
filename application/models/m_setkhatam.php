
<?php

class M_setkhatam extends CI_Model
{

  function tampil_data()
  {
    return $this->db->get('tb_khataman');
  }

  function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  function update_data($where, $data)
  {
    $this->db->where($where);
    $this->db->update('tb_khataman', $data);
  }

  function tambah_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  function tampil_data_akhir()
  {
    $this->db->order_by('id_khataman', 'DESC');
    return $this->db->get('tb_khataman', 1);
  }

  // function jumlah($id)

  //  {

  //   $query= $this->db->query("SELECT COUNT(detail_khataman.id_juz) FROM detail_khataman JOIN tb_santri ON detail_khataman.NIS=tb_santri.NIS WHERE detail_khataman.id_khataman='$id';");
  //   return $query;
  //  }


  // function nama($id)

  // {

  //  $query= $this->db->query("SELECT tb_santri.nama_santri FROM detail_khataman JOIN tb_santri ON detail_khataman.NIS=tb_santri.NIS WHERE detail_khataman.id_khataman='$id';");
  //  return $query;
  // }

  function khatam($id)
  {
    $query = $this->db->query("SELECT nama_santri, NIS FROM tb_santri WHERE EXISTS(SELECT NIS FROM detail_khataman WHERE tb_santri.NIS=detail_khataman.NIS AND detail_khataman.id_khataman='$id')");
    return $query;
  }

  function tidak($id)
  {
    $query = $this->db->query("SELECT nama_santri FROM tb_santri WHERE NOT EXISTS(SELECT NIS FROM detail_khataman WHERE tb_santri.NIS=detail_khataman.NIS AND detail_khataman.id_khataman='$id')");
    return $query;
  }
}
