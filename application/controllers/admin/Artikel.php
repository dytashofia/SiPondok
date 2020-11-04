<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_master_artikel');
        $this->load->helper('url');
    }



    public function artikel()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_artikel');
        $this->load->view('admin_template/footer');
    }

    public function tmbhartikel()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhartikel');
        $this->load->view('admin_template/footer');
    }
}