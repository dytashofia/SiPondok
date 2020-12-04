    
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('santri_template/header2');
        $this->load->view('santri/v_pendaftaran');
        $this->load->view('santri_template/footer');
    }
}
