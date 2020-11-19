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
     
      if(file_exists($lok=FCPATH.'/assets/img/'.$name)){
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

    public function aksiTambahperizinan()
    {
        $NIS = $this->input->post('NIS');
        $NIS = $this->input->post('NIS');
        $tgl_izin = $this->input->post('tgl_izin');
        $tgl_datang = $this->input->post('tgl_datang');
        $alasan = $this->input->post('alasan');
        $keterangan = $_FILES['keterangan'];
        $status = $this->input->post('status');

        if ($keterangan=''){}else{
            $config['upload_path']          = './assets/file_izin';
            $config['allowed_types']        ='jpg|png|jpeg|gif|JPG|JPEG|pdf';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('keterangan')) {
                 $keterangan=$this->upload->data('file_name');
            }else{
            $keterangan=$this->upload->data('file_name');

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
        
        $this->m_perizinan->tambah_data($data,'tb_perizinan');
        redirect('index.php/admin/Admin/perizinan'); 

        }

    public function downloadketeranganizin($id)
    {
        $data = $this->db->get_where('tb_perizinan',['id_perizinan'=>$id])->row();
        force_download('./assets/file_izin/'.$data->keterangan,NULL);

    }

    public function editperizinan($id){
    $where = array('id_perizinan' => $id); 
    $data['izinedit'] = $this->m_perizinan->edit_data($where,'tb_perizinan')->result();  
     $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_edit_perizinan', $data);
        $this->load->view('admin_template/footer');
  
    }


    public function updateperizinan() {       
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
        

        $this->m_perizinan->update_data($where,$data);
            redirect('index.php/admin/Admin/perizinan');
            
          }

    function detail($id){

    $where = array('id_perizinan' => $id);
    $data['detail'] = $this->m_perizinan->detail_data($where)->result();  

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_detail_perizinan',$data);
        $this->load->view('admin_template/footer');

        }

    // END PERIZINAN //