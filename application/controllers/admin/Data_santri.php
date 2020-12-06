<?php

class Data_santri extends CI_Controller 
{
  // method yang akan otomatis dijalankan ketika class dibuat
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_data_santri');
    $this->load->library('PrimsLib');
    // $this->load->helper('url');
    
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
    // $data['tb_santri'] = $this->M_data_santri->edit('tb_santri')->result_();
    // $where = array('NIS' => $id);
    $data['santri'] = $this->M_data_santri->edit($id);

    //  Set rules form validation dahulu
    $this->form_validation->set_rules('nama', 'Nm', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('jk', 'Jk', 'required|trim', [
      'required' => 'pilih jenis kelamin'
    ]);

    $this->form_validation->set_rules('pendidikan', 'pd', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('jurusan', 'jr', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('nim', 'Nim', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('no_hp', 'hp', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('nama_ayah', 'nmayh', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('nama_ibu', 'nmibu', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('nama_wali', 'nmwl', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('no_telp_wali', 'ntw', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('nama_institusi', 'nmins', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('status_pembayaran', 'stts', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('usernane', 'un', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('password', 'pw', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);
    // Cek form validation jika tidak sesuai dengan rules maka kembali ke view
    if($this->form_validation->run() == false) {
      $this->load->view('admin_template/header');
      $this->load->view('admin_template/mainmenu');
      $this->load->view('admin/v_editdtsantri', $data);
      $this->load->view('admin_template/footer');
    } else {

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

    if($tabel>0){
      // melakukan auto number dari id terakhir
      $data['id_s'] = $this->primslib->autonumber($old_id->NIS, 1, 8);
    }else{
      // generate id pertama kali jika tidak ada data sama sekali di dalam database
      $data['id_s'] = 'S00000001';
    }

    /**
     * =======================================================
     * Ambil Tanggal Sekarang
     * =======================================================
     */
    $data['tgl'] = date('d-m-Y');

    /**
     * =======================================================
     * Form Validation
     * =======================================================
     */

    //  Set rules form validation dahulu
    $this->form_validation->set_rules('nama', 'Nm', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('jk', 'Jk', 'required|trim', [
      'required' => 'pilih jenis kelamin'
    ]);

    $this->form_validation->set_rules('nama_santri', 'Nm', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    $this->form_validation->set_rules('nama_santri', 'Nm', 'required|trim', [
      'required' => 'kolom ini tidak boleh kosong'
    ]);

    // Cek form validation jika tidak sesuai dengan rules maka kembali ke view
    if($this->form_validation->run() == false) {
      $data['tb_santri'] = $this->M_data_santri->getAll('tb_santri')->result();
      $this->load->view('admin_template/header');
      $this->load->view('admin_template/mainmenu');  
      $this->load->view('admin/v_tambahdtsantri', $data);
      $this->load->view('admin_template/footer'); 
    } else {
      
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
    

    // merekam data yang dikirim melalui form
    // $data = array(
    //   'NIS' => $id,
    //   'nama_santri' => $this->input->post('nama_santri'),
    //   'jk' => $this->input->post('jk'),
    //   'ttl' => $this->input->post('ttl'),
    //   'alamat' => $this->input->post('alamat'),
    //   'pendidikan' => $this->input->post('pendidikan'),
    //   'jurusan' => $this->input->post('jurusan'),
    //   'nim' => $this->input->post('nim'),
    //   'no_hp' => $this->input->post('no_hp'),
    //   'tgl_masuk' => $this->input->post('tgl_masuk'),
    //   'nama_ayah' => $this->input->post('nama_ayah'),
    //   'nama_ibu' => $this->input->post('nama_ibu'),
    //   'nama_wali' => $this->input->post('nama_wali'),
    //   'no_telp_wali' => $this->input->post('no_telp_wali'),
    //   'foto' => $foto,
    //   'surat_pernyataan' => $surat_pernyataan,
    //   'bukti_pembayaran' => $bukti_pembayaran,
    //   'nama_institusi' => $this->input->post('nama_institusi'),
    //   'status_pembayaran' => $this->input->post('status_pembayaran'),
    //   'username' => $this->input->post('username'),
    //   'password' => $this->input->post('password')
      
    // );

    // menjalankan fungsi insert pada model_promo untuk menambah data ke database
    // $this->M_data_santri->insert($data, 'tb_santri');
    // mengirim pesan berhasil dihapus
    // $this->session->set_flashdata('pesan', '
    // <div class="alert alert-success alert-dismissible fade show" role="alert">
    //   <strong>Selamat!</strong> Anda berhasil menambahkan data.
    //   <button type="button" class="close py-auto" data-dismiss="alert" aria-label="Close">
    //     <span aria-hidden="true">&times;</span>
    //   </button>
    // </div>
    // ');
    // mengarahkan ke halaman tabel promo
    // redirect('admin/Data_santri');
    }

  public function d()
  {
    // merekam id sebagai parameter where saat update
    $where = array('NIS' => $this->input->post('NIS'));
    $foto = null;
    $surat_pernyataan = null;
    $bukti_pembayaran = null;
    // memeriksa apakah admin mengganti gambar atau tidak
    if ($_FILES['foto']['name'] != null) {
      // jika memilih gambar
      $foto = $_FILES['foto']['name'];

      if ($foto != '') {
          $config['upload_path'] = './assets/file_santri/';
          $config['allowed_types'] = 'jpg|jpeg|png';
          $config['max_size'] = '3024';
          $config['overwrite'] = true;
          $config['file_name'] = $this->db->get_where('tb_santri', array('NIS' => $this->input->post('NIS')))->row()->foto;
    
    if ($_FILES['surat_pernyataan']['name'] != null) {
            // jika memilih gambar
        $foto = $_FILES['surat_pernyataan']['name'];
      
        if ($surat_pernyataan != '') {
            $config['upload_path'] = './assets/file_santri/';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf';
            // $config['max_size'] = '3024';
            $config['overwrite'] = true;
            $config['file_name'] = $this->db->get_where('tb_santri', array('NIS' => $this->input->post('NIS')))->row()->surat_pernyataan;
    
    if ($_FILES['bukti_pembayaran']['name'] != null) {
              // jika memilih gambar
        $foto = $_FILES['bukti_pembayaran']['name'];
        
        if ($bukti_pembayaran != '') {
            $config['upload_path'] = './assets/file_santri/';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf';
              // $config['max_size'] = '3024';
            $config['overwrite'] = true;
            $config['file_name'] = $this->db->get_where('tb_santri', array('NIS' => $this->input->post('NIS')))->row()->surat_pernyataan;

            $this->load->library('upload', $config);
          
            if (!$this->upload->do_upload('foto'))
            {
                $error = array('error' => $this->upload->display_errors(),
                                'tb_santri' => $this->m_data_santri->getAll('tb_santri')->result(),
                                'custom' => $this->lang->line('Pengunggahan file foto Gagal!')
                );
                echo $this->load->view('admin_template/header', array(), TRUE);
                echo $this->load->view('admin_template/mainmenu', array(), TRUE);
                echo $this->load->view('admin/v_santri', $error, TRUE);
                echo $this->load->view('admin_template/footer', array(), TRUE);  
                exit;
            }
            else
            {
                $foto = $this->upload->data('file_name');
                $surat_pernyataan = $this->upload->data('file_name');
                $bukti_pembayaran = $this->upload->data('file_name');
            }
  
          }
        }
      }
    }
  }

    
      $data = array(
        'NIS' => $id,
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
        'foto' => $foto,
        'surat_pernyataan' => $surat_pernyataan,
        'bukti_pembayaran' => $bukti_pembayaran,
        'nama_institusi' => $this->input->post('nama_institusi'),
        'status_pembayaran' => $this->input->post('status_pembayaran'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
      );
    }else{
      $data = array(
        'NIS' => $id,
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
    }
    

    // menjalankan method update pada model isi paket
    $this->M_data_santri->update($where, $data, 'tb_santri');

    // mengirim pesan berhasil update data
    $this->session->set_flashdata('pesan', '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Anda <strong>berhasil</strong> mengubah data.
      <button type="button" class="close py-auto" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    ');
    // mengarahkan ke halaman tabel isi paket
    redirect('admin/Data_santri');
  }

  // method yang berfungsi menghapus data
  public function destroy($id)
  {
    // deklarasi $where by id
    $where = array('NIS' => $id);
    // menjalankan fungsi delete pada model_isi paket
    $this->M_data_santri->delete($where, 'tb_santri');
    // mengirim pesan berhasil dihapus
    $this->session->set_flashdata('pesan', '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      Anda <strong>berhasil</strong> menghapus data.
      <button type="button" class="close py-auto" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    ');
    // mengarahkan ke halaman tabel isi paket
    redirect('admin/Data_santri');
  }

  // method untuk melakukan print PDF
  public function pdf()
  {
    $this->load->library('Dompdf_gen');

    $data['tb_santri'] = $this->Model_promo->getAll('tb_santri')->result();

    $this->load->view('admin/datasantri/laporan_pdf', $data);

    $paper_size = 'A4';
    $oriantation = 'landscape';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $oriantation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan_data_santri_".date('Y-m-d_H-i-s').".pdf", array('Attachment' => 0));
  }
}
