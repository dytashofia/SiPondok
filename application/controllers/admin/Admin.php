<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
         $this->load->model('m_perizinan');
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

    public function tmbhuser()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhuser');
        $this->load->view('admin_template/footer');
    }

    public function santri()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_santri');
        $this->load->view('admin_template/footer');
    }

    public function tmbhsantri()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhsantri');
        $this->load->view('admin_template/footer');
    }

    public function pembayaran()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_pembayaran');
        $this->load->view('admin_template/footer');
    }

    public function tmbhpembayaran()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhpembayaran');
        $this->load->view('admin_template/footer');
    }


    // PERIZINAN


    public function perizinan()
    {
        
        $data['izin'] = $this->m_perizinan->tampil_data()->result();  

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_perizinan',$data);
        $this->load->view('admin_template/footer');
    }

    public function tmbhperizinan()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhperizinan');
        $this->load->view('admin_template/footer');
    }

    function hapusperizinan($id){
        $where = array('id_perizinan' => $id); 
        $this->m_perizinan->hapus_data($where,'tb_perizinan'); 
        redirect('index.php/admin/Admin/perizinan');
    }

    public function pelanggaran()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_pelanggaran');
        $this->load->view('admin_template/footer');
    }

    public function tmbhpelanggaran()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhpelanggaran');
        $this->load->view('admin_template/footer');
    }


    public function kompetensi()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_kompetensi');
        $this->load->view('admin_template/footer');
    }

    public function tmbhkompetensi()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhkompetensi');
        $this->load->view('admin_template/footer');
    }
}
