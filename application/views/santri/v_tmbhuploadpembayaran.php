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
                     color: white;
                 }

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
            
        <div class="content-body">
            <!-- Striped rows start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data Pembayaran</h4>
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
                        <?php echo form_open_multipart('santri/Santri/aksiTambahuploadpembayaran');?>
                       
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">ID PEMBAYARAN </h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="id_pembayaran" id="id_pembayaran" value="<?= $id_pembayaran;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NAMA SANTRI</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_santri" id="nama_santri" value="<?php echo ucfirst($this->session->userdata('nama_santri'));?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">JENIS PEMBAYARAN</h5>
                                            <fieldset class="form-group">
                            
                                                  <?php
                                                    foreach ($detail as $d) :
                                                ?>
                                                    <input type="text" class="form-control" name="jenis pembayaran" id="jenis pembayaran" value="<?= $d->jenis_pembayaran;?>" readonly>
                                                <?php
                                                    endforeach;
                                                ?>
                                                
                                            </fieldset>

                                            <h5 class="mt-2">JUMLAH BAYAR</h5>
                                            <fieldset class="form-group">
                            
                                                  <?php
                                                    foreach ($detail as $d) :
                                                ?>
                                                    <input type="text" class="form-control" name="jumlah pembayaran" id="jumlah pembayaran" value="<?= $d->jumlah_bayar;?>" readonly>
                                                <?php
                                                    endforeach;
                                                ?>
                                                
                                            </fieldset>

                                            <fieldset class="form-group">
                                            <?php
                                                    foreach ($detail as $d) :
                                                ?>
                                                <input type="hidden" class="form-control" name="id_setbayar" id="id_setbayar" value="<?= $d->id_setbayar;?>">
                                                <?php
                                                    endforeach;
                                                ?>
                                            </fieldset>

                                            <fieldset class="form-group">
                                                <input type="hidden" class="form-control" name="NIS" id="NIS" value="<?php echo ucfirst($this->session->userdata('NIS'));?>">
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">

                                            <h5 class="mt-2">NAMA PEMBAYAR</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_pembayar" id="nama_pembayar">
                                            </fieldset>

                                            <h5 class="mt-2">TANGGAL PEMBAYARAN</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_pembayaran" id="tgl_pembayaran">
                                            </fieldset>

                                            <h5 class="mt-2">Upload Bukti Transfer</h5>
                                            <fieldset class="form-group">
                                                <input type="file" class="form-control" name="bukti_pembayaran" id="bukti_pembayaran">
                                            </fieldset>

                                            
                                            <fieldset class="form-group">
                                                <input type="hidden" class="form-control" name="status" id="status" value="Menunggu konfirmasi">
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url('santri/Santri/infopembayaran');?>"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                            <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button></a>

                        </div>

                            
                    <?php echo form_close();?>



                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>