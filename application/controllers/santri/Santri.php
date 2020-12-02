    
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Santri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->simple_login2->cek_login();
        $this->load->helper('url');
    }

    public function index()
    {

        $this->load->view('santri_template/header');
        $this->load->view('santri/v_dashboard');
        $this->load->view('santri_template/profile');
        $this->load->view('santri_template/footer');
    }

    public function kompetensi()
    {
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_kompetensi');
        $this->load->view('santri_template/profile');
        $this->load->view('santri_template/footer');
    }


    public function pembayaran()
    {
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_pembayaran');
        $this->load->view('santri_template/profile');
        $this->load->view('santri_template/footer');
    }


    public function pelanggaran()
    {
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_pelanggaran');
        $this->load->view('santri_template/profile');
        $this->load->view('santri_template/footer');
    }


    public function perizinan()
    {
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_perizinan');
        $this->load->view('santri_template/profile');
        $this->load->view('santri_template/footer');
    }
}
