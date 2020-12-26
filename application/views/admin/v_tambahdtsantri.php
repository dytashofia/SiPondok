<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Tambah Data Santri</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Tambah Data Santri
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
                            <h4 class="card-title">Tambah Data Santri</h4>
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
                        <?php echo form_open_multipart('index.php/admin/Data_santri/tambah'); ?>

                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">NIS</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="NIS" id="NIS" value="<?= $id_s; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NAMA SANTRI</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama" id="nama">
                                                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">JENIS KELAMIN</h5>
                                            <select name="jk" id="jk" class="custom-select">
                                                <option value="" selected>--Pilih--</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <?= form_error('jk', '<small class="text-danger">', '</small>'); ?>

                                            <h5 class="mt-2">TEMPAT TANGGAL LAHIR</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="ttl" id="ttl">
                                                <?= form_error('ttl', '<small class="text-form text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">ALAMAT</h5>
                                            <fieldset class="form-group">
                                                <textarea class="form-control" name="almt" id="almt"> </textarea>
                                                <?= form_error('almt', '<small class="text-form text-danger">', '</small>'); ?>
                                            </fieldset>


                                            <h5 class="mt-2">PENDIDIKAN</h5>
                                            <select name="pdd" id="pdd" class="custom-select">
                                                <option value="" selected>--Pilih--</option>
                                                <option value="SMA/SMK">SMA/SMK</option>
                                                <option value="Kuliah">Kuliah</option>
                                            </select>
                                            <?= form_error('pdd', '<small class="text-danger">', '</small>'); ?>

                                            <h5 class="mt-2">NIM/NIS</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nim" id="nim">
                                                <?= form_error('nim', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">JURUSAN</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="jur" id="jur">
                                                <?= form_error('jur', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">NAMA INSTITUSI</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="univ" id="univ">
                                                <?= form_error('univ', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">NO HP</h5>
                                            <fieldset class="form-group">
                                                <input type="number" class="form-control" name="nohp" id="nohp">
                                                <?= form_error('nohp', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">

                                            <h5 class="mt-2">FOTO SANTRI</h5>
                                            <fieldset class="form-group">
                                                <input type="file" class="form-control" name="fto" id="fto" required>
                                            </fieldset>
                
                                            <h5 class="mt-2">USERNAME</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="username" id="username">
                                                <?= form_error('username', '<small class="text-form text-danger">', '</small>'); ?>
                                            </fieldset>
                
                                            <h5 class="mt-2">PASSWORD</h5>
                                            <fieldset class="form-group">
                                                <input type="password" class="form-control" name="psw" id="psw">
                                                <?= form_error('psw', '<small class="text-form text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">NAMA AYAH</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="ayah" id="ayah">
                                                <?= form_error('ayah', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">NAMA IBU</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="ibu" id="ibu">
                                                <?= form_error('ibu', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">NAMA WALI</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="wali" id="wali">
                                            </fieldset>

                                            <h5 class="mt-2">NO HP ORANG TUA/WALI</h5>
                                            <fieldset class="form-group">
                                                <input type="number" class="form-control" name="nohpwali" id="nohpwali">
                                                <?= form_error('nohpwali', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Bukti Pembayaran</h5>
                                            <fieldset class="form-group">
                                                <input type="file" class="form-control" name="bukti_pembayaran" id="bukti_pembayaran" required>
                                            </fieldset>

                                            <h5 class="mt-2">Surat Pernyataan</h5>
                                            <fieldset class="form-group">
                                                <input type="file" class="form-control" name="pernyataan" id="pernyataan" required>
                                            </fieldset>
                                            <!-- <fieldset class="form-group">
                                                <input type="" class="form-control" name="status" id="status" value="Belum dikonfirmasi">
                                            </fieldset> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="text-align:right; padding-right:10px;">
                        <!-- Buttons with Icon -->
                        <a href="<?php echo base_url(); ?>index.php/admin/admin/pembayaran"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                        <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button></a>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <!-- Striped rows end -->
    </div>
</div>
</div>