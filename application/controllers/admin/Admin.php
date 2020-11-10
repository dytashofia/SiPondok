<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_master_pelanggaran');
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
        $data['tb_pelanggaran'] = $this->m_master_pelanggaran->tampil_pelanggaran()->result();
        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_pelanggaran', $data);
        $this->load->view('admin_template/footer');
    }



    public function tmbhpelanggaran()
    {
        $pelanggaran = $this->m_master_pelanggaran->tampil_pelanggaran();

        $data = array (
            'pelanggaran' => $pelanggaran           
        );

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhpelanggaran');
        $this->load->view('admin_template/footer');
    }

    public function tambah_aksi_pelanggaran() {
        $id_pelanggaran = $this->input->post('id_pelanggaran');
        $NIS = $this->input->post('NIS');
        $jenis_pelanggaran = $this->input->post('jenis_pelanggaran');
        $tgl = $this->input->post('tgl');
        $sanksi = $this->input->post('sanksi');
        $catatan = $this->input->post('catatan');

        $data = array(
            'id_pelanggaran' => $id_pelanggaran,
            'NIS' => $NIS,
            'jenis_pelanggaran' =>$jenis_pelanggaran,
            'tgl' => $tgl,
            'sanksi' => $sanksi,
            'catatan' => $catatan,
        );

        $this->m_master_pelanggaran->tambah_pelanggaran($data, 'tb_pelanggaran');
        redirect('index.php/admin/Admin/pelanggaran');

    }

    public function edit_pelanggaran() {
        $where = array (
            'id_pelanggaran' => $id_pelanggaran,
        );

        $data['tb_pelanggaran'] = $this->m_master_pelanggaran($where, 'tb_pelanggaran')->result;

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_edit_pelanggaran');
        $this->load->view('admin_template/footer');

    }

    public function update_pelanggaran() {
        $id_pelanggaran = $this->input->post('id_pelanggaran');
        $NIS = $this->input->post('NIS');
        $jenis_pelanggaran = $this->input->post('jenis_pelanggaran');
        $tgl = $this->input->post('tgl');
        $sanksi = $this->input->post('sanksi');
        $catatan = $this->input->post('catatan');

        $data = array(
            'id_pelanggaran' => $id_pelanggaran,
            'NIS' => $NIS,
            'jenis_pelanggaran' => $jenis_pelanggaran,
            'sanksi' => $sanksi,
            'catatn' => $catatan,
        );

        $where = array(
            'id_pelanggaran' => $id_pelanggaran,
        );

        redirect('index.php/admin/Admin/pelanggaran');
    }

    public function hapus_pelanggaran() {
        $where = array (
            'id_pelanggaran' => $id_pelanggaran,
        );

        $data['tb_pelanggaran'] = $this->m_master_pelanggaran($where, 'hapus_pelanggaran')->result();

        redirect('index.php/admin/Admin/pelanggaran');
    }

    //============ Batas Controller Pelanggaran ===============


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
