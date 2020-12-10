<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Detail Data Pelanggaran</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Detail Data Pelanggaran
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
                            <h4 class="card-title">Detail Data Pelanggaran</h4>
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

                        <?php foreach($tb_pelanggaran as $pelanggaran) { ?>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">ID Pelanggaran</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="id_pelanggaran" id="id_pelanggaran" value="<?= $pelanggaran->id_pelanggaran; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NIS</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="NIS" id="NIS" value="<?= $pelanggaran->NIS; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Santri</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_santri" id="nama_santri" value="<?= $pelanggaran->nama_santri; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Pelanggaran</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="jenis_pelanggaran" id="jenis_pelanggaran" value="<?= $pelanggaran->jenis_pelanggaran; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Tanggal Melanggar</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl" id="tgl" value="<?= $pelanggaran->tgl; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Sanksi</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="sanksi" id="sanksi" value="<?= $pelanggaran->sanksi; ?>" readonly>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                                                                    
                                            <h5 class="mt-2">Catatan</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="catatan" id="catatan" value="<?= $pelanggaran->catatan; ?>" readonly>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url('index.php/admin/Admin/admin'); ?>" type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>