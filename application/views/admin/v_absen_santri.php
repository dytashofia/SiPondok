<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Absen Santri</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Absen Santri
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
                            <h4 class="card-title">Absen Santri</h4>
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

                        <?php echo form_open_multipart('index.php/admin/Admin/aksi_absen_diniyah'); ?>
                        <?php foreach ($absen_santri as $absen) { ?>
                        <div class="row match-height">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">ID Diniyah</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="id_diniyah" id="id_diniyah" value="<?= $absen->id_diniyah; ?>" class="form-control" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Santri</h5>
                                            <fieldset class="form-group<?= form_error('NIS') ? 'has-error' : null ?>">
                                                <select name="NIS" id="NIS" class="custom-select">
                                                    <option value="">Nama Santri</option>
                                                    <?php
                                                    foreach ($tb_santri as $santri) :
                                                    ?>
                                                        <option value="<?= $santri->NIS; ?>"><?= $santri->nama_santri; ?></option>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </select>
                                                <?= form_error('id_mapel', '<small class="text-form text-danger mt-2 ml-2">', '</small>'); ?>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/admin/Admin/diniyah"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                            <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button></a>
                        </div>

                         <?= form_close(); ?>    
                                                 



                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>