    
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
        $this->load->model('m_user_pelanggaran');
        $this->load->model('m_user_absensi');
        $this->load->helper('url', 'form');
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

    public function diniyah()
    {
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_diniyah');
        $this->load->view('santri_template/profile');
        $this->load->view('santri_template/footer');
    }

    public function khataman()
    {
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_khataman');
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
            'detail' => $detail,
            'id_pembayaran' => $id_pembayaran

        );
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_tmbhuploadpembayaran', $data);
        $this->load->view('santri_template/profile');
        $this->load->view('santri_template/footer');
    }

    public function aksiTambahuploadpembayaran()
    {
        $id = $this->input->post('id_setbayar');
        $id_pembayaran = $this->input->post('id_pembayaran');
        $NIS = $this->input->post('NIS');
        $nama_pembayar = $this->input->post('nama_pembayar');
        $tgl_pembayaran = $this->input->post('tgl_pembayaran');
        $bukti_pembayaran = $_FILES['bukti_pembayaran'];
        $status = $this->input->post('status');

        if ($bukti_pembayaran = '') {
        } else {
            $config['upload_path']          = './assets/img/pembayaran';
            $config['allowed_types']        = 'jpg|png|jpeg|gif|JPG|JPEG|pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bukti_pembayaran')) {
                //echo "Upload Gagal"; die();
            } else {
                $bukti_pembayaran = $this->upload->data('file_name');
            }
        }

        // Membuat validasi form
        $this->form_validation->set_rules('nama_pembayar', 'NAMA PEMBAYAR', 'trim|required|strip_tags');
        $this->form_validation->set_rules('tgl_pembayaran', 'TANGGAL PEMBAYARAN', 'trim|required|strip_tags');
        $this->form_validation->set_rules('bukti_pembayaran', 'Upload Bukti Transfer', 'uploaded');

        // Membuat pesan validasi error
        $this->form_validation->set_message('required', 'Kolom %s tidak boleh kosong.');
        $this->form_validation->set_message('trim', 'Kolom %s berisi karakter yang dilarang.');
        $this->form_validation->set_message('strip_tags', 'Kolom %s berisi karakter yang dilarang.');
        $this->form_validation->set_message('uploaded', ' %s tidak boleh kosong.');

        // Menjalankan form
        // Apabila hasil validasi form menunjukkan ada sesuatu yang salah
        if ($this->form_validation->run() == false) {
            $this->tmbhuploadpembayaran($id);
        } else {


            $data = array(
                'id_pembayaran' => $id_pembayaran,
                'NIS' => $NIS,
                'nama_pembayar' => $nama_pembayar,
                'id_setbayar' => $id,
                'tgl_pembayaran' => $tgl_pembayaran,
                'bukti_pembayaran' => $bukti_pembayaran,
                'status' => $status
            );

            $this->m_user_pembayaran->tambah_data_bayar($data, 'tb_pembayaran');
            redirect('santri/Santri/pembayaran');
        }
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
        $where = array('id_pembayaran' => $id_pembayaran);
        $foto = $this->db->get_where('tb_pembayaran', $where);

        if ($bukti_pembayaran = '') {
        } else {
            $config['upload_path']          = './assets/img/pembayaran';
            $config['allowed_types']        = 'jpg|png|jpeg|gif|JPG|JPEG|pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bukti_pembayaran')) {
                //echo "Upload Gagal"; die();
            } else {
                $bukti_pembayaran = $this->upload->data('file_name');

                if ($foto->num_rows() > 0) {
                    $pros = $foto->row();
                    $name = $pros->bukti_pembayaran;

                    if (file_exists($lok = FCPATH . '/assets/img/pembayaran/' . $name)) {
                        unlink($lok);
                    }
                }
            }
        }


        // Membuat validasi form
        $this->form_validation->set_rules('nama_pembayar', 'NAMA PEMBAYAR', 'trim|required|strip_tags');
        $this->form_validation->set_rules('tgl_pembayaran', 'TANGGAL PEMBAYARAN', 'trim|required|strip_tags');
        $this->form_validation->set_rules('bukti_pembayaran', 'Upload Bukti Transfer', 'uploaded[bukti_pembayaran]');

        // Membuat pesan validasi error
        $this->form_validation->set_message('required', 'Kolom %s tidak boleh kosong.');
        $this->form_validation->set_message('trim', 'Kolom %s berisi karakter yang dilarang.');
        $this->form_validation->set_message('strip_tags', 'Kolom %s berisi karakter yang dilarang.');
        $this->form_validation->set_message('uploaded', ' %s tidak boleh kosong.');

        // Menjalankan form
        // Apabila hasil validasi form menunjukkan ada sesuatu yang salah
        if ($this->form_validation->run() == false) {
            $this->editupload($id_pembayaran);
        } else {




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
    }


    //=======================================END PEMBAYARAN==========================================//



    //=======================================PELANGGARAN==============================================//

    public function pelanggaran()
    {
        $data['pelanggaran_user'] = $this->m_user_pelanggaran->tampil_pelanggaran_santri()->result();
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_pelanggaran_santri', $data);
        $this->load->view('santri_template/profile');
        $this->load->view('santri_template/footer');
    }


    //======================================END PELANGGARAN============================================//



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
        $this->load->view('santri_template/footer', $data);
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


    public function editperizinan($id)
    {
        $where = array('id_perizinan' => $id);
        $data['izinedit'] = $this->m_perizinansantri->edit_data($where, 'tb_perizinan')->result();
        $this->load->view('santri_template/header');

        $this->load->view('santri/v_editizin_santri', $data);
        $this->load->view('santri_template/footer');
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
        redirect('index.php/santri/Santri/perizinan');
    }

    public function suket($id)
    {

        $where = array('id_perizinan' => $id);
        $data['izin'] = $this->m_perizinansantri->suket_data($where)->result();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Surat_Izin.pdf";
        $this->pdf->load_view('santri/suketizin', $data);
    }
    //===============================================EDNPERIZINAN=================================================//


    //================================================== ABSENSI =====================================================
    public function absen()
    {
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_absen');
        $this->load->view('santri_template/footer');
    }

    public function absen_khataman()
    {
        $data['absensi_khataman'] = $this->m_user_absensi->tampil_absen_khataman()->result();
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_absen_khataman', $data);
        $this->load->view('santri_template/footer');
    }

    public function tambah_absen_khataman()
    {
        $data = $this->m_user_absensi->tampil_absen_khataman()->num_rows();
        if ($data > 0) {
            // Mengambil id soal sebelumnya
            $lastId = $this->m_user_absensi->tampil_data_akhir_khataman()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id perizinan
                $rawid_khataman = substr($row->id_khataman, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id perizinn menjadi integer
                $id_khatamanInt = intval($rawid_khataman);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($id_khatamanInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_khataman = "KH00" . ($id_khatamanInt + 1);
                } else if (strlen($id_khatamanInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_khataman = "KH0" . ($id_khatamanInt + 1);
                } else if (strlen($id_khatamanInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_khataman = "KH" . ($id_khatamanInt + 1);
                }
            }
        } else {
            // Jika jumlah perizinan kurang dari sama dengan 0
            $id_khataman = "KH001";
        }
        $khataman = $this->m_user_absensi->tampil_absen_khataman();


        $data = array(
            'id_khataman' => $id_khataman
        );

        $this->load->view('santri_template/header');
        $this->load->view('santri/v_tambah_khataman', $data);
        $this->load->view('santri_template/footer');
    }

    public function aksi_tambah_khataman()
    {
        $id_khataman = $this->input->post('id_khataman');
        $NIS = $this->input->post('NIS');
        $tgl = $this->input->post('tgl');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'id_khataman' => $id_khataman,
            'NIS' => $NIS,
            'tgl' => $tgl,
            'keterangan' => $keterangan
        );

        $this->m_user_absensi->tambah_absen_khataman($data, 'tb_absensi_khataman');
        redirect('santri/Santri/absen_khataman');
    }

    public function absen_diniyah()
    {
        $data['absensi_diniyah'] = $this->m_user_absensi->tampil_absen_diniyah()->result();
        $this->load->view('santri_template/header');
        $this->load->view('santri/v_absen_diniyah', $data);
        $this->load->view('santri_template/footer');
    }

    public function tambah_absen_diniyah()
    {
        $data = $this->m_user_absensi->tampil_absen_diniyah()->num_rows();
        if ($data > 0) {
            // Mengambil id soal sebelumnya
            $lastId = $this->m_user_absensi->tampil_data_akhir_diniyah()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id perizinan
                $rawid_diniyah = substr($row->id_diniyah, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id perizinn menjadi integer
                $id_diniyahInt = intval($rawid_diniyah);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($id_diniyahInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_diniyah = "DN00" . ($id_diniyahInt + 1);
                } else if (strlen($id_diniyahInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_khataman = "DN0" . ($id_diniyahInt + 1);
                } else if (strlen($id_diniyahInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_diniyah = "DN" . ($id_diniyahInt + 1);
                }
            }
        } else {
            // Jika jumlah perizinan kurang dari sama dengan 0
            $id_diniyah = "DN001";
        }
        $diniyah = $this->m_user_absensi->tampil_absen_diniyah();


        $data = array(
            'id_diniyah' => $id_diniyah
        );

        $this->load->view('santri_template/header');
        $this->load->view('santri/v_tambah_diniyah', $data);
        $this->load->view('santri_template/footer');
    }

    public function aksi_tambah_diniyah()
    {
        $id_diniyah = $this->input->post('id_diniyah');
        $NIS = $this->input->post('NIS');
        $tgl = $this->input->post('tgl');
        $keterangan = $this->input->post('keterangan');
        $ringkasan_materi = $this->input->post('ringkasan_materi');

        $data = array(
            'id_diniyah' => $id_diniyah,
            'NIS' => $NIS,
            'tgl' => $tgl,
            'keterangan' => $keterangan,
            'ringkasan_materi' => $ringkasan_materi
        );

        $this->m_user_absensi->tambah_absen_diniyah($data, 'tb_absensi_diniyah');
        redirect('santri/Santri/absen_diniyah');
    }
}
