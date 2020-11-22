<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_Santri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_data_santri');
        $this->load->helper('url');
    }


public function data_santri()
    {
        
        $data['santri'] = $this->m_data_santri->tampil_data()->result();  

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_santri',$data);
        $this->load->view('admin_template/footer');
    }


   function hapusdtsantri($id){
         $where = array('NIS' => $id); 
        $foto = $this->db->get_where('tb_santri',$where);
        $this->m_data_santri->hapus_data($where,'tb_santri'); 

         if($foto->num_rows($where)>0){
      $pros=$foto->row();
      $name=$pros->foto;
     
      if(file_exists($lok=FCPATH.'/assets/file_santri/'.$name)){
        unlink($lok);
      }
    }

        redirect('index.php/admin/Data_Santri');
    }

    function tmbhdtsantri(){
        $data= $this->m_data_santri->tampil_data()->num_rows();
        if($data > 0)
        {
            // Mengambil id soal sebelumnya
            $lastId = $this->m_data_santri->tampil_data_akhir()->result();
            // Melakukan perulangan untuk mengambil data
            foreach($lastId as $row)
            {
                // Melakukan pemisahan huruf dengan angka pada id perizinan
                $rawNIS = substr($row->NIS,3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id perizinn menjadi integer
                $NISInt = intval($rawNIS);

                // Menghitung panjang id yang sudah menjadi integer
                if(strlen($NISInt) == 1)
                {
                    // jika panjang id hanya 1 angka
                    $NIS = "SNTR00".($NISInt + 1);
                }else if(strlen($NISInt) == 2)
                {
                    // jika panjang id hanya 2 angka
                    $NIS = "SNTR0".($NISInt + 1);
                }else if(strlen($NISInt) == 3)
                {
                    // jika panjang id hanya 3 angka
                    $idjurusan = "SNTR".($NISInt + 1);
                }

            }
        }else
        {
            // Jika jumlah perizinan kurang dari sama dengan 0
            $NIS = "SNTR001";
        }

        // Mengambil data mata pelajaran menggunakan model
        
         $data= $this->m_data_santri->tampil_santri()->result();
        
       $data = array(
            'NIS' => $NIS,
           
        ); 


        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhdtsantri', $data);
        $this->load->view('admin_template/footer');
         
    
    }

    public function aksiTambahdtsantri()
    {
        $NIS = $this->input->post('NIS');
        $nama_santri = $this->input->post('nama_santri');
        $jk = $this->input->post('jk');
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');
        $pendidikan = $this->input->post('pendidikan');
        $jurusan = $this->input->post('jurusan');
        $nim = $this->input->post('nim');
        $tgl_masuk = $this->input->post('tgl_masuk');
        $nama_ayah = $this->input->post('nama_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $nama_wali = $this->input->post('nama_wali');
        $no_telp_wali = $this->input->post('no_telp_wali');
        $foto = $_FILES['foto'];
        $surat_pernyataan = $_FILES['surat_pernyataan'];
        $bukti_pembayaran = $_FILES['bukti_pembayaran'];
        $nama_institusi = $this->input->post('nama_institusi');
        $status_pembayaran = $this->input->post('status_pembayaran');
        $nusername= $this->input->post('username');
        $password = $this->input->post('password');

        if ($foto, $surat_pernyataan, $bukti_pembayaran =''){}else{
            $config['upload_path']          = './assets/file_santri';
            $config['allowed_types']        ='jpg|png|jpeg|gif|JPG|JPEG|pdf';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto, surat_pernyataan, bukti_pembayaran')) {
                 $foto, $surat_pernyataan, $bukti_pembayaran=$this->upload->data('file_name');
            }else{
                $foto, $surat_pernyataan, $bukti_pembayaran=$this->upload->data('file_name');

            }
        }


        $data = array(
            'NIS' => $NIS,
            'nama_santri' => $nama_santri,
            'jk' => $jk,
            'ttl' => $ttl,
            'alamat' => $alamat,
            'pendidikan' => $pendidikan,
            'jurusan' => $jurusan,
            'nim' => $nim,
            'tgl_masuk' => $tgl_masuk,
            'nama_ayah'=> $nama_ayah,
            'nama_ibu' => $nama_ibu,
            'nama_wali' => $nama_wali,
            'no_telp_wali' => $no_telp_wali,
            'foto' => $foto,
            'surat_pernyataan' => $surat_pernyataan,
            'bukti_pembayaran' => $bukti_pembayaran,
            'nama_institusi' => $nama_institusi,
            'status_pembayaran' => $status_pembayaran,
            'username' => $nusername,
            'password' => $password
            
        );
        
        $this->m_data_santri->tambah_data($data,'tb_santri');
        redirect('index.php/admin/Data_santri'); 

        }

    public function downloadfilesantri($id)
    {
        $data = $this->db->get_where('tb_santri',['NIS'=>$id])->row();
        force_download('./assets/file_santri/'.$data->keterangan,NULL);

    }

    public function editdtsantri($id){
    $where = array('NIS' => $id); 
    $data['izinedit'] = $this->antri->edit_data($where,'tb_santri')->result();  
     $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_edit_dtsantri', $data);
        $this->load->view('admin_template/footer');
  
    }


    public function updatedtsantri() {       
        $id_perizinan = $this->input->post('id_perizinan');
        $NIS = $this->input->post('NIS');
        $tgl_izin = $this->input->post('tgl_izin');
        $tgl_datang = $this->input->post('tgl_datang');
        $alasan = $this->input->post('alasan');
        $status = $this->input->post('status');
        $keterangan = $_FILES['keterangan'];
        $where= array('id_perizinan' => $id_perizinan );
         $foto = $this->db->get_where('tb_perizinan',$where);


        if ($keterangan=''){}else{
            $config['upload_path']          = './assets/file_izin';
            $config['allowed_types']        ='jpg|png|jpeg|gif|JPG|JPEG|pdf';

            $this->load->library('upload',$config);
            if($this->upload->do_upload('keterangan')) {
               $keterangan=$this->upload->data('file_name');
            } else{

                $keterangan=$this->upload->data('file_name');
            }


             // if($foto->num_rows()>0){
      // $pros=$foto->row();
      // $name=$pros->keterangan;
     
      // if(file_exists($lok=FCPATH.'/assets/file_izin/'.$name)){
        // unlink($lok);
                    // }
        // }

        }

       

        $data = array(
            'NIS' => $NIS,
            'nama_santri' => $nama_santri,
            'jk' => $jk,
            'ttl' => $ttl,
            'alamat' => $alamat,
            'pendidikan' => $pendidikan,
            'jurusan' => $jurusan,
            'nim' => $nim,
            'tgl_masuk' => $tgl_masuk,
            'nama_ayah'=> $nama_ayah,
            'nama_ibu' => $nama_ibu,
            'nama_wali' => $nama_wali,
            'no_telp_wali' => $no_telp_wali,
            'foto' => $foto,
            'surat_pernyataan' => $surat_pernyataan,
            'bukti_pembayaran' => $bukti_pembayaran,
            'nama_institusi' => $nama_institusi,
            'status_pembayaran' => $status_pembayaran,
            'username' => $nusername,
            'password' => $password
            
            
        );

         if ($keterangan != NULL) {

        $data['keterangan'] = $keterangan;
        }
        

        $this->m_perizinan->update_data($where,$data);
            redirect('index.php/admin/Data_admin');
            
          }

    function detail($id){

    $where = array('NIS' => $id);
    $data['detail'] = $this->m_data_santri->detail_data($where)->result();  

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_detail_dtsantri',$data);
        $this->load->view('admin_template/footer');

        }

    // END PERIZINAN //