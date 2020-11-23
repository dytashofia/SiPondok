<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Data Pembayaran</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Data Pembayaran
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
                            <h4 class="card-title">Tabel Data Pembayaran</h4>
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
                                <a href="<?php echo base_url(); ?>index.php/admin/admin/tmbhpembayaran"><button type="button" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="ft-plus"> </i> Tambah Data</button></a>
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
                                            <th>NAMA SANTRI</th>
                                            <th>NAMA PEMBAYAR</th>
                                            <th>JENIS PEMBAYARAN</th>
                                            <th>TANGGAL BAYAR</th>
                                            <th>BUKTI BAYAR</th>
                                            <th>STATUS</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $noUrut = 1;
                                            foreach($bayar as $b) :
                                        ?>
                                        <tr>
                                            <td><?= $noUrut;?></td>
                                            <td><?= $b->nama_santri;?></td>
                                            <td><?= $b->nama_pembayar;?></td>
                                            <td> <?= $b->jenis_pembayaran;?></td>
                                            <td> <?= $b->tgl_pembayaran;?></td>
                                            <td><?= $b->bukti_pembayaran;?></td>
                                             <td><?= $b->status;?></td>
                                            <td>

                                                <div class="btn-group mr-2 mb-2">
                                                    <a href="<?php echo base_url() ?>index.php/admin/Admin/editpembayaran/<?php echo $b->id_pembayaran ?>" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="la la-pencil color-muted m-r-5"></i>
                                                        </button>
                                                    </a>

                                                   &nbsp;
                                                    <a title="Hapus" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                        <button type="button" data-toggle="modal" data-target="#deletePaketModalbayar<?=$b->id_pembayaran;?>" class="btn btn-danger">
                                                            <i class="la la-trash color-danger"></i>
                                                        </button>
                                                    </a>
                                                    &nbsp;
                                                    <a href="<?php echo base_url() ?>index.php/admin/Admin/detailbayar/<?php echo $b->id_pembayaran?>" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                        <button type="button" class="btn btn-warning">
                                                            <i class="la la-exclamation-circle color-danger"></i>
                                                        </button>
                                                    </a>

                                                </div>

                                            </td>
                                        </tr>
                                         <?php
                                            $noUrut++;
                                            endforeach;
                                            ?>

                                    </tbody>
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

 <?php
        foreach($bayar as $row) :    
    ?>
        <!--  delete Modal -->
        <div class="modal fade" id="deletePaketModalbayar<?= $row->id_pembayaran?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="deletePaketModalTitle">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deletePaketModalTitle">Hapus data pembayaran</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-justify">Apakah anda yakin akan menghapus data Pembayaran dengan ID<em><strong> <?= $row->id_pembayaran;?></strong></em></h5>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-secondary" type="button" data-dismiss="modal"> Batal </button>
                        <a href="<?php echo base_url() ?>index.php/admin/Admin/hapuspembayaran/<?php echo $row->id_pembayaran ?>" role="button" class="btn btn-success"> Ya </a>
                    </div>
                </div>
            </div>
        </div>

    <?php
        endforeach;
    ?>