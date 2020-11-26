<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
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
                            <h4 class="card-title">Tambah Jenis Pembayaran</h4>
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
                        <?php echo form_open_multipart('index.php/admin/Admin/aksitmbhsetbayar');?>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">ID</h5>
                            <fieldset class="form-group">
                            <input type="text" name="id_setbayar" class="form-control" id="id_setbayar" value="<?= $id_setbayar;?>" readonly>
                            </fieldset>
                        <h5 class="mt-2">Jenis Pembayaran</h5>
                        <fieldset class="form-group">
                        <fieldset class="form-group">
                                                <select class="form-control" name="jenis_pembayaran" id="jenis_pembayaran">
                                                    <option>SPP</option>
                                                    <option>PHBI</option>
                                                </select>
                                            </fieldset>
                        </fieldset>
                        <input type="hidden" name="jumlah_bayar" class="form-control" id="jumlah_bayar">
                        <input type="hidden" name="tanggal_awal" class="form-control" id="tanggal_awal">
                       
                        <input type="hidden" name="tanggal_akhir" class="form-control" id="tanggal_akhir">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/admin/admin/settingbayar"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
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