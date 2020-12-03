    
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

    public function tmbhuploadpembayaran()
    {
        $data = $this->m_user_pembayaran->tampil_data_bayar()->num_rows();
        if ($data > 0) {
            // Mengambil id soal sebelumnya
            $lastId = $this->m_user_pembayaran->tampil_data_akhir()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id pembayaran
                $rawid_pembayaran = substr($row->id_pembayaran, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id pembayran menjadi integer
                $id_pembayaranInt = intval($rawid_pembayaran);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($id_pembayaranInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_pembayaran = "BY00" . ($id_pembayaranInt + 1);
                } else if (strlen($id_pembayaranInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_pembayaran = "BY0" . ($id_pembayaranInt + 1);
                } else if (strlen($id_pembayaranInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_pembayaran = "BY" . ($id_pembayaranInt + 1);
                }
            }
        } else {
            // Jika jumlah perizinan kurang dari sama dengan 0
            $id_pembayaran = "BY001";
        }

        // Mengambil data pembayaran menggunakan model

        $data = $this->m_user_pembayaran->tampil_data()->result();
        $detail= $this->m_user_pembayaran->tampil_data_info()->result();

        $data = array(
            'detail'=>$detail,
            'id_pembayaran' => $id_pembayaran

        );
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_tmbhuploadpembayaran', $data);
        $this->load->view('santri_template/profile');
        $this->load->view('santri_template/footer');
        
    }

    public function aksiTambahuploadpembayaran()
    {
        $id_pembayaran = $this->input->post('id_pembayaran');
        $NIS = $this->input->post('NIS');
        $nama_pembayar = $this->input->post('nama_pembayar');
        $id_setbayar = $this->input->post('id_setbayar');
        $tgl_pembayaran = $this->input->post('tgl_pembayaran');
        $bukti_pembayaran = $_FILES['bukti_pembayaran'];
        $status = $this->input->post('status');

        if ($bukti_pembayaran = '') {
        } else {
            $config['upload_path']          = './assets/img/pembayaran';
            $config['allowed_types']        = 'jpg|png|jpeg|gif|JPG|JPEG|pdf';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('bukti_pembayaran')) {
                //echo "Upload Gagal"; die();
            }else{
                $bukti_pembayaran=$this->upload->data('file_name');
            }

        }


        $data = array(
            'id_pembayaran' => $id_pembayaran,
            'NIS' => $NIS,
            'nama_pembayar' => $nama_pembayar,
            'id_setbayar' => $id_setbayar,
            'tgl_pembayaran' => $tgl_pembayaran,
            'bukti_pembayaran' => $bukti_pembayaran,
            'status' => $status
        );

        $this->m_user_pembayaran->tambah_data_bayar($data, 'tb_pembayaran');
        redirect('santri/Santri/pembayaran');
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
