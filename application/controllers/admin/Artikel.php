<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_master_artikel');
        $this->load->helper('url');
    }



    public function artikel()
    {
        $data['tb_artikel'] = $this->m_master_artikel->artikel()->result();
        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_artikel', $data);
        $this->load->view('admin_template/footer');
    }

    public function tmbhartikel()
    {

        // Membuat fungsi untuk melakukan penambahan id produk secara otomatis
		// Mendapatkan jumlah produk yang ada di database
		$jumlahArtikel = $this->m_master_artikel->artikel()->num_rows();
		// Jika jumlah Arikel lebih dari 0
		if ($jumlahArtikel > 0) {
			// Mengambil id Arikel sebelumnya
			$lastId = $this->m_master_artikel->tampil_artikel_akhir()->result();
			// Melakukan perulangan untuk mengambil data
			foreach ($lastId as $row) {
				// Melakukan pemisahan huruf dengan angka pada id Arikel
				$rawIdArtikel = substr($row->id_artikel, 3);
				// Melakukan konversi nilai pemisahan huruf dengan angka pada id order menjadi integer
				$idArtikelInt = intval($rawIdArtikel);

				// Menghitung panjang id yang sudah menjadi integer
				if (strlen($idArtikelInt) == 1) {
					// jika panjang id hanya 1 angka
					$idArtikel = "AR00" . ($idArtikelInt + 1);
				} else if (strlen($idArtikelInt) == 2) {
					// jika panjang id hanya 2 angka
					$idArtikel = "AR0" . ($idArtikelInt + 1);
				} else if (strlen($idArtikelInt) == 3) {
					// jika panjang id hanya 3 angka
					$idArtikel = "AR" . ($idArtikelInt + 1);
				}
			}
		} else {
			// Jika jumlah paket soal kurang dari sama dengan 0
			$idArtikel = "AR001";
        }
        
        $admin = $this->m_master_artikel->tampil_admin()->result();
        
        $data = array(
            'admin' => $admin , 
            'id_artikel' => $idArtikel
        );

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhartikel', $data);
        $this->load->view('admin_template/footer');
    }

    public function aksiTambahartikel()
    {
        $id_artikel = $this->input->post('id_artikel');
        $id_admin = $this->input->post('id_admin');
        $gambar = $_FILES['gambar'];
        $deskripsi = $this->input->post('deskripsi');

        if ($gambar=''){}else{
            $config['upload_path']          = './assets/img/artikel';
            $config['allowed_types']        ='jpg|png|jpeg|gif|JPG|JPEG';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal"; die();
            }else{
                $gambar=$this->upload->data('file_name');
            }

        }

        $data = array(
            'id_artikel' => $id_artikel,
            'id_admin' => $id_admin,
            'gambar' => $gambar,
            'deskripsi' => $deskripsi,
        );
        
        $this->m_master_artikel->tambah_artikel($data, 'tb_artikel');
        redirect('index.php/admin/artikel/artikel'); 

        }

        function tampilDetailArtikel($idArtikelUri)
        {
            // Mendapatkan Id Produk Soal dari URL
            $idArtikel = $idArtikelUri;
            // Membuat array untuk digunakan sebagai select
            $where = array(
                'tb_artikel.id_artikel' => $idArtikel
            );
            // Mendapatkan data paket soal tertentu melalui model
            $result = $this->m_master_artikel->tampil_artikel_where($where,'tb_artikel')->result();
            // Menyimpan hasil dari model kedalam array
            $data = array(
                'data_artikel' => $result,
            );
            // Menampilkan view dengan data dari model
            $this->load->view('admin_template/header');
            $this->load->view('admin_template/mainmenu');
            $this->load->view('admin/v_detail_artikel', $data);
            $this->load->view('admin_template/footer');
        }

        function editArtikel($idArtikelUri)
	{
		// Mendapatkan Id Produk Soal dari URL
		$idArtikel = $idArtikelUri;
		// Membuat array untuk digunakan sebagai media select
		$where = array(
			'id_artikel' => $idArtikel
		);
		// Mendapatkan data paket soal tertentu melalui modal
		$result = $this->m_master_artikel->tampil_artikel_where_only($where, "tb_artikel")->result();
		// Mendapatkan data mata pelajaran melalui modal
		$resultAdmin = $this->m_master_artikel->tampil_admin()->result();
		// Menyimpan hasil dari model kedalam array
		$data = array(
			'data_artikel' => $result,
			'data_admin' => $resultAdmin
		);
		// Menampilkan view dengan data dari model
		$this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_edit_artikel.php', $data);
        $this->load->view('admin_template/footer');
    }

    function aksiEditArtikel()
	{
        $id_artikel = $this->input->post('id_artikel');
        $id_admin = $this->input->post('id_admin');
        $gambar = $_FILES['gambar'];
        $deskripsi = $this->input->post('deskripsi');
        
        
        $data = array(
            'id_artikel' => $id_artikel,
            'id_admin' => $id_admin,
            'gambar' => $gambar,
            'deskripsi' => $deskripsi,
       
			);
			// Menyimpan data sebagai unique key yang digunakan untuk mengupdate
			$where = array(
				'id_artikel' => $id_artikel
			);
			$this->m_master_artikel->update_artikel($where, $data, 'tb_artikel');
			redirect('index.php/admin/artikel/artikel');
		}
    

        function hapusArtikel($idArtikelUri)
        {
            // Mendapatkan id paket soal yang akan dihapus
            $idArtikel = $idArtikelUri;
            // Menyimpan id paket soal kedalam array
            $where = array(
                'id_artikel' => $idArtikel
            );
            $this->m_master_artikel->delete_artikel($where, 'tb_artikel');
            redirect('index.php/admin/artikel/artikel');
        }

}