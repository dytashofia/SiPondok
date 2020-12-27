<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Tambah Data Artikel</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Tambah Data Artikel
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
                            <h4 class="card-title">Tambah Data Artikel</h4>
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

                        <?php echo form_open_multipart('index.php/admin/artikel/aksiTambahartikel'); ?>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">ID Artikel</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="id_artikel" id="id_artikel" value="<?= $id_artikel; ?>" class="form-control" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Admin</h5>
                                            <fieldset class="form-group<?= form_error('id_admin') ? 'has-error' : null ?>">
                                                <select name="id_admin" id="id_admin" class="custom-select">
                                                    <option value=""> Pilih Admin </option>
                                                    <?php
                                                    foreach ($admin as $detailAdmin) :
                                                    ?>
                                                        <option value="<?= $detailAdmin->id_admin; ?>"><?= $detailAdmin->nama_admin; ?></option>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </select>
                                                <?= form_error('id_admin', '<small class="text-form text-danger mt-2 ml-2">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Gambar</h5>
                                            <fieldset class="form-group">
                                                <input type="file" name="gambar" class="form-control">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">Tanggal Artikel</h5>
                                            <fieldset class="form-group">
                                                <input type="date" name="tgl" id="tgl" class="form-control" placeholder="Masukkan tgl Produk...">
                                            </fieldset>
                                            <h5 class="mt-2">Deskripsi</h5>
                                            <fieldset class="form-group<?= form_error('deskripsi') ? 'has-error' : null ?>">
                                                <textarea style="height: 200px;" class="form-control" name="deskripsi" id="deskripsi" rows="5"><?= set_value('deskripsi'); ?></textarea>
                                                <?= form_error('deskripsi', '<small class="text-form text-danger mt-2 ml-2">', '</small>'); ?>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/admin/artikel/artikel"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                            <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button></a>

                        </div>




                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>