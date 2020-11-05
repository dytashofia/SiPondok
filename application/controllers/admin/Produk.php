<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_master_produk');
        $this->load->helper('url');
    }



public function produk()
    {
        $data['tb_produk'] = $this->m_master_produk->produk()->result();
        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_produk', $data);
        $this->load->view('admin_template/footer');
    }

    public function tmbhproduk()
    {
        $admin = $this->m_master_produk->tampil_admin()->result();
        
        $data = array(
            'admin' => $admin
        );

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhproduk', $data);
        $this->load->view('admin_template/footer');
    }

    public function aksiTambahproduk()
    {
        $id_produk = $this->input->post('id_produk');
        $id_admin = $this->input->post('id_admin');
        $nama_produk = $this->input->post('nama_produk');
        $foto_produk = $_FILES['foto_produk'];
        $deskripsi = $this->input->post('deskripsi');
        $resep = $this->input->post('resep');

        if ($foto_produk=''){}else{
            $config['upload_path']          = './assets/img/produk';
            $config['allowed_types']        ='jpg|png|jpeg|gif|JPG|JPEG';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto_produk')) {
                echo "Upload Gagal"; die();
            }else{
                $foto_produk=$this->upload->data('file_name');
            }

        }


        $data = array(
            'id_produk' => $id_produk,
            'id_admin' => $id_admin,
            'nama_produk' => $nama_produk,
            'foto_produk' => $foto_produk,
            'deskripsi' => $deskripsi,
            'resep' => $resep,
        );
        
        $this->m_master_produk->tambah_produk($data, 'tb_produk');
        redirect('index.php/admin/produk/produk'); 

        }
    
}