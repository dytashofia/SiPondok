  <!-- modal tambah izin -->
  <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="konfirmasiModalTitle">
            <div class="modal-dialog  modal-dialog-centered" style="height:100px; max-width: 700px;">
                <div class="modal-content" >

                         <div class="card-header " style="background: linear-gradient(to right, #00cef9, #00e6af);">
                            <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                             <ul class="list-inline kl ">
                                 <li>
                                     <h4 class="text-center" style="color: white; font-weight:bold; "> TAMBAH PERIZINAN</h4>
                                     
                                 </li>
                             </ul>

                             
                     </div>
                   <form class="form-horizontal" id="submit">
                    <div class="modal-body">
                        <div class="col-12" >
                    <div class="card" >
                         <div class="row match-height" >
                            <div class="col-lg-6 col-md-12">
                                <div class="card" >
                                    <div class="card-block">
                                        <div class="card-body">
                                            
                                                <input type="hidden" name="id_perizinan" id="id_perizinan" class="form-control" value="<?= $id_perizinan;?>" readonly>

                                            <h5 class="mt-2">NIS</h5>
                                            <fieldset class="form-group">
                                                <input type="text"  class="form-control" name="NIS" id="NIS" value="<?php echo ucfirst($this->session->userdata('NIS'));?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Santri </h5>
                                            <fieldset class="form-group">
                                            <input type="text" class="form-control" id="nama_santri" value="<?php echo ucfirst($this->session->userdata('nama_santri'));?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Tanggal Izin</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_izin" id="tgl_izin" required >
                                            </fieldset>

                                            <h5 class="mt-2">Tanggal Kembali</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_datang" id="tgl_datang" required>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">

                                            <h5 class="mt-2">Alasan</h5>
                                            <fieldset class="form-group">
                                                <textarea class="form-control" name="alasan" id="alasan" rows="4" required></textarea>
                                            </fieldset>

                                            <h5 class="mt-2">Upload Keterangan Jika Ada</h5>
                                            <fieldset class="form-group">
                                                <input type="file" class="form-control" name="keterangan">
                                            </fieldset>

                                              <fieldset class="form-group">
                                                <input type="hidden" class="form-control" name="status" id="status" value="Menunngu Konfirmasi">
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">Tambah</button>
                    </div>
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>

 <!--  delete Modal -->
