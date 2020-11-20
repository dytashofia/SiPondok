<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Detail Data Pembayaran</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Detail Data pembayaran
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
                            foreach($detailbayar as $b) :
                        ?>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                           <h5 class="mt-2">ID PEMBAYARAN </h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="id_pembayaran" id="id_pembyaran" value="<?= $b->id_pembayaran;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NIS SANTRI</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="NIS" id="NIS" value="<?= $b->NIS;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NAMA PEMABAYAR</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_pembayar" id="nama_pembayar" value="<?= $b->nama_pembayar;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NOMER YANG BISA DIHUBUNGI</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $b->no_hp;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">JENIS PEMABAYARAN</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="jenis_pembayaran" id="jenis_pembayaran" value="<?= $b->jenis_pembayaran;?>" readonly>
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