<div style="margin-left:0;" class="app-content content">
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
                    width: 100%;

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

            <div class="row">
                <div class="col-xl-12 col-lg-6 col-md-12">
                    <div class="card" style="margin-bottom:-11px; ">
                        <div class="card-header " style="  background: linear-gradient(to right, #00cef9, #00e6af);">
                            <ul class="list-inline kl ">
                                <li></li>
                                <li class="tb">
                                    <h4 class="pp  text-center">Pendaftaran Santri</h4>
                                </li>
                                </span>
                            </ul>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">

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

                        <div class="row match-height">

                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">

                                        <div class="card-body">
                                            Download &nbsp; <a href="<?php echo base_url('assets/berkasSantri/Surat_Pernyataan.pdf')?>"><button type="button" style="width: 50px;" class="btn-sm btn-primary btn-min-width ff mr-1 mt-1 mb-1">Surat Pernyataan</button></a>
                                            <?php echo form_open_multipart('index.php/santri/Daftar/index'); ?>

                                            <h5 class="mt-2">NIS</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="NIS" id="NIS" value="<?= $id_s; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Lengkap</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama" id="nama">
                                                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Jenis Kelamin</h5>
                                            <select name="jk" id="jk" class="custom-select">
                                                    <option>Select Option</option>
                                                    <option>Laki-Laki</option>
                                                    <option>Perempuan</option>
                                            </select>
                                                <?= form_error('jk', '<small class="text-danger">', '</small>'); ?>

                                            <h5 class="mt-2">Tanggal Lahir</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="ttl" id="ttl">
                                                <?= form_error('ttl', '<small class="text-form text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Alamat Asal</h5>
                                            <fieldset class="form-group">
                                            <textarea class="form-control" name="almt" id="almt"> </textarea>
                                                <?= form_error('almt', '<small class="text-form text-danger">', '</small>'); ?>
                                            </fieldset>
                                            <br>
                                            <h4 class="card-title">Pendidikan yang di tempuh</h4>

                                            <h5 class="mt-2">D3/D4/S1/S2/S3</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="pdd" id="pdd">
                                                <?= form_error('pdd', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Instansi</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="univ" id="univ">
                                                <?= form_error('univ', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Jurusan/Prodi/Fakultas</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="jur" id="jur">
                                                <?= form_error('jur', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">NIM/NIS</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nim" id="nim">
                                                <?= form_error('nim', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">No. Telepon/HP</h5>
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
                                            <h5 class="mt-2">Nama Ayah</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="ayah" id="ayah">
                                                <?= form_error('ayah', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Ibu</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="ibu" id="ibu">
                                                <?= form_error('ibu', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Wali</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="wali" id="wali">
                                            </fieldset>

                                            <h5 class="mt-2">No. Telepon/HP Wali Santri</h5>
                                            <fieldset class="form-group">
                                                <input type="number" class="form-control" name="nohpwali" id="nohpwali">
                                                <?= form_error('nohpwali', '<small class="text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Username</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="username" id="username">
                                                <?= form_error('username', '<small class="text-form text-danger">', '</small>'); ?>
                                            </fieldset>
                
                                            <h5 class="mt-2">Password</h5>
                                            <fieldset class="form-group">
                                                <input type="password" class="form-control" name="psw" id="psw">
                                                <?= form_error('psw', '<small class="text-form text-danger">', '</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Upload Foto 3x4</h5>
                                            <fieldset class="form-group">
                                                <input type="file" class="form-control" name="fto" id="fto" required>
                                            </fieldset>

                                            <h5 class="mt-2">Surat Pernyataan</h5>
                                            <fieldset class="form-group">
                                                <input type="file" class="form-control" name="pernyataan" id="pernyataan" required>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/santri/login"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                            <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button></a>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>


        </div>
    </div>