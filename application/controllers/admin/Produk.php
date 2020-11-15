<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_master_produk');
        $this->load->helper('url');
    }



public function produk()
    {
        
        $data['tb_produk'] = $this->m_master_produk->produk()->result();
        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_produk', $data);
        $this->load->view('admin_template/footer');
    }

    public function tmbhproduk()
    {

        // Membuat fungsi untuk melakukan penambahan id produk secara otomatis
		// Mendapatkan jumlah produk yang ada di database
		$jumlahProduk = $this->m_master_produk->produk()->num_rows();
		// Jika jumlah produk lebih dari 0
		if ($jumlahProduk > 0) {
			// Mengambil id produk sebelumnya
			$lastId = $this->m_master_produk->tampil_produk_akhir()->result();
			// Melakukan perulangan untuk mengambil data
			foreach ($lastId as $row) {
				// Melakukan pemisahan huruf dengan angka pada id produk
				$rawIdProduk = substr($row->id_produk, 3);
				// Melakukan konversi nilai pemisahan huruf dengan angka pada id order menjadi integer
				$idProdukInt = intval($rawIdProduk);

				// Menghitung panjang id yang sudah menjadi integer
				if (strlen($idProdukInt) == 1) {
					// jika panjang id hanya 1 angka
					$idProduk = "PR00" . ($idProdukInt + 1);
				} else if (strlen($idProdukInt) == 2) {
					// jika panjang id hanya 2 angka
					$idProduk = "PR0" . ($idProdukInt + 1);
				} else if (strlen($idProdukInt) == 3) {
					// jika panjang id hanya 3 angka
					$idProduk = "PR" . ($idProdukInt + 1);
				}
			}
		} else {
			// Jika jumlah paket soal kurang dari sama dengan 0
			$idProduk = "PR001";
        }
        
        $admin = $this->m_master_produk->tampil_admin()->result();
        
        $data = array(
            'admin' => $admin , 
            'id_produk' => $idProduk
        );

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhproduk', $data);
        $this->load->view('admin_template/footer');
    }

    public function aksiTambahproduk()
    {
        $id_produk = $this->input->post('id_produk');
        $id_admin = $this->input->post('id_admin');
        $nama_produk = $this->input->post('nama_produk');
        $foto_produk = $_FILES['foto_produk'];
        $deskripsi = $this->input->post('deskripsi');
        $resep = $this->input->post('resep');

        if ($foto_produk=''){}else{
            $config['upload_path']          = './assets/img/produk';
            $config['allowed_types']        ='jpg|png|jpeg|gif|JPG|JPEG';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto_produk')) {
                //echo "Upload Gagal"; die();
            }else{
                $foto_produk=$this->upload->data('file_name');
            }

        }
        $data = array(
            'id_produk' => $id_produk,
            'id_admin' => $id_admin,
            'nama_produk' => $nama_produk,
            'foto_produk' => $foto_produk,
            'deskripsi' => $deskripsi,
            'resep' => $resep,
        );
        
        $this->m_master_produk->tambah_produk($data, 'tb_produk');
        redirect('index.php/admin/produk/produk'); 

        }

        function tampilDetailProduk($idProdukUri)
	{
		// Mendapatkan Id Produk Soal dari URL
		$idProduk = $idProdukUri;
		// Membuat array untuk digunakan sebagai select
		$where = array(
			'tb_produk.id_produk' => $idProduk
		);
		// Mendapatkan data paket soal tertentu melalui model
		$result = $this->m_master_produk->tampil_produk_where($where,'tb_produk')->result();
        // Menyimpan hasil dari model kedalam array
		$data = array(
            'data_produk' => $result,
		);
		// Menampilkan view dengan data dari model
		$this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_detail_produk', $data);
        $this->load->view('admin_template/footer');
    }
    
    function editProduk($idProdukUri)
	{
		// Mendapatkan Id Produk Soal dari URL
		$idProduk = $idProdukUri;
		// Membuat array untuk digunakan sebagai media select
		$where = array(
			'id_produk' => $idProduk
		);
		// Mendapatkan data paket soal tertentu melalui modal
		$result = $this->m_master_produk->tampil_produk_where_only($where, "tb_produk")->result();
		// Mendapatkan data mata pelajaran melalui modal
		$resultAdmin = $this->m_master_produk->tampil_admin()->result();
		// Menyimpan hasil dari model kedalam array
		$data = array(
			'data_produk' => $result,
			'data_admin' => $resultAdmin
		);
		// Menampilkan view dengan data dari model
		$this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_edit_produk.php', $data);
        $this->load->view('admin_template/footer');
    }

    function aksiEditProduk()
	{
		// Menyimpan input dari user kedalam variabel
		$id_produk = $this->input->post('id_produk');
        $id_admin = $this->input->post('id_admin');
        $nama_produk = $this->input->post('nama_produk');
        $foto_produk = $_FILES['foto_produk'];
        $deskripsi = $this->input->post('deskripsi');
        $resep = $this->input->post('resep');

        $data = array(
            'id_produk' => $id_produk,
            'id_admin' => $id_admin,
            'nama_produk' => $nama_produk,
            'foto_produk' => $foto_produk,
            'deskripsi' => $deskripsi,
            'resep' => $resep,
			);
			// Menyimpan data sebagai unique key yang digunakan untuk mengupdate
			$where = array(
				'id_produk' => $id_produk
			);
			$this->m_master_produk->update_produk($where, $data, 'tb_produk');
			redirect('index.php/admin/produk/produk');
		}
    
    function hapusPaket($idProdukUri)
	{
		// Mendapatkan id paket soal yang akan dihapus
		$idProduk = $idProdukUri;
		// Menyimpan id paket soal kedalam array
		$where = array(
			'id_produk' => $idProduk
        );
		$this->m_master_produk->delete_produk($where, 'tb_produk');
		redirect('index.php/admin/produk/produk');
	}
}