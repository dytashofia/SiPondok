    
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data_santri');
        $this->load->helper('url');
        $this->load->library('PrimsLib');
    }

    // public function index()
    // {
    //     $this->load->view('santri_template/header2');
    //     $this->load->view('santri/v_pendaftaran', $data);
    //     $this->load->view('santri_template/footer');
    // }

    // Menambahkan data santri
  public function index()

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
      $data['tb_santri'] = $this->M_data_santri->getAll('tb_santri')->result();
        $this->load->view('santri_template/header2');
        $this->load->view('santri/v_pendaftaran', $data);
        $this->load->view('santri_template/footer');
      } else {
        /** Upload foto santri*/
        $upload_image = $_FILES['fto']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path']  = './assets/berkasSantri/';
  
            $this->upload->initialize($config);
  
            if (!$this->upload->do_upload('fto')) {
                echo $this->upload->display_errors();
            } else {
                $img = $this->upload->data('file_name');
            }
        } else {
            $img = 'default.jpg';
        }
  
        // /** Upload bukti bayar */
        // $upload_image = $_FILES['bukti_pembayaran']['name'];
        // if ($upload_image) {
        //     $config['allowed_types'] = 'gif|jpg|png';
        //     $config['max_size'] = '2048';
        //     $config['upload_path']  = './assets/berkasSantri/';
  
        //     $this->upload->initialize($config);
  
        //     if (!$this->upload->do_upload('bukti_pembayaran')) {
        //         echo $this->upload->display_errors();
        //     } else {
        //         $bukti_byr = $this->upload->data('file_name');
        //     }
        // } else {
        //     $bukti_byr = 'default.jpg';
        // }
  
        /** Upload suratpernyataan */
        $upload_image = $_FILES['pernyataan']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
            $config['max_size'] = '2048';
            $config['upload_path']  = './assets/berkasSantri/';
  
            $this->upload->initialize($config);
  
            if (!$this->upload->do_upload('pernyataan')) {
                echo $this->upload->display_errors();
            } else {
                $pernyataan = $this->upload->data('file_name');
            }
        } else {
            $pernyataan = 'default.jpg';
        }
        
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
          'tgl_masuk' => date('Y-m-d', time()),
          'nama_ayah' => $this->input->post('ayah'),
          'nama_ibu' => $this->input->post('ibu'),
          'nama_wali' => $this->input->post('wali'),
          'no_telp_wali' => $this->input->post('nohpwali'),
          'foto' => $img,
          'surat_pernyataan' => $pernyataan,
          // 'bukti_pembayaran' => $bukti_byr,
          'nama_institusi' => $this->input->post('univ'),
          // 'status_pembayaran' => '',
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
        redirect('index.php/santri/login');
      }
    }
}
