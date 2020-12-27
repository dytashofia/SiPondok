<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Data SET Khataman</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        
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
                            <h4 class="card-title">Tabel SET Khataman</h4>
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
                           

                                <button type="button" data-toggle="modal" data-target="#tambahModal" class="btn ff btn-primary btn-min-width mr-1 mb-1">
                                    <i class="ft-plus"></i>Tambah Bulan Khataman
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
                                            <th>BULAN KHATAMAN</th>
                                            <th>TANGGAL AWAL KHATAMAN</th>
                                            <th>TANGGAL AKHIR KHATAMAN</th>
                                            <th>DAFTAR SANTRI</th>
                                            <th>ACTION</th>
                                             </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $noUrut = 1;
                                            foreach($khatam as $k) :
                                        ?>
                                        <tr>
                                            <td><?= $noUrut;?></td>
                                            <td><?= $k->nama_bulan;?></td>
                                            <td> <?= $k->tgl_awal_bulan;?></td>
                                            <td><?= $k->tgl_akhir_bulan;?></td>
                                            <td><a href="<?php echo base_url(); ?>index.php/admin/admin/laporankhataman/<?= $k->id_khataman;?>"><button type="button" class="btn-sx btn-primary"><i class="la la-check-circle color-info"> </i> Cek</button></a></td>
                                            <td>


                                                <div class="btn-group mr-2 mb-2">
                                                    <a title="update bulan khataman" data-toggle="tooltip" data-placement="top" data-original-title="update bulan khataman">
                                                        <button type="button" data-toggle="modal" data-target="#updatemodal<?= $k->id_khataman?>" class="btn btn-primary">
                                                            <i class="la la-pencil color-muted m-r-5"></i>
                                                        </button>
                                                    </a>

                                                   &nbsp;
                                                    <a title="Hapus" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                        <button type="button" data-toggle="modal" data-target="#deletePaketModalsetkhatam<?= $k->id_khataman?>" class="btn btn-danger">
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
            <!-- Striped rows end -->
        </div>
    </div>
</div>

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
                                     <h4 class="text-center" style="color: white; font-weight:bold; "> TAMBAH BULAN KHATAMAN</h4>
                                     
                                 </li>
                             </ul>

                             
                     </div>
                    <form method="post" action="<?php echo base_url() ?>index.php/admin/Admin/aksiTambahkhatam">
                    <div class="modal-body">
                                            
                                                <input type="hidden" name="id_khataman" id="id_khataman" class="form-control" value="<?= $id_khataman;?>" readonly>

                                            <h5 class="mt-2">Bulan Khataman </h5>
                                            <select class="form-control" name="bulan_khataman" id="bulan_khataman">
    
                                                       <option>Muharam</option>
                                                       <option>Safar</option>
                                                       <option>Rabi'ul_Awal</option>
                                                       <option>Rabi'ul_Akhir</option>
                                                       <option>Jumadil_Awal</option>
                                                       <option >Jumadil_Akhir</option>
                                                        <option>Rajab</option>
                                                        <option>Syaaban</option>
                                                        <option>Ramadhan</option>
                                                        <option>Syawal</option>
                                                        <option>Dzulkaidah</option>
                                                        <option>Zulhijjah</option>

                                                </select>

                                            <h5 class="mt-2">Tanggal Awal Khataman</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_awal_bulan" id="tgl_awal_bulan" required >
                                            </fieldset>

                                            <h5 class="mt-2">Tanggal Akhir Khataman</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_akhir_bulan" id="tgl_akhir_bulan" required>
                                            </fieldset>

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


<?php
        foreach($khatam as $k) :    
    ?>
        <!--  delete Modal -->
        <div class="modal fade" id="deletePaketModalsetkhatam<?= $k->id_khataman?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="deletePaketModalTitle">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deletePaketModalTitle">Hapus bulan khataman</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-justify">Apakah anda yakin akan menghapus data ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-secondary" type="button" data-dismiss="modal"> Batal </button>
                        <a href="<?php echo base_url() ?>index.php/admin/Admin/hapussetkhatam/<?php echo $k->id_khataman ?>" role="button" class="btn btn-success"> Ya </a>
                    </div>
                </div>
            </div>
        </div>

        <?php
        endforeach;
    ?>


<!--  Update Modal -->
        <?php
                                          
                                            foreach($khatam as $k) :
                                        ?>
        <div class="modal fade" id="updatemodal<?= $k->id_khataman?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="konfirmasiModalTitle">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="konfirmasiModalTitle">SET KHATAMAN</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="<?php echo base_url() ?>index.php/admin/Admin/updatesetkhatam/<?php echo $k->id_khataman?>">
                    <div class="modal-body">
                        
                        <input type="hidden" name="id_khataman" id="id_khataman" class="form-control" value="<?php echo $k->id_khataman;?>" readonly>

                                            <h5 class="mt-2">Bulan Khataman </h5>
                                            <select class="form-control" name="bulan_khataman" id="bulan_khataman">
    
                                                       <option>Muharam</option>
                                                       <option>Safar</option>
                                                       <option>Rabi'ul_Awal</option>
                                                       <option>Rabi'ul_Akhir</option>
                                                       <option>Jumadil_Awal</option>
                                                       <option >Jumadil_Akhir</option>
                                                        <option>Rajab</option>
                                                        <option>Syaaban</option>
                                                        <option>Ramadhan</option>
                                                        <option>Syawal</option>
                                                        <option>Dzulkaidah</option>
                                                        <option>Zulhijjah</option>

                                                </select>

                                            <h5 class="mt-2">Tanggal Awal Khataman</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_awal_bulan" id="tgl_awal_bulan" value="<?php echo $k->tgl_awal_bulan;?>" >
                                            </fieldset>

                                            <h5 class="mt-2">Tanggal Akhir Khataman</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_akhir_bulan" id="tgl_akhir_bulan" value="<?php echo $k->tgl_akhir_bulan;?>" required>
                                            </fieldset>

                        </h5>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    <?php
        endforeach;
    ?>

