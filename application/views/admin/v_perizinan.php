 
 <div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Data Perizinan</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Data Perizinan
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Striped rows start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tabel Data Perizinan</h4>
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
                                <a href="<?php echo base_url(); ?>index.php/admin/admin/tmbhperizinan"><button type="button" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="ft-plus"> </i> Tambah Data</button></a>
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
                                              <th>KONFIRMASI</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
                                                <br>
                                                <?php
                                                    if($i->keterangan !==''){?>
                                                         <a title="Cek" data-toggle="tooltip" data-placement="top" data-original-title="Cek">
                                                        <button type="button" data-toggle="modal" data-target="#cekketerangan<?=$i->id_perizinan;?>" class="btn-sx btn-info center-block"><i class="la la-eye color-success"></i>
                                                                 
                                                                  </button> 
                                             <?php } ?>
                                                    </td>
                                            <td><?= $i->status;?></td>
                                             
                                             <td> 
                                                        <button type="button" data-toggle="modal" data-target="#konfirmasiModal<?=$i->id_perizinan;?>" class="btn btn-success">
                                                            <i class="la la-check-circle color-success"></i>
                                                        </button> 
                                                </td>

                                            <td>

                                                <div class="btn-group mr-2 mb-2">
                                                    <a href="<?php echo base_url() ?>index.php/admin/Admin/editperizinan/<?php echo $i->id_perizinan ?>" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
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
                                                    <a href="<?php echo base_url() ?>index.php/admin/Admin/detail/<?php echo $i->id_perizinan ?>" title="Detail" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                        <button type="button" class="btn btn-warning">
                                                            <i class="la la-exclamation-circle color-danger"></i>
                                                        </button>
                                                    </a>

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
            <!-- Striped rows end -->
        </div>
    </div>
</div>

 <?php
        foreach($izin as $row) :    
    ?>
        <!--  delete Modal -->
        <div class="modal fade" id="deletePaketModal<?= $row->id_perizinan?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="deletePaketModalTitle">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deletePaketModalTitle">Hapus Izin</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-justify">Apakah anda yakin akan menghapus data Izin dengan ID<em><strong> <?= $row->id_perizinan;?></strong></em></h5>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-secondary" type="button" data-dismiss="modal"> Batal </button>
                        <a href="<?php echo base_url() ?>index.php/admin/Admin/hapusperizinan/<?php echo $row->id_perizinan ?>" role="button" class="btn btn-success"> Ya </a>
                    </div>
                </div>
            </div>
        </div>

    <?php
        endforeach;
    ?>

<!--  Konfirmasi Modal -->

<?php
        foreach($izin as $i) :    
    ?>
        

        
        <div class="modal fade" id="konfirmasiModal<?= $i->id_perizinan?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="konfirmasiModalTitle">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="konfirmasiModalTitle">Konfirmasi Izin</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="<?php echo base_url() ?>index.php/admin/Admin/updateperizinan/<?php echo $i->id_perizinan ?>">
                    <div class="modal-body">
                        
                        <h5 class="text-justify"> Apakah santri diberi izin?
                        <input type="hidden" name="id_perizinan" id="id_perizinan" value="<?php echo $i->id_perizinan;?>">
                        <input type="hidden" name="NIS" id="NIS" value="<?= $i->NIS;?>">
                        <input type="hidden" name="tgl_izin" id="tgl_izin" value="<?php echo $i->tgl_izin;?>">
                        <input type="hidden" name="tgl_datang" id="tgl_datang" value="<?php echo $i->tgl_datang;?>">
                        <input type="hidden" name="alasan" id="alasan" value="<?php echo $i->alasan;?>">
                        <input type="hidden" name="keterangan" id="keterangan" value="<?php echo $i->keterangan;?>">
                        <select name="status" id="status" >
                            <option>Diizinkan</option>
                            <option>Tidak diizinkan</option>
                        </select>

                        </h5>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">Konfirmasi</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    <?php
        endforeach;
    ?>


    <!--  tampil keterangan -->

<?php
        foreach($izin as $i) :    
    ?>
        

        
        <div class="modal fade" id="cekketerangan<?= $i->id_perizinan?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="konfirmasiModalTitle">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="konfirmasiModalTitle"><?php echo $i->keterangan;?></h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="<?php echo base_url() ?>index.php/admin/Admin/updateperizinan/<?php echo $i->id_perizinan ?>">
                    <div class="modal-body">
                        
                        <h5 class="text-justify"> 
                                    <?php
                                                    if($i->keterangan==''){?>
                                                                 <img src="<?php echo base_url('assets/file_izin/nofile.png')?>" width="360" height="390"><br>
                                             <?php }else{ ?>
 
                                                <embed  src="<?php echo base_url('assets/file_izin/'.$i->keterangan)?>" width="470" height="450"></embed><br>
                                            <?php }?> 
                        </h5>
                    </div>
                    <div class="modal-footer">
                         <a href="<?php echo base_url(); ?>index.php/admin/Admin/downloadketeranganizin/<?php echo $i->id_perizinan;?>">
                        <button type="button" class="btn btn-primary">Download</button></a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    <?php
        endforeach;
    ?>