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

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhproduk');
        $this->load->view('admin_template/footer');
    }
}