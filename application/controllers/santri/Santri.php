    
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Santri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->simple_login2->cek_login();
        $this->load->model('m_user_pembayaran');
        $this->load->model('m_perizinansantri');
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

    public function tmbhuploadpembayaran($id)
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
        
        $where = array('id_setbayar' => $id);
        $detail = $this->m_user_pembayaran->tampil_data_info_where($where, 'detail_pembayaran')->result();


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

    public function editupload($id)
    {
        $where = array('id_pembayaran' => $id);
        $data['editbayar'] = $this->m_user_pembayaran->edit_data($where, 'tb_pembayaran')->result();
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_editupload', $data);
        $this->load->view('santri_template/profile');
        $this->load->view('santri_template/footer');
        

    }

    public function updatepembayaran()
    {
        $id_pembayaran = $this->input->post('id_pembayaran');
        $NIS = $this->input->post('NIS');
        $nama_pembayar = $this->input->post('nama_pembayar');
        $id_setbayar = $this->input->post('id_setbayar');
        $tgl_pembayaran = $this->input->post('tgl_pembayaran');
        $bukti_pembayaran = $_FILES['bukti_pembayaran'];
        $status = $this->input->post('status');
        $foto = $this->db->get_where('tb_pembayaran', $where);

        if ($bukti_pembayaran = '') {
        } else {
            $config['upload_path']          = './assets/img/pembayaran';
            $config['allowed_types']        = 'jpg|png|jpeg|gif|JPG|JPEG|pdf';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('bukti_pembayaran')) {
                //echo "Upload Gagal"; die();
            }else{
                $bukti_pembayaran=$this->upload->data('file_name');
                
                if($foto->num_rows()>0){
                    $pros=$foto->row();
                    $name=$pros->bukti_pembayaran;
                   
                    if(file_exists($lok=FCPATH.'/assets/img/pembayaran/'.$name)){
                        unlink($lok);
                    }
            }
            
        }

        }

       
                
        $data = array(
            'id_pembayaran' => $id_pembayaran,
            'NIS' => $NIS,
            'nama_pembayar' => $nama_pembayar,
            'id_setbayar' => $id_setbayar,
            'tgl_pembayaran' => $tgl_pembayaran,
            'status' => $status
        );
        
        if ($bukti_pembayaran != NULL) {

            $data['bukti_pembayaran'] = $bukti_pembayaran;
        }

        $where = array(
            'id_pembayaran' => $id_pembayaran
        );

        $this->m_user_pembayaran->update_data($where, $data, 'tb_pembayaran');
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



//=================================================PERIZINAN====================================================//
     public function perizinan()
    {
        
        $data = $this->m_perizinansantri->tampil_data()->num_rows();
        if ($data > 0) {
            // Mengambil id soal sebelumnya
            $lastId = $this->m_perizinansantri->tampil_data_akhir()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id perizinan
                $rawid_perizinan = substr($row->id_perizinan, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id perizinn menjadi integer
                $id_perizinanInt = intval($rawid_perizinan);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($id_perizinanInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_perizinan = "IZ00" . ($id_perizinanInt + 1);
                } else if (strlen($id_perizinanInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_perizinan = "IZ0" . ($id_perizinanInt + 1);
                } else if (strlen($id_perizinanInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_perizinan = "IZ" . ($id_perizinanInt + 1);
                }
            }
        } else {
            // Jika jumlah perizinan kurang dari sama dengan 0
            $id_perizinan = "IZ001";
        }

        // Mengambil data mata pelajaran menggunakan model

        $data = $this->m_perizinansantri->tampil_data()->result();
        $izin = $this->m_perizinansantri->tampil_data()->result();

        $data = array(
            'id_perizinan' => $id_perizinan,
            'izin' => $izin
        );

        $this->load->view('santri_template/header');
        $this->load->view('santri/v_perizinan', $data);
        $this->load->view('santri_template/profile');
        $this->load->view('santri_template/footer');
    }


    public function aksiTambahperizinan()
    {
        $id_perizinan = $this->input->post('id_perizinan');
        $NIS = $this->input->post('NIS');
        $tgl_izin = $this->input->post('tgl_izin');
        $tgl_datang = $this->input->post('tgl_datang');
        $alasan = $this->input->post('alasan');
        $keterangan = $_FILES['keterangan'];
        $status = $this->input->post('status');

        if ($keterangan = '') {
        } else {
            $config['upload_path']          = './assets/file_izin';
            $config['allowed_types']        = 'jpg|png|jpeg|gif|JPG|JPEG|pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('keterangan')) {
                $keterangan = $this->upload->data('file_name');
            } else {
                $keterangan = $this->upload->data('file_name');
            }
        }


        $data = array(
            'id_perizinan' => $id_perizinan,
            'NIS' => $NIS,
            'tgl_izin' => $tgl_izin,
            'tgl_datang' => $tgl_datang,
            'alasan' => $alasan,
            'keterangan' => $keterangan,
            'status' => $status
        );

        $this->m_perizinansantri->tambah_data($data, 'tb_perizinan');
        redirect('index.php/santri/Santri/perizinan');
    }

    function hapusperizinan($id)
    {
        $where = array('id_perizinan' => $id);
        $foto = $this->db->get_where('tb_perizinan', $where);
        $this->m_perizinansantri->hapus_data($where, 'tb_perizinan');

        if ($foto->num_rows($where) > 0) {
            $pros = $foto->row();
            $name = $pros->keterangan;

            if (file_exists($lok = FCPATH . '/assets/file_izin/' . $name)) {
                unlink($lok);
            }
        }

        redirect('index.php/santri/Santri/perizinan');
    }

    public function updateperizinan()
    {
        $id_perizinan = $this->input->post('id_perizinan');
        $NIS = $this->input->post('NIS');
        $tgl_izin = $this->input->post('tgl_izin');
        $tgl_datang = $this->input->post('tgl_datang');
        $alasan = $this->input->post('alasan');
        $status = $this->input->post('status');
        $keterangan = $_FILES['keterangan'];
        $where = array('id_perizinan' => $id_perizinan);
        $foto = $this->db->get_where('tb_perizinan', $where);

        if ($keterangan = '') {
        } else {
            $config['upload_path']          = './assets/file_izin';
            $config['allowed_types']        = 'jpg|png|jpeg|gif|JPG|JPEG|pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('keterangan')) {
            } else {
                if ($foto->num_rows() > 0) {
                    $pros = $foto->row();
                    $name = $pros->keterangan;

                    if (file_exists($lok = FCPATH . '/assets/file_izin/' . $name)) {
                        unlink($lok);
                    }
                }

                $keterangan = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_perizinan' => $id_perizinan,
            'NIS' => $NIS,
            'tgl_izin' => $tgl_izin,
            'tgl_datang' => $tgl_datang,
            'alasan' => $alasan,
            'status'   => $status
        );

        if ($keterangan != NULL) {

            $data['keterangan'] = $keterangan;
        }

        $this->m_perizinansantri->update_data($where, $data);
        redirect('index.php/admin/Admin/perizinan');
    }

public function suket($id)
    {

        $where = array('id_perizinan' => $id);
        $data['izin']= $this->m_perizinansantri->suket_data($where)->result();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Surat_Izin.pdf";
        $this->pdf->load_view('santri/suketizin', $data);
    }
    //===============================================EDNPERIZINAN=================================================//
}
