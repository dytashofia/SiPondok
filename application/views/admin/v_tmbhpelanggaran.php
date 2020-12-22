<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Tambah Data Pelanggaran</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Tambah Data Pelanggaran
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
                            <h4 class="card-title">Tambah Data Pelanggaran</h4>
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

                    <?php echo form_open_multipart('index.php/admin/Admin/tambah_aksi_pelanggaran'); ?>    
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">ID Pelanggaran</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="id_pelanggaran" class="form-control" id="id_pelanggaran" value="<?php echo $id_pelanggaran; ?>" readonly> 
                                            </fieldset>

                                            <h5 class="mt-2">NIS : Nama Santri</h5>
                                            <fieldset class="form-group">
                                                <select name="NIS" id="NIS" class="custom-select">
                                                <option value=""> Pilih NIS : Nama </option>
                                                <?php
                                                    foreach ($santri as $detailSantri) :
                                                ?>
                                                    <option value="<?= $detailSantri->NIS; ?>"><?= $detailSantri->NIS; ?> : <?= $detailSantri->nama_santri; ?></option>
                                                <?php
                                                    endforeach;
                                                ?>
                                                </select>  
                                            </fieldset>

                                           <h5 class="mt-2">Jenis Pelanggaran</h5>
                                            <fieldset class="form-group<?= form_error('jenis_pelanggaran') ? 'has-error' : null; ?>">
                                                <input type="text" name="jenis_pelanggaran" class="form-control" id="jenis_pelanggaran" placeholder="Masukkan Jenis Pelanggaran">
                                                <?= form_error('jenis_pelanggaran', '<small class="text-form text-danger mt-2 ml-2">', '</small>'); ?> 
                                            </fieldset>

                                            <h5 class="mt-2">Tanggal Melanggar</h5>
                                            <fieldset class="form-group<? form_error('tgl') ? 'has-error' : null; ?>">
                                                <input type="date" data-format="dd-MM-yyyy" name="tgl" class="form-control" id="tgl">
                                                <?= form_error('tgl', '<small class="text-form text-danger mt-2 ml-2">', '</small>'); ?> 
                                            </fieldset>

                                           <h5 class="mt-2">Sanksi</h5>
                                            <fieldset class="form-group<?= form_error('sanksi') ? 'has-eror' : null; ?>">
                                                <input type="text" name="sanksi" class="form-control" id="sanksi" placeholder="Masukkan Sanksi">
                                                <?= form_error('sanksi', '<small class="text-form text-danger mt-2 ml-2">', '</small>'); ?> 
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
                                            <fieldset class="form-group<?= form_error('catatan') ? 'has-error' : null; ?>">
                                                <textarea class="form-control" name="catatan" id="catatan" rows="4" placeholder="Tambahkan Catatan" ></textarea>
                                            <?= form_error('catatan', '<small class="text-form text-danger mt-2 ml-2">', '</small>'); ?>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/admin/admin/pelanggaran"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                            <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button></a>

                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>

                <script
                    src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js">
                </script>


                <script type="text/javascript">
                    $(function() {
                        $("tgl").datepicker({
                            todayHighlight: true;
                            format : "dd-mm-yyyy";
                        });   
                    })
                </script>
            </div>
            <!-- Striped rows end -->
           
            
        </div>

    </div>
</div>