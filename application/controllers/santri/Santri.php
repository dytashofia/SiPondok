    
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Santri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->simple_login2->cek_login();
        $this->load->model('m_user_pembayaran');

        $this->load->helper('url','form');
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

            //=======================================PEMBAYARAN==========================================//
    
    public function pembayaran()
    {
        $data['user'] = $this->m_user_pembayaran->tampil_data()->result();
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_histori_pembayaran', $data);
        $this->load->view('santri_template/profile');
        $this->load->view('santri_template/footer');
    }

    public function infopembayaran()
    {
        $data['info'] = $this->m_user_pembayaran->tampil_data_info()->result();
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_infopembayaran', $data);
        $this->load->view('santri_template/profile');
        $this->load->view('santri_template/footer');
    }

    //=======================================END PEMBAYARAN==========================================//

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
