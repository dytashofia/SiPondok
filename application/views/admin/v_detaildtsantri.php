<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Detail Data Santri</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Detail Data Santri
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
                      <?php
                            foreach($detailsantri as $ds) :
                        ?>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                           <h5 class="mt-2">NIS </h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="NIS" id="NIS" value="<?= $ds->NIS?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NAMA SANTRI</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_santri" id="nama_santri" value="<?= $ds->nama_santri;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">JENIS KKELAMIN</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="jk" id="jk" value="<?= $ds->jk;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">TEMPAT TANGGAL LAHIR</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="ttl" id="ttl" value="<?= $ds->ttl;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">ALAMAT</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $ds->alamat;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">PENDIDIKAN</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="pendidikan" id="pendidikan" value="<?= $ds->pendidikan;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">JURUSAN</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?= $ds->jurusan;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">nim</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nim" id="nim" value="<?= $ds->nim;?>" readonly>
                                            </fieldset>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">

                                                <h5 class="mt-2">TANGGAL PEMBAYARAN</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_pembayaran" id="tgl_pembayaran" value="<?= $b->tgl_pembayaran;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Bukti Pembayaran</h5>
                                            <?php
                                                    if($b->bukti_pembayaran==''){?>
                                                                 <img src="<?php echo base_url('assets/img/pembayaran/nofile.png')?>" width="120" height="120"><br>
                                             <?php }else{ ?>
 
                                                <embed  src="<?php echo base_url('assets/img/pembayaran/'.$b->bukti_pembayaran)?>" width="120" height="120"></embed><br>
                                            <?php }?> 
                                            <fieldset class="form-group">
                                            <div>
                                                 <?php echo $b->bukti_pembayaran; ?>
                                                    
                                            </div>
                                            </fieldset>
                                            

                                            
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="status" id="status" value="Belum dikonfirmasi" value="<?= $b->status;?>" readonly>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/admin/admin/pembayaran"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                        </div>
                            <?php
                                    endforeach;
                         ?>

                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>