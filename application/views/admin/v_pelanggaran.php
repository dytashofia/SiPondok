<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Data Pelanggaran</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Data Pelanggaran
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
                            <h4 class="card-title">Tabel Data Pelanggaran</h4>
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
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <a href="<?php echo base_url(); ?>index.php/admin/admin/tmbhpelanggaran"><button type="button" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="ft-plus"> </i> Tambah Data</button></a>
                            </div>
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
                                            <th>ID PELANGGARAN</th>
                                            <th>NIS</th>
                                            <th>NAMA SANTRI</th>
                                            <th>PELANGGARAN</th>
                                            <th>TANGGAL MELANGGAR</th>
                                            <th>SANKSI</th>
                                            <th>CATATAN</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
                                    <?php 
                                    $no_urut = 1;
                                    foreach($tb_pelanggaran as $pelanggaran) :
                                    ?>                              
                                        <tr>
                                            <td><?= $no_urut ?></td>
                                            <td><?= $pelanggaran->id_pelanggaran ?></td>
                                            <td><?= $pelanggaran->NIS;?></td>
                                            <td><?= $pelanggaran->nama_santri; ?></td>
                                            <td><?= $pelanggaran->jenis_pelanggaran; ?></td>
                                            <td><?= $pelanggaran->tgl; ?></td>
                                            <td><?= $pelanggaran->sanksi; ?></td>
                                            <td><?= $pelanggaran->catatan; ?></td>
                                            <td>

                                                <div class="btn-group mr-2 mb-2">
                                                    <a href="#" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="la la-pencil color-muted m-r-5"></i>
                                                        </button>
                                                    </a>

                                                    &nbsp;
                                                    <a href="<?php echo base_url('index.php/admin/Admin/hapus_pelanggaran/'. $pelanggaran->id_pelanggaran); ?>" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="la la-trash color-danger"></i>
                                                        </button>
                                                    </a>
                                                    &nbsp;
                                                    <a href="<?php echo base_url('index.php/admin/Admin/detail_pelanggaran/'.$pelanggaran->id_pelanggaran);?>" title="Detail" onclick="return" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                        <button type="button" class="btn btn-warning">
                                                            <i class="la la-exclamation-circle color-danger"></i>
                                                        </button>
                                                    </a>

                                                </div>

                                            </td>
                                        </tr>
                                        <?php
                                        $no_urut++;
                                    endforeach;
                                     ?>    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>NIS</th>
                                            <th>NAMA SANTRI</th>
                                            <th>PELANGGARAN</th>
                                            <th>TANGGAL MELANGGAR</th>
                                            <th>SANKSI</th>
                                            <th>CATATAN</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>