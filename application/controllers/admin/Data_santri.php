<?php

class Data_santri extends CI_Controller
{
  // method yang akan otomatis dijalankan ketika class dibuat
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_data_santri');
    $this->load->library('PrimsLib');

  }

  // Menampilkan tabel Promo
  public function index()
  {
    $data['tb_santri'] = $this->M_data_santri->getAll('tb_santri')->result();
    $this->load->view('admin_template/header');
    $this->load->view('admin_template/mainmenu');
    $this->load->view('admin/v_santri', $data);
    $this->load->view('admin_template/footer');
  }

  // menampilkan form edit data promo
  public function edit($id)
  {
    // $data['tb_santri'] = $this->M_data_santri->edit('tb_santri')->result();
    // $where = array('NIS' => $id);
    $data['santri'] = $this->M_data_santri->edit($id);

    //  Set rules form validation dahulu
      $this->form_validation->set_rules('nama_santri', 'Nma', 'required|trim', [
        'required' => 'kolom ini tidak boleh kosong'
      ]);

      $this->form_validation->set_rules('jk', 'Jk', 'required|trim', [
        'required' => 'pilih jenis kelamin'
      ]);

      $this->form_validation->set_rules('pendidikan', 'pendidikan', 'required|trim', [
        'required' => 'kolom ini tidak boleh kosong'
      ]);

      $this->form_validation->set_rules('jurusan', 'jurusan', 'required|trim', [
        'required' => 'kolom ini tidak boleh kosong'
      ]);

      $this->form_validation->set_rules('nim', 'nim', 'required|trim', [
        'required' => 'kolom ini tidak boleh kosong'
      ]);

      $this->form_validation->set_rules('no_hp', 'no_hp', 'required|trim', [
        'required' => 'kolom ini tidak boleh kosong'
      ]);

      $this->form_validation->set_rules('nama_ayah', 'nama_ayh', 'required|trim', [
        'required' => 'kolom ini tidak boleh kosong'
      ]);

      $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required|trim', [
        'required' => 'kolom ini tidak boleh kosong'
      ]);

      $this->form_validation->set_rules('nama_wali', 'nama_wail', 'required|trim', [
        'required' => 'kolom ini tidak boleh kosong'
      ]);

      $this->form_validation->set_rules('no_telp_wali', 'no_telp_wali', 'required|trim', [
        'required' => 'kolom ini tidak boleh kosong'
      ]);

      $this->form_validation->set_rules('nama_institusi', 'nama_institusi', 'required|trim', [
        'required' => 'kolom ini tidak boleh kosong'
      ]);

      $this->form_validation->set_rules('status_pembayaran', 'status_pembayaran', 'required|trim', [
        'required' => 'kolom ini tidak boleh kosong'
      ]);

      $this->form_validation->set_rules('usernane', 'username', 'required|trim', [
        'required' => 'kolom ini tidak boleh kosong'
      ]);

      $this->form_validation->set_rules('password', 'password', 'required|trim', [
        'required' => 'kolom ini tidak boleh kosong'
      ]);
    // Cek form validation jika tidak sesuai dengan rules maka kembali ke view
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin_template/header');
      $this->load->view('admin_template/mainmenu');
      $this->load->view('admin/v_editdtsantri', $data);
      $this->load->view('admin_template/footer');
    } else {
      $NIS = $this->input->post('NIS');
      $edit = array(
        'nama_santri' => $this->input->post('nama_santri'),
        'jk' => $this->input->post('jk'),
        'ttl' => $this->input->post('ttl'),
        'alamat' => $this->input->post('alamat'),
        'pendidikan' => $this->input->post('pendidikan'),
        'jurusan' => $this->input->post('jurusan'),
        'nim' => $this->input->post('nim'),
        'no_hp' => $this->input->post('no_hp'),
        'tgl_masuk' => $this->input->post('tgl_masuk'),
        'nama_ayah' => $this->input->post('nama_ayah'),
        'nama_ibu' => $this->input->post('nama_ibu'),
        'nama_wali' => $this->input->post('nama_wali'),
        'no_telp_wali' => $this->input->post('no_telp_wali'),
        'nama_institusi' => $this->input->post('nama_institusi'),
        'status_pembayaran' => $this->input->post('status_pembayaran'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
      );

      $this->M_data_santri->ubah($edit, $NIS);

      // Pesan notifikasi
      $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Anda <strong>berhasil</strong> mengubah data.
        <button type="button" class="close py-auto" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      ');
      redirect('index.php/admin/Data_santri');
    }
  }


  // menampilkan detail data promo
  public function detail($id)
  {
    $where = array('NIS' => $id);
    $detail = $this->M_data_santri->detail($id);
    $data['detail'] = $this->M_data_santri->detail($id);
    $this->load->view('admin_template/header');
    $this->load->view('admin_template/mainmenu');
    $this->load->view('admin/v_detaildtsantri', $data);
    $this->load->view('admin_template/footer');
  }

  public function tambah()
  {
    /**
     * ========================================================
     * Membuat Id Unik
     * ========================================================
     */
    // memeriksa apakah ada id pada database
    $tabel = $this->M_data_santri->getId()->num_rows();
    // mengambil 1 baris data terakhir
    $old_id = $this->M_data_santri->getId()->row();

    if ($tabel > 0) {
      // melakukan auto number dari id terakhir
      $data['id_s'] = $this->primslib->autonumber($old_id->NIS, 1, 8);
    } else {
      // generate id pertama kali jika tidak ada data sama sekali di dalam database
      $data['id_s'] = 'S00000001';
    }

    /**
     * =======================================================
     * Form Validation
     * =======================================================
     */

    //  Set rules form validation dahulu
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('jk', 'Jk', 'required|trim', [
      'required' => 'pilih jenis kelamin'
    ]);

    $this->form_validation->set_rules('ttl', 'Ttl', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('almt', 'Almt', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('nim', 'Nim', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);
    
    $this->form_validation->set_rules('pdd', 'Pdd', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('jur', 'Jur', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('univ', 'Univ', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);
    
    $this->form_validation->set_rules('nohp', 'Nohp', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('username', 'Username', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('psw', 'Psw', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('ayah', 'Ayah', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('ibu', 'Ibu', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('nohpwali', 'Nohpwali', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    // Cek form validation jika tidak sesuai dengan rules maka kembali ke view
    if ($this->form_validation->run() == FALSE) {
      // $data['tb_santri'] = $this->M_data_santri->getAll('tb_santri')->result();
      $this->load->view('admin_template/header');
      $this->load->view('admin_template/mainmenu');
      $this->load->view('admin/v_tambahdtsantri', $data);
      $this->load->view('admin_template/footer');
    } else {
      // Insert data ke santri
      $data = [
        'NIS' => $this->input->post('NIS'),
        'nama_santri' => $this->input->post('nama'),
        'jk' => $this->input->post('jk'),
        'ttl' => $this->input->post('ttl'),
        'alamat' => $this->input->post('almt'),
        'pendidikan' => $this->input->post('pdd'),
        'jurusan' => $this->input->post('jur'),
        'nim' => $this->input->post('nim'),
        'no_hp' => $this->input->post('nohp'),
        'tgl_masuk' => date('Y-m-d', strtotime($this->input->post('tgl_m'))),
        'nama_ayah' => $this->input->post('ayah'),
        'nama_ibu' => $this->input->post('ibu'),
        'nama_wali' => $this->input->post('wali'),
        'no_telp_wali' => $this->input->post('nohpwali'),
        'foto' => '',
        'surat_pernyataan' => '',
        'bukti_pembayaran' => '',
        'nama_institusi' => $this->input->post('univ'),
        'status_pembayaran' => '',
        'username' => $this->input->post('username'),
        'password' => $this->input->post('psw')
      ];
  
      // menjalankan fungsi insert ke tabel santri
      $this->M_data_santri->tambah($data);

      // mengirim pesan berhasil disimpan
      $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Data berhasil disimpan.
        <button type="button" class="close py-auto" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      ');
  
      // mengarahkan ke halaman tabel santri
      redirect('index.php/admin/Data_santri');
    }

    // $foto = null;
    // $surat_pernyataan = null;
    // $bukti_perytaan = null;
    // menjalankan perintah untuk mengupload gambar
    // if ($_FILES['foto']['name'] != null) {
    //   $foto = $_FILES['foto']['name'];
    //   $foto = $this->primslib->upload_file('foto', $foto, 'jpg|jpeg|png', '3024');
    // }
    // if ($_FILES['surat_pernyataan']['name'] != null) {
    //         $surat_pernyataan = $_FILES['surat_pernyataan']['name'];
    //         $surat_pernyataan = $this->primslib->upload_file('surat_pernyataan', $surat_pernyataan, 'jpg|jpeg|png|pdf');
    // }
    // if ($_FILES['bukti_pembayaran']['name'] != null) {
    //         $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
    //         $bukti_pembayaran = $this->primslib->upload_file('bukti_pembayaran', $bukti_pemayaran, 'jpg|jpeg|png|pdf');

    // }
  }
}
