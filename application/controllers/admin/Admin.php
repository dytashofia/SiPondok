<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_master_pelanggaran');
  $this->load->model('m_perizinan');

        $this->load->helper('url');
    }

    public function index()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin_template/footer');
    }

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

    public function pembayaran()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_pembayaran');
        $this->load->view('admin_template/footer');
    }

    public function tmbhpembayaran()
    {

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhpembayaran');
        $this->load->view('admin_template/footer');
    }


   // PERIZINAN//


    public function perizinan()
    {
        
        $data['izin'] = $this->m_perizinan->tampil_data()->result();  

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_perizinan',$data);
        $this->load->view('admin_template/footer');
    }


   function hapusperizinan($id){
         $where = array('id_perizinan' => $id); 
        $foto = $this->db->get_where('tb_perizinan',$where);
        $this->m_perizinan->hapus_data($where,'tb_perizinan'); 

         if($foto->num_rows($where)>0){
      $pros=$foto->row();
      $name=$pros->keterangan;
     
      if(file_exists($lok=FCPATH.'/assets/file_izin/'.$name)){
        unlink($lok);
      }
    }

        redirect('index.php/admin/Admin/perizinan');
    }

    function tmbhperizinan(){
        $data= $this->m_perizinan->tampil_data()->num_rows();
        if($data > 0)
        {
            // Mengambil id soal sebelumnya
            $lastId = $this->m_perizinan->tampil_data_akhir()->result();
            // Melakukan perulangan untuk mengambil data
            foreach($lastId as $row)
            {
                // Melakukan pemisahan huruf dengan angka pada id perizinan
                $rawid_perizinan = substr($row->id_perizinan,3);
                // Melakukan konversi nilai pemisahan huruf dengan angka pada id perizinn menjadi integer
                $id_perizinanInt = intval($rawid_perizinan);

                // Menghitung panjang id yang sudah menjadi integer
                if(strlen($id_perizinanInt) == 1)
                {
                    // jika panjang id hanya 1 angka
                    $id_perizinan = "IZ00".($id_perizinanInt + 1);
                }else if(strlen($id_perizinanInt) == 2)
                {
                    // jika panjang id hanya 2 angka
                    $id_perizinan = "IZ0".($id_perizinanInt + 1);
                }else if(strlen($id_perizinanInt) == 3)
                {
                    // jika panjang id hanya 3 angka
                    $idjurusan = "IZ".($id_perizinanInt + 1);
                }

            }
        }else
        {
            // Jika jumlah perizinan kurang dari sama dengan 0
            $id_perizinan = "IZ001";
        }

        // Mengambil data mata pelajaran menggunakan model
        
         $data= $this->m_perizinan->tampil_perizinan()->result();
        
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
            'keterangan' => $keterangan
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
        $keterangan = $_FILES['keterangan'];
        $where= array('id_perizinan' => $id_perizinan );
         $foto = $this->db->get_where('tb_perizinan',$where);


    if($foto->num_rows()>0){
      $pros=$foto->row();
      $name=$pros->keterangan;
     
      if(file_exists($lok=FCPATH.'/assets/file_izin/'.$name)){
        unlink($lok);
      }
    }

        
        if ($keterangan=''){}else{
            $config['upload_path']          = './assets/file_izin';
            $config['allowed_types']        ='jpg|png|jpeg|gif|JPG|JPEG|pdf';

            $this->load->library('upload',$config);
            if($this->upload->do_upload('keterangan')) {
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
            'alasan' => $alasan
            
        );

        if ($keterangan != NULL) {

            $data['keterangan'] = $keterangan;
        }

        $this->m_perizinan->update_data($where,$data);
            redirect('index.php/admin/Admin/perizinan');
            
          }

    // END PERIZINAN //

    public function pelanggaran()
    {
        $data['tb_pelanggaran'] = $this->m_master_pelanggaran->tampil_pelanggaran()->result();
        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_pelanggaran', $data);
        $this->load->view('admin_template/footer');
    }



    public function tmbhpelanggaran()
    {
        $pelanggaran = $this->m_master_pelanggaran->tampil_pelanggaran();

        $data = array (
            'pelanggaran' => $pelanggaran           
        );

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_tmbhpelanggaran');
        $this->load->view('admin_template/footer');
    }

    public function tambah_aksi_pelanggaran() {
        $id_pelanggaran = $this->input->post('id_pelanggaran');
        $NIS = $this->input->post('NIS');
        $jenis_pelanggaran = $this->input->post('jenis_pelanggaran');
        $tgl = $this->input->post('tgl');
        $sanksi = $this->input->post('sanksi');
        $catatan = $this->input->post('catatan');

        $data = array(
            'id_pelanggaran' => $id_pelanggaran,
            'NIS' => $NIS,
            'jenis_pelanggaran' =>$jenis_pelanggaran,
            'tgl' => $tgl,
            'sanksi' => $sanksi,
            'catatan' => $catatan,
        );

        $this->m_master_pelanggaran->tambah_pelanggaran($data, 'tb_pelanggaran');
        redirect('index.php/admin/Admin/pelanggaran');

    }

    public function edit_pelanggaran() {
        $where = array (
            'id_pelanggaran' => $id_pelanggaran,
        );

        $data['tb_pelanggaran'] = $this->m_master_pelanggaran($where, 'tb_pelanggaran')->result;

        $this->load->view('admin_template/header');
        $this->load->view('admin_template/mainmenu');
        $this->load->view('admin/v_edit_pelanggaran');
        $this->load->view('admin_template/footer');

    }

    public function update_pelanggaran() {
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

    public function hapus_pelanggaran() {
        $where = array (
            'id_pelanggaran' => $id_pelanggaran,
        );

        $data['tb_pelanggaran'] = $this->m_master_pelanggaran($where, 'hapus_pelanggaran')->result();

        redirect('index.php/admin/Admin/pelanggaran');
    }

    //============ Batas Controller Pelanggaran ===============


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
