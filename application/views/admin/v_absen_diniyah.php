<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Absen Diniyah</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Absen Diniyah
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
                            <h4 class="card-title">Absen Diniyah</h4>
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

                        <?php foreach($tb_absen_diniyah as $absen) { ?>
                        <div class="row match-height">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">ID Diniyah</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="id_diniyah" id="id_diniyah" value="<?= $absen->id_diniyah; ?>" class="form-control" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Tanggal Diniyah</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_diniyah" id="tgl_diniyah" value="<?= $absen->tgl_diniyah; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Mapel</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="nama_mapel" id="nama_mapel" value="<?= $absen->nama_mapel; ?>" class="form-control" readonly>
                                            </fieldset>
                                            
                                            <h5 class="mt-2">Pengajar</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="nama_ustad" id="nama_ustad" value="<?= $absen->nama_ustad; ?>" class="form-control" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Total Santri Ikut Diniyah</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="nama_mapel" id="nama_mapel" value="" class="form-control" readonly>
                                            </fieldset>

                                            
                               
                           
                                            <h5 class="mt-2">Tambahkan Nama Santri</h5>
                                            <fieldset class="form-group">
                                                <a href="<?php echo base_url('index.php/admin/Admin/tambah_absen_diniyah/') ?>" title="Tambah Santri" onclick="return" data-toggle="tooltip" data-placement="top" data-original-title="Tambah Santri">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="la la-plus color-muted m-r-5"></i>
                                                        </button>
                                                </a>
                                            </fieldset>
                                

                                        <div class="form-group" style="text-align:right; padding-right:10px;">
                                            <!-- Buttons with Icon -->
                                            <a href="<?php echo base_url(); ?>index.php/admin/Admin/diniyah"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                                            <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button></a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        

                      
                                                 



                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>