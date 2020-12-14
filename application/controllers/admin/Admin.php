   <?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->model('m_pelanggaran');
        $this->load->model('m_perizinan');
        $this->load->model('m_admin');
        $this->load->model('m_pembayaran');

        $this->load->helper('url', 'form');
        $this->load->library('form_validation');

        $this->load->model('m_setbayar');
        $this->load->helper('url');
    }


    public function index()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin_template/footer');
    }

    //===== Controller Admin ====
    public function admin()
    {
        $data['tb_admin'] = $this->m_admin->tampil_admin()->result();

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_admin', $data);
        $this->load->view('admin_template/footer');
    }

    public function tambah_admin()
    {
        $data = $this->m_admin->tampil_admin()->num_rows();
        if ($data > 0) {
            // Mengambil id soal sebelumnya
            $lastId = $this->m_admin->tampil_data_akhir()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id perizinan
                $rawid_admin = substr($row->id_admin, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id perizinn menjadi integer
                $id_adminInt = intval($rawid_admin);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($id_adminInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_admin = "AD00" . ($id_adminInt + 1);
                } else if (strlen($id_adminInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_admin = "AD0" . ($id_adminInt + 1);
                } else if (strlen($id_adminInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_admin = "AD" . ($id_adminInt + 1);
                }
            }
        } else {
            // Jika jumlah perizinan kurang dari sama dengan 0
            $id_admin = "AD001";
        }
        $admin = $this->m_admin->tampil_admin();


        $data = array(
            'id_admin' => $id_admin
        );

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhadmin', $data);
        $this->load->view('admin_template/footer');
    }

    public function tmbhaksi_admin()
    {
        $id_admin = $this->input->post('id_admin');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_admin = $this->input->post('nama_admin');
        $foto_admin = $this->input->post('foto_admin');

        if ($foto_admin = '') {
        } else {
            $config['upload_path']          = './assets/img/gbrAdmin';
            $config['allowed_types']        = 'jpg|png|jpeg|gif|JPG|JPEG';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_admin')) {
                //echo "Upload Gagal"; die();
            } else {
                $foto_admin = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_admin' => $id_admin,
            'username' => $username,
            'password' => $password,
            'nama_admin' => $nama_admin,
            'foto_admin' => $foto_admin,
        );


        // Form Validasi
        $this->form_validation->set_rules('username', 'Username', 'trim|required|sprid_tags');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|sprid_tags');
        $this->form_validation->set_rules('nama_admin', 'Nama Admin', 'trim|required|sprid_tags');

        // Pesan form validasi
        $this->form_validation->set_message('required', 'Kolom %s tidak boleh kosong.');
        $this->form_validation->set_message('trim', 'Kolom %s berisi karakter yang dilarang.');
        $this->form_validation->set_message('strip_tags', 'Kolom %s berisi karakter yang dilarang.');

        // Menjalankan form, apabila berhasil maka tambah produk berhasil
        if ($this->form_validation->run() == false) {
            $this->tambah_admin();
        } else {

            $this->m_admin->tambah_admin($data, 'tb_admin');
            redirect('index.php/admin/Admin/admin');
        }
    }

    public function edit_admin($id)
    {
        $where = array(
            'id_admin' => $id
        );

        $this->form_validation->set_rules('username', 'Username', 'trim|required|sprid_tags');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|sprid_tags');
        $this->form_validation->set_rules('nama_admin', 'Nama Admin', 'trim|required|sprid_tags');

        // Pesan form validasi
        $this->form_validation->set_message('required', 'Kolom %s tidak boleh kosong.');
        $this->form_validation->set_message('trim', 'Kolom %s berisi karakter yang dilarang.');
        $this->form_validation->set_message('strip_tags', 'Kolom %s berisi karakter yang dilarang.');

        // Menjalankan form, apabila berhasil maka tambah produk berhasil
        /*if ($this->form_validation->run() == false) {
            $this->edit_admin();
        } else {

            $this->m_admin->edit_admin($where, 'tb_admin');
            //redirect('index.php/admin/Admin/admin');
        }*/

        $data['tb_admin'] = $this->m_admin->edit_admin($where, 'tb_admin')->result();

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_editAdmin', $data);
        $this->load->view('admin_template/footer');
    }

    public function update_admin()
    {
        $id_admin = $this->input->post('id_admin');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_admin = $this->input->post('nama_admin');
        $foto_admin = $this->input->post('foto_admin');

        if ($foto_admin = '') {
        } else {
            $config['upload_path']          = './assets/img/gbrAdmin';
            $config['allowed_types']        = 'jpg|png|jpeg|gif|JPG|JPEG';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_admin')) {
                echo "Upload Gagal";
                ini_set('error_reporting', E_ALL);
                die();
            } else {
                $foto_admin = $this->upload->data('file_name');
            }
        }

        $data = array(
            'username' => $username,
            'password' => $password,
            'nama_admin' => $nama_admin,
            'foto_admin' => $foto_admin,
        );

        $where = array('id_admin' => $id_admin);

        $this->m_admin->update_admin($where, $data, 'tb_admin');
        redirect('index.php/admin/Admin/admin');
    }

    public function detail_admin($id)
    {
        $where = array(
            'id_admin' => $id
        );

        $data['tb_admin'] = $this->m_admin->detail_admin($where, 'tb_admin')->result();

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_detail_admin', $data);
        $this->load->view('admin_template/footer');
    }


    public function hapus_admin($id)
    {
        $where = array(
            'id_admin' => $id
        );

        $this->m_admin->hapus_admin($where, 'tb_admin');
        redirect('index.php/admin/Admin/admin');
    }
    //=== Batas Admin ====


    // User
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


    //=======================================PERIZINAN===========================================//

    public function perizinan()
    {

        $data['izin'] = $this->m_perizinan->tampil_data()->result();

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_perizinan', $data);
        $this->load->view('admin_template/footer');
    }


    function hapusperizinan($id)
    {
        $where = array('id_perizinan' => $id);
        $foto = $this->db->get_where('tb_perizinan', $where);
        $this->m_perizinan->hapus_data($where, 'tb_perizinan');

        if ($foto->num_rows($where) > 0) {
            $pros = $foto->row();
            $name = $pros->keterangan;

            if (file_exists($lok = FCPATH . '/assets/file_izin/' . $name)) {
                unlink($lok);
            }
        }

        redirect('index.php/admin/Admin/perizinan');
    }

    function tmbhperizinan()
    {
        $data = $this->m_perizinan->tampil_data()->num_rows();
        if ($data > 0) {
            // Mengambil id soal sebelumnya
            $lastId = $this->m_perizinan->tampil_data_akhir()->result();
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

        $data = $this->m_perizinan->tampil_perizinan()->result();

        $data = array(
            'id_perizinan' => $id_perizinan,

        );


        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhperizinan', $data);
        $this->load->view('admin_template/footer');
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

        $this->m_perizinan->tambah_data($data, 'tb_perizinan');
        redirect('index.php/admin/Admin/perizinan');
    }

    public function downloadketeranganizin($id)
    {
        $data = $this->db->get_where('tb_perizinan', ['id_perizinan' => $id])->row();
        force_download('./assets/file_izin/' . $data->keterangan, NULL);
    }

    public function editperizinan($id)
    {
        $where = array('id_perizinan' => $id);
        $data['izinedit'] = $this->m_perizinan->edit_data($where, 'tb_perizinan')->result();
        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_edit_perizinan', $data);
        $this->load->view('admin_template/footer');
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


        $this->m_perizinan->update_data($where, $data);
        redirect('index.php/admin/Admin/perizinan');
    }

    function detail($id)
    {

        $where = array('id_perizinan' => $id);
        $data['detail'] = $this->m_perizinan->detail_data($where)->result();

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_detail_perizinan', $data);
        $this->load->view('admin_template/footer');
    }

    //======================================END PERIZINAN=========================================//



    //=======================================PEMBAYARAN==========================================//


    public function pembayaran()

    {

        $data['bayar']= $this->m_pembayaran->tampil_data()->result();


        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_pembayaran', $data);
        $this->load->view('admin_template/footer');
    }

    public function tmbhpembayaran()
    {
        $data = $this->m_pembayaran->tampil_data()->num_rows();
        if ($data > 0) {
            // Mengambil id soal sebelumnya
            $lastId = $this->m_pembayaran->tampil_data_akhir()->result();
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

        $data = $this->m_pembayaran->tampil_data()->result();
        $detail = $this->m_setbayar->tampil_data()->result();

        $data = array(
            'detail' => $detail,
            'id_pembayaran' => $id_pembayaran

        );


        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhpembayaran', $data);
        $this->load->view('admin_template/footer');
    }

    public function aksiTambahpembayaran()
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

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bukti_pembayaran')) {
                $bukti_pembayaran = $this->upload->data('file_name');
            } else {
                $bukti_pembayaran = $this->upload->data('file_name');
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

        $this->m_pembayaran->tambah_data($data, 'tb_pembayaran');
        redirect('index.php/admin/Admin/pembayaran');
    }


    function hapuspembayaran($id)
    {

        $where = array('id_pembayaran' => $id);
        $foto = $this->db->get_where('tb_pembayaran', $where);
        $this->m_pembayaran->hapus_data($where, 'tb_pembayaran');

        if ($foto->num_rows($where) > 0) {
            $pros = $foto->row();
            $name = $pros->bukti_pembayaran;

            if (file_exists($lok = FCPATH . '/assets/img/pembayaran' . $name)) {
                unlink($lok);
            }
        }

        redirect('index.php/admin/Admin/pembayaran');
    }


    function detailbayar($id)
    {

        $where = array('id_pembayaran' => $id);
        $data['detailbayar'] = $this->m_pembayaran->detail_data($where)->result();

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_detail_pembayaran', $data);
        $this->load->view('admin_template/footer');
    }

    public function editpembayaran($id)
    {
        $where = array('id_pembayaran' => $id);
        $data['editbayar'] = $this->m_pembayaran->edit_data($where, 'tb_pembayaran')->result();
        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_edit_pembayaran', $data);
        $this->load->view('admin_template/footer');
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
            } else {

                if ($foto->num_rows() > 0) {
                    $pros = $foto->row();
                    $name = $pros->bukti_pembayaran;

                    if (file_exists($lok = FCPATH . '/assets/img/pembayaran/' . $name)) {
                        unlink($lok);
                    }
                }

                $bukti_pembayaran = $this->upload->data('file_name');
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


        $this->m_pembayaran->update_data($where, $data);
        redirect('index.php/admin/Admin/pembayaran');
    }

    public function downloadbuktipembayaran($id)
    {
        $data = $this->db->get_where('tb_pembayaran', ['id_pembayaran' => $id])->row();
        force_download('./assets/img/pembayaran/' . $data->bukti_pembayaran, NULL);
    }

 public function laporan()
    {
        $startdate=$this->input->get('startdate');
        $enddate=$this->input->get('enddate');
       $id_setbayar=$this->input->get('id_setbayar');
        $bayar= $this->m_pembayaran->laporan($startdate,$enddate,$id_setbayar); 
       
        $tidak= $this->m_pembayaran->laporan2($startdate,$enddate,$id_setbayar);
         $data = array(
            'bayar' => $bayar,
            'tidak' => $tidak
            );

       $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_laporan_pembayaran',$data);
        $this->load->view('admin_template/footer');
    }

    //======================================END PEMBAYARAN=======================================//

    //======================================= SET PEMBAYARAN==========================================//

    public function settingbayar()
    {

        $data['detail'] = $this->m_setbayar->tampil_data()->result();

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_setting_pembayaran', $data);
        $this->load->view('admin_template/footer');
    }

    function hapussetbayar($id)
    {
        $where = array('id_setbayar' => $id);

        $this->m_setbayar->hapus_data($where, 'detail_pembayaran');

        redirect('index.php/admin/Admin/settingbayar');
    }


    public function updatesetbayar()
    {
        $id_setbayar = $this->input->post('id_setbayar');
        $jenis_pembayaran = $this->input->post('jenis_pembayaran');
        $jumlah_bayar = $this->input->post('jumlah_bayar');
        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        $data = array(
            'id_setbayar' => $id_setbayar,
            'jenis_pembayaran' => $jenis_pembayaran,
            'jumlah_bayar' => $jumlah_bayar,
            'tanggal_awal' => $tanggal_awal,
            'tanggal_akhir' => $tanggal_akhir,
        );

        $where = array(
            'id_setbayar' => $id_setbayar
        );

        $this->m_setbayar->update_data($where, $data);
        redirect('index.php/admin/Admin/settingbayar');
    }


    public function tmbhsetbayar()
    {
        $data = $this->m_setbayar->tampil_data()->num_rows();
        if ($data > 0) {
            // Mengambil id soal sebelumnya
            $lastId = $this->m_setbayar->tampil_data_akhir()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id pembayaran
                $rawid_setbayar = substr($row->id_setbayar, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id pembayran menjadi integer
                $id_setbayarInt = intval($rawid_setbayar);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($id_setbayarInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_setbayar = "ST00" . ($id_setbayarInt + 1);
                } else if (strlen($id_setbayarInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_setbayar = "ST0" . ($id_setbayarInt + 1);
                } else if (strlen($id_setbayarInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_setbayar = "ST" . ($id_setbayarInt + 1);
                }
            }
        } else {
            // Jika jumlah perizinan kurang dari sama dengan 0
            $id_setbayar = "ST001";
        }

        // Mengambil data pembayaran menggunakan model

        $data = $this->m_setbayar->tampil_data()->result();

        $data = array(
            'id_setbayar' => $id_setbayar,

        );


        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_setting_pembayaran2', $data);
        $this->load->view('admin_template/footer');
    }

    public function aksitmbhsetbayar()
    {
        $id_setbayar = $this->input->post('id_setbayar');
        $jenis_pembayaran = $this->input->post('jenis_pembayaran');
        $jumlah_bayar = $this->input->post('jumlah_bayar');
        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        $data = array(
            'id_setbayar' => $id_setbayar,
            'jenis_pembayaran' => $jenis_pembayaran,
            'jumlah_bayar' => $jumlah_bayar,
            'tanggal_awal' => $tanggal_awal,
            'tanggal_akhir' => $tanggal_akhir,
        );


        $this->m_setbayar->tambah_data($data, 'detail_pembayaran');
        redirect('index.php/admin/Admin/settingbayar');
    }

   

    //======================================= END SET PEMBAYARAN==========================================//

    // ======================================= Pelanggaran =======================================//

    public function pelanggaran()
    {
        $data['tb_pelanggaran'] = $this->m_pelanggaran->tampil_pelanggaran()->result();
        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_pelanggaran', $data);
        $this->load->view('admin_template/footer');
    }

    public function tmbhpelanggaran()
    {
        $data = $this->m_pelanggaran->tampil_pelanggaran()->num_rows();
        if ($data > 0) {
            // Mengambil id soal sebelumnya
            $lastId = $this->m_pelanggaran->tampil_data_akhir()->result();
            // Melakukan perulangan untuk mengambil data
            foreach ($lastId as $row) {
                // Melakukan pemisahan huruf dengan angka pada id perizinan
                $rawid_pelanggaran = substr($row->id_pelanggaran, 3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id perizinn menjadi integer
                $id_pelanggaranInt = intval($rawid_pelanggaran);

                // Menghitung panjang id yang sudah menjadi integer
                if (strlen($id_pelanggaranInt) == 1) {
                    // jika panjang id hanya 1 angka
                    $id_pelanggaran = "PL00" . ($id_pelanggaranInt + 1);
                } else if (strlen($id_pelanggaranInt) == 2) {
                    // jika panjang id hanya 2 angka
                    $id_pelanggaran = "PL0" . ($id_pelanggaranInt + 1);
                } else if (strlen($id_pelanggaranInt) == 3) {
                    // jika panjang id hanya 3 angka
                    $id_pelanggaran = "PL" . ($id_pelanggaranInt + 1);
                }
            }
        } else {
            // Jika jumlah perizinan kurang dari sama dengan 0
            $id_pelanggaran = "PL001";
        }


        $santri = $this->m_pelanggaran->tampil_santri()->result();
        // Apabila hasil validasi form menunjukkan tidak ada yang salah

        $data = array(
            'santri' => $santri,
            'id_pelanggaran' => $id_pelanggaran,
        );

        $pelanggaran = $this->m_pelanggaran->tampil_pelanggaran();
        // Apabila hasil validasi form menunjukkan tidak ada yang salah

        $data = array(
            'id_pelanggaran' => $id_pelanggaran

        );

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhpelanggaran', $data);
        $this->load->view('admin_template/footer');
    }

    public function tambah_aksi_pelanggaran()
    {
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
            'tgl' => $tgl,
            'sanksi' => $sanksi,
            'catatan' => $catatan,
        );

        // Form Validasi
        $this->form_validation->set_rules('NIS', 'NIS : Nama Santri', 'trim|required|sprid_tags');
        $this->form_validation->set_rules('jenis_pelanggaran', 'Jenis Pelanggaran', 'trim|required|sprid_tags');
        $this->form_validation->set_rules('tgl', 'Tanggal Melanggar', 'trim|required|sprid_tags');
        $this->form_validation->set_rules('sanksi', 'sanksi', 'trim|required|sprid_tags');


        // Pesan form validasi
        $this->form_validation->set_message('required', 'Kolom %s tidak boleh kosong.');
        $this->form_validation->set_message('trim', 'Kolom %s berisi karakter yang dilarang.');
        $this->form_validation->set_message('strip_tags', 'Kolom %s berisi karakter yang dilarang.');

        // Menjalankan form, apabila berhasil maka tambah produk berhasil
        if ($this->form_validation->run() == false) {
            $this->tmbhpelanggaran();
        } else {

            $this->m_pelanggaran->tambah_pelanggaran($data, 'tb_pelanggaran');
            redirect('index.php/admin/Admin/pelanggaran');
        }
    }

    public function detail_pelanggaran($id)
    {
        $where = array(
            'id_pelanggaran' => $id
        );

        $data['tb_pelanggaran'] = $this->m_pelanggaran->detail_pelanggaran($where, 'tb_pelanggaran')->result();

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_detail_pelanggaran', $data);
        $this->load->view('admin_template/footer');
    }

    public function edit_pelanggaran($id)
    {
        $where = array(
            'id_pelanggaran' => $id
        );

        $data['tb_pelanggaran'] = $this->m_pelanggaran->edit_pelanggaran($where, 'tb_pelanggaran')->result();

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_edit_pelanggaran', $data);
        $this->load->view('admin_template/footer');
    }

    public function update_pelanggaran()
    {
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

    public function hapus_pelanggaran($id)
    {
        $where = array(
            'id_pelanggaran' => $id
        );

        $this->m_pelanggaran->hapus_pelanggaran($where, 'tb_pelanggaran');
        redirect('index.php/admin/Admin/pelanggaran');
    }

    //========================================= Batas Controller Pelanggaran ===================================//


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