<?php
        foreach($izin as $row ) :    
    ?>
       
        <div class="modal fade" id="deletePaketModal<?= $row->id_perizinan?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="deletePaketModalTitle">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: linear-gradient(to right, #00cef9, #00e6af);">
                        <h5 class="modal-title" id="deletePaketModalTitle" style="color:white; font-weight:bold;">Hapus Izin</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-justify">Apakah anda yakin akan menghapus data perizinan ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-secondary" type="button" data-dismiss="modal"> Batal </button>
                        <a href="<?php echo base_url() ?>index.php/santri/Santri/hapusperizinan/<?php echo $row->id_perizinan ?>" role="button" class="btn btn-success"> Ya </a>
                    </div>
                </div>
            </div>
        </div>

    <?php
        endforeach;
    ?>

    <!-- edit modal perizinan -->
     <?php
        foreach($izin as $i) :    
    ?>
        
        <div class="modal fade" id="<?= $i->id_perizinan?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="konfirmasiModalTitle">
           <div class="modal-dialog  modal-dialog-centered" style=" max-width: 700px;">
                <div class="modal-content" >

                         <div class="card-header " style="background: linear-gradient(to right, #00cef9, #00e6af);">
                            <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                             <ul class="list-inline kl ">
                                 <li>
                                     <h4 class="text-center" style="color: white; font-weight:bold; "> EDIT PERIZINAN</h4>
                                     
                                 </li>
                             </ul>
                     </div>

                   <form class="form-horizontal" id="edit">
                    <div class="modal-body">
                        <div class="col-12" >
                    <div class="card" >
                         <div class="row match-height" >
                            <div class="col-lg-6 col-md-12">
                                <div class="card" >
                                    <div class="card-block">
                                        <div class="card-body">
                                           
                                                <input type="hidden" name="id_perizinan" id="id_perizinan" class="form-control" value="<?= $i->id_perizinan;?>" readonly>

                                            <h5 class="mt-2">NIS</h5>
                                            <fieldset class="form-group">
                                                <input type="text"  class="form-control" name="NIS" value="<?= $i->NIS;?>" id="NIS" readonly>
                                            </fieldset>

                                             <h5 class="mt-2">Nama Santri </h5>
                                            <fieldset class="form-group">
                                            <input type="text" class="form-control" id="nama_santri" value="<?php echo ucfirst($this->session->userdata('nama_santri'));?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Tanggal Izin</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_izin" id="tgl_izin" value="<?= $i->tgl_izin;?>" >
                                            </fieldset>

                                            <h5 class="mt-2">Tanggal Kembali</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_datang" id="tgl_datang" value="<?= $i->tgl_datang;?>">
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">

                                            <h5 class="mt-2">Alasan</h5>
                                            <fieldset class="form-group">
                                                <textarea class="form-control" name="alasan" id="alasan" rows="4"><?= $i->alasan;?></textarea>
                                            </fieldset>
                                            <h5 class="mt-2">Edit Keterangan Jika diperlukan</h5>
                                            <?php
                                                    if($i->keterangan==''){?>
                                                                 <img src="<?php echo base_url('assets/file_izin/nofile.png')?>" width="120" height="120"><br>
                                             <?php }else{ ?>
 
                                                <embed  src="<?php echo base_url('assets/file_izin/'.$i->keterangan)?>" width="120" height="120"></embed><br>
                                            <?php }?> 
                                            <fieldset class="form-group">
                                            <div>
                                                 <?php echo $i->keterangan; ?>
                                                    
                                            </div>
                                          
                                                <input type="file" class="form-control" name="keterangan" value="<?= $i->keterangan;?>">
                                            </fieldset>

                                                <input type="hidden" name="status" id="status" class="form-control" value="<?= $i->status;?>" readonly>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">SIMPAN</button>
                    </div>
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    <?php
        endforeach;
    ?>


 <div class="app-content content">
     <div class="content-wrapper">
         <!-- <div class="content-wrapper-before"></div> -->
         <div class="content-header row">
             <div class="content-header-left col-md-4 col-12 mb-2">
                 <h3 class="content-header-title">&nbsp;</h3>
             </div>
             <div class="content-header-right col-md-8 col-12">
                 <div class="breadcrumbs-top float-md-right">
                     <div class="breadcrumb-wrapper mr-1">
                         <ol class="breadcrumb">

                         </ol>
                     </div>
                 </div>
             </div>
         </div>
         <div class="content-body">
             <!-- Striped rows start -->

             <style>
                 .rr {
                     color:  white;}

                 .tb {
                     width: 85%;
                     display: flex;
                     justify-content: center;
                     align-items: center;
                 }

                 .kl {
                     display: flex;
                     align-items: center;
                 }

                 .pp {
                     font-weight: bold;
                     color: white;

                 }

                 @media (min-width: 768px) {
                     .rr {
                         font-size: 90px;
                     }

                     .pp {
                         font-size: 30px;
                     }
                 }

                 @media (max-width: 768px) {
                     .rr {
                         font-size: 30px;
                     }

                     .pp {
                         font-size: 20px;
                     }
                 }
             </style>

             <div class="row">
                 <div class="col-xl-9 col-lg-6 col-md-12">
                     <div class="card" style="margin-bottom:-11px;">
                         <div class="card-header " style="background: linear-gradient(to right, #00cef9, #00e6af);">
                             <ul class="list-inline kl ">
                                 <li><i class=" ft-feather rr"></i></li>
                                 <li class="tb">
                                     <h4 class="pp  text-center">PERIZINAN</h4>
                                 </li>
                                 </span>
                             </ul>

                         </div>
                     </div>
                     <div class="card ">
                         <div class="card-header ">
                             <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                             <div class="heading-elements">
                                 <ul class="list-inline mb-0">
                                     <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                     <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                     <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                     <li><a data-action="close"><i class="ft-x"></i></a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="card-content collapse show">
                             <div class="card-body">
                                 <div>
                                     

                                     <button type="button" data-toggle="modal" data-target="#tambahModal" class="btn ff btn-primary btn-min-width mr-1 mb-1">
                                    <i class="ft-plus"></i>Buat Perizinan Baru
                                                        </button> 
                                 </div>
                                 <div class="table-responsive">


                                     <table class="table table-striped table-bordered zero-configuration">
                                         <style>
                                             .dataTables_filter {
                                                 text-align: right;
                                             }

                                             .dataTables_filter label {
                                                 text-align: left;
                                             }

                                             .dataTables_paginate ul {
                                                 position: absolute;
                                                 right: 0;
                                                 padding-right: 1rem;
                                             }

                                             .dataTables_info {
                                                 padding-top: 15px;
                                                 padding-bottom: 50px;
                                             }
                                         </style>
                                         <thead>
                                             <tr>
                                                <th>NO</th>
                                            <th>NAMA SANTRI</th>
                                            <th>TANGGAL IZIN</th>
                                            <th>TANGGAL KEMBALI</th>
                                             <th>ALASAN</th>
                                             <th>KETERANGAN</th>
                                             <th>STATUS</th>
                                            <th>ACTION</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                            <?php
                                            $noUrut = 1;
                                            foreach($izin as $i) :
                                        ?>
                                        <tr>
                                           
                                            <td><?= $noUrut;?></td>
                                            <td><?= $i->nama_santri;?></td>
                                            <td> <?= $i->tgl_izin;?></td>
                                            <td><?= $i->tgl_datang;?></td>
                                             <td><?= $i->alasan;?></td>
                                             <td>
                                            
                                                       <?php
                                                    if($i->keterangan !==''){?>
                                                        
                                                        <?= $i->keterangan;?>      
                                                 <?php }else{ ?>   

                                                 <?php echo "No File Uploaded"?>         
                                             <?php } ?>
                                                    </td>
                                                    
                                             <td><?= $i->status;?>
                                                 <br>
                                                 <?php
                                                    if($i->status =='Diizinkan'){?>
                                                         <a href="<?php echo base_url() ?>index.php/santri/Santri/suket/<?php echo $i->id_perizinan ?>" title="Cetak surat izin" data-toggle="tooltip" data-placement="top" data-original-title="Cetak Bukti Lunas">
                                                        <button type="button" class="btn-sx btn-info "><i class="la la-print color-success"></i>
                                                                 
                                                                  </button> 
                                             <?php } elseif($i->status =='Tidak diizinkan'){?>
                                                    &nbsp;
                                                        <a href="<?php echo base_url() ?>index.php/santri/Santri/editperizinan/<?php echo $i->id_perizinan ?>" title="Set ulang" data-toggle="tooltip" data-placement="top" data-original-title="Set ulang">

                                                         <button type="button" class="btn-sx btn-primary">
                                                            <i class="la la-rotate-right color-muted m-r-5"></i>
                                                        </button>
                                                        </a>
                                                        &nbsp;

                                            <?php } else{?>
                                                    
                                             <?php }?>
                                             </td>
                                                 <td>

                                                     <div class="btn-group mr-2 mb-2">
                                                       <a href="<?php echo base_url() ?>index.php/santri/Santri/editperizinan/<?php echo $i->id_perizinan ?>" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="la la-pencil color-muted m-r-5"></i>
                                                        </button>
                                                    </a>

                                                         &nbsp;
                                                          <a title="Hapus" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                        <button type="button" data-toggle="modal" data-target="#deletePaketModal<?=$i->id_perizinan;?>" class="btn btn-danger">
                                                            <i class="la la-trash color-danger"></i>
                                                        </button>
                                                            </a>
                                                         &nbsp;

                                                     </div>

                                                 </td>
                                             </tr>
                                             <?php
                                            $noUrut++;
                                            endforeach;
                                            ?>
                                         </tbody>
                            
                                     </table>

                                 </div>
                             </div>

                         </div>
                     </div>

                 </div>

                 

                 