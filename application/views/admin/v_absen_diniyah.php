<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Absen Daftar Santri</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Absen Daftar Santri
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
                            <h4 class="card-title">Absen Daftar Santri</h4>
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

                        <!-- <?php echo form_open_multipart('index.php/admin/artikel/aksiTambahartikel'); ?> -->
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div style="margin-bottom: 0;" class="card">
                                    <div class="card-block">
                                        <div style="padding-bottom: 0; padding-top: 0;" class="card-body">
                                            <h5 class="mt-2">ID Diniyah</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="id_diniyah" id="id_diniyah" value="#" class="form-control" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Mapel</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="mapel" id="mapel" value="" class="form-control">
                                            </fieldset>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div style="margin-bottom: 0;" class="card">
                                    <div class="card-block">
                                        <div style="padding-bottom: 0; padding-top: 0;" class="card-body">

                                            <h5 class="mt-2">Tanggal Diniyah</h5>
                                            <fieldset class="form-group">
                                                <input type="date" name="tgl_diniyah" id="tgl_diniyah" value="" class="form-control">
                                            </fieldset>

                                            <h5 class="mt-2">Total Santri</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="total" id="total" value="" class="form-control">
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div style="margin-bottom: 0;" class="card">
                                    <div class="card-block">
                                        <div style="padding-bottom: 0; padding-top: 0;" class="card-body">

                                            <h5 class="mt-2">Nama Santri</h5>
                                            <fieldset class="form-group<?= form_error('NIS') ? 'has-error' : null ?>">
                                                <select name="NIS" id="NIS" class="custom-select">
                                                    <option value=""> Pilih Santri </option>
                                                    <?php
                                                    foreach ($tb_santri as $santri) :
                                                    ?>
                                                        <option value="<?= $santri->NIS; ?>"><?= $santri->nama_santri; ?></option>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </select>
                                                <?= form_error('NIS', '<small class="text-form text-danger mt-2 ml-2">', '</small>'); ?>
                                            </fieldset>

                                            <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1 col-lg-12 col-md-12"><i class="ft-plus"></i> Tambah </button>

                                            <div class="table-responsive">


                                                <table class="table table-striped table-bordered zero-configuration">
                                                    <style>
                                                        .dataTables_filter {
                                                            text-align: right;
                                                        }

                                                        .dataTables_filter label {
                                                            text-align: left;
                                                        }

                                                        .dataTables_paginate ul {
                                                            position: absolute;
                                                            right: 0;
                                                            padding-right: 1rem;
                                                        }

                                                        .dataTables_info {
                                                            padding-top: 15px;
                                                            padding-bottom: 50px;
                                                        }
                                                    </style>
                                                    <thead>
                                                        <tr>
                                                            <th>NO</th>
                                                            <th>NAMA SANTRI</th>
                                                            <th>RINGKASAN MATERI</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no_urut = 1;
                                                        // foreach ($tb_diniyah as $diniyah) :
                                                        ?>
                                                        <tr>
                                                            <td><?= $no_urut; ?></td>
                                                            <td>Nama Santri</td>
                                                            <td>
                                                                <a href="<?php echo base_url(); ?>index.php/admin/admin/absen_diniyah" title="Lihat Ringkasan Materi" onclick="return" data-toggle="tooltip" data-placement="top" data-original-title="Lihat Ringkasan Materi">
                                                                    <button type="button" class="btn btn-primary">
                                                                        <i class="la la-eye color-muted m-r-5"></i>
                                                                    </button>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo base_url(); ?>index.php/admin/admin/absen_diniyah" title="Hapus Santri" onclick="return" data-toggle="tooltip" data-placement="top" data-original-title="Hapus Santri">
                                                                    <button type="button" class="btn btn-danger">
                                                                        <i class="la la-minus color-muted m-r-5"></i>
                                                                    </button>
                                                                </a>
                                                            </td>

                                                        </tr>
                                                        <?php
                                                        $no_urut++;
                                                        // endforeach;
                                                        ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>NO</th>
                                                            <th>NAMA SANTRI</th>
                                                            <th>RINGKASAN MATERI</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/admin/admin/diniyah"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>


                        </div>




                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>