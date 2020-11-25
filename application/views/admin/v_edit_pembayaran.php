<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Edit Data Pembayaran</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Data Pembayaran
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
                      <?php echo form_open_multipart('index.php/admin/Admin/updatepembayaran/');?>
                      <?php
                            foreach($editbayar as $b) :
                        ?>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">ID</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="id_pembayaran" id="id_pembayaran" class="form-control" value="<?= $b->id_pembayaran;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NIS</h5>
                                            <fieldset class="form-group">
                                                <input type="text"  class="form-control" name="NIS" value="<?= $b->NIS;?>" id="NIS" readonly>
                                            </fieldset>

                                            <!-- <h5 class="mt-2">Nama Santri </h5> -->
                                            <!-- <fieldset class="form-group"> -->
                                                <!-- <input type="text" class="form-control" id="basicInput" > -->
                                            <!-- </fieldset> -->

                                            <h5 class="mt-2">Nama Pembayar</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_pembayar" id="nama_pembayar" value="<?= $b->nama_pembayar;?>" >
                                            </fieldset>

                                            <h5 class="mt-2">Jenis Pembayaran</h5>
                                            <fieldset class="form-group">
                                                <select class="form-control" name="jenis_pembayaran" id="jenis_pembayaran">
                                                    <?php
                                                    if($b->jenis_pembayaran=="SPP"){

                                                       ?>     
                                                       <option value="SPP" selected>SPP</option>
                                                            <option value="PHBI">PHBI</option>
                                                    <?php
                                                    }else{
                                                        ?> 
                                                        <option value="PHBI" selected>PHBI</option>
                                                         <option value="SPP">SPP</option>
                                                            

                                                            <?php
                                                    }
                                                    ?>
                                                </select>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">

                                            <h5 class="mt-2">Tanggal Pembayaran</h5>
                                            <fieldset class="form-group">
                                                <textarea class="form-control" name="tgl_pembayaran" id="tgl_pembayaran" rows="4"><?= $b->tgl_pembayaran;?></textarea>
                                            </fieldset>
                                            <h5 class="mt-2">Edit Bukti Pembayaran Jika diperlukan</h5>
                                            <?php
                                                    if($b->bukti_pembayaran ==''){?>
                                                                 <img src="<?php echo base_url('assets/img/pembayaran/nofile.png')?>" width="120" height="120"><br>
                                             <?php }else{ ?>
 
                                                <embed  src="<?php echo base_url('assets/img/pembayaran/'.$b->bukti_pembayaran)?>" width="120" height="120"></embed><br>
                                            <?php }?> 
                                            <fieldset class="form-group">
                                            <div>
                                                 <?php echo $b->bukti_pembayaran; ?>
                                                    
                                            </div>
                                          
                                                <input type="file" class="form-control" name="bukti_pembayaran" id="bukti_pembayaran" value="<?= $b->bukti_pembayaran;?>">
                                            </fieldset>

                                            <fieldset class="form-group">
                                                <input type="hidden" name="status" id="status" class="form-control" value="<?= $b->status;?>" readonly>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/admin/admin/pembayaran"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                            <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button>

                        </div>
                            <?php
                                    endforeach;
                         ?>
                    <?php echo form_close();?>

                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>