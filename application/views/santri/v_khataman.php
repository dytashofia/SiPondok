
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">KHATAMAN</h3>
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
                            <h4 class="card-title">KHATAMAN SANTRI</h4>
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
                                            <th>KHATAMAN HARIAN</th>
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
                                            <td><button type="button" data-toggle="modal" data-target="#tambahModal<?=$k->id_khataman;?>" class="btn ff btn-primary ">
                                    <i class="ft-plus"></i>Tambah Khataman
                                                        </button> </td>
                                            <td>
                                                <div class="btn-group mr-2 mb-2">
                                                     <a href="<?php echo base_url() ?>index.php/santri/Santri/detailkhataman/<?php echo $k->id_khataman?>" title="Cek" data-toggle="tooltip" data-placement="top" data-original-title="Cek">
                                                        <button type="button" class="btn-sx btn-info">
                                                            <i class="la la-eye color-success"></i>
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
                                            
                                            foreach($khatam as $k) :
                                        ?>

  <!-- modal tambah izin -->
  <div class="modal fade" id="tambahModal<?=$k->id_khataman;?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="konfirmasiModalTitle">
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
                    <form method="post" action="<?php echo base_url() ?>index.php/santri/Santri/tambahkhataman">
                    <div class="modal-body">
                                            
                                                <input type="hidden" name="id_khataman" id="id_khataman" class="form-control" value="<?=$k->id_khataman;?>" readonly>
                                            
                                            <fieldset class="form-group">
                                                <input type="hidden" class="form-control" name="NIS" id="NIS" value="<?php echo ucfirst($this->session->userdata('NIS'));?>" required readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Bulan Khataman </h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_bulan" id="nama_bulan" value="<?= $k->nama_bulan;?>"required readonly>
                                            </fieldset>
                                            <h5 class="mt-2">Tanggal Khatam</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_juz" id="tgl_juz" required >
                                            </fieldset>

                                            <h5 class="mt-2">Juz</h5>
                                            <fieldset class="form-group">
                                                <fieldset class="form-group<?=form_error('id_juz') ? 'has-error' : null?>">
                                                <select name="id_juz" id="id_juz" class="custom-select">
                                                <option value=""> Pilih Juz </option>
                                                <?php
                                                    foreach ($juz as $j) :
                                                ?>
                                                    <option value="<?= $j->id_juz; ?>"><?= $j->nama_juz; ?></option>
                                                <?php
                                                    endforeach;
                                                ?>
                                                </select>
                                                <?= form_error('id_juz', '<small class="text-form text-danger mt-2 ml-2">', '</small>'); ?>
                                            </fieldset>

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
                                           
                                            endforeach;
                                            ?>
