<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin_template/footer');
    }

    public function user()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_user');
        $this->load->view('admin_template/footer');
    }

    public function santri()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_santri');
        $this->load->view('admin_template/footer');
    }

    public function pembayaran()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_pembayaran');
        $this->load->view('admin_template/footer');
    }

    public function perizinan()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_perizinan');
        $this->load->view('admin_template/footer');
    }

    public function pelanggaran()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_pelanggaran');
        $this->load->view('admin_template/footer');
    }

    public function kompetensi()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_kompetensi');
        $this->load->view('admin_template/footer');
    }

    public function dataWebUser()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_dataWebuser');
        $this->load->view('admin_template/footer');
    }
}
