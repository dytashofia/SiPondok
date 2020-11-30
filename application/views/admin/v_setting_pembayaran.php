<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Data SET Pembayaran</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        
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
                            <h4 class="card-title">Tabel SET Pembayaran</h4>
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
                            <!-- <a title="tambah" data-toggle="tooltip" data-placement="top" data-original-title="tambah"> -->
                            <!-- <button type="button" data-toggle="modal" data-target="#tambahmodal" class="btn btn-primary btn-min-width mr-1 mb-1"> -->
                            <!-- <i class="ft-plus"></i> -->
                            <!-- </button> -->
                             <!-- </a> -->

                                <a href="<?php echo base_url(); ?>index.php/admin/admin/tmbhsetbayar"><button type="button" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="ft-plus"> </i> Tambah Jenis Pembayaran</button></a>
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
                                            <th>JENIS PEMBAYARAN</th>
                                            <th>JUMLAH PEMBAYARAN</th>
                                            <th>AWAL PEMBAYARAN</th>
                                            <th>BATAS PEMABAYARAN</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $noUrut = 1;
                                            foreach($detail as $d) :
                                        ?>
                                        <tr>
                                            <td><?= $noUrut;?></td>
                                            <td><?= $d->jenis_pembayaran;?></td>
                                            <td><?= $d->jumlah_bayar;?></td>
                                            <td> <?= $d->tanggal_awal;?></td>
                                            <td> <?= $d->tanggal_akhir;?></td>

                                            <td>


                                                <div class="btn-group mr-2 mb-2">
                                                    <a title="update set pembayaran" data-toggle="tooltip" data-placement="top" data-original-title="update set pembayaran">
                                                        <button type="button" data-toggle="modal" data-target="#updatemodal<?= $d->id_setbayar;?>" class="btn btn-primary">
                                                            <i class="la la-pencil color-muted m-r-5"></i>
                                                        </button>
                                                    </a>

                                                   &nbsp;
                                                    <a title="Hapus" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                        <button type="button" data-toggle="modal" data-target="#deletePaketModalsetbayar<?= $d->id_setbayar;?>" class="btn btn-danger">
                                                            <i class="la la-trash color-danger"></i>
                                                        </button>
                                                    </a>
                                                    &nbsp;

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
        foreach($detail as $row) :    
    ?>
        <!--  delete Modal -->
        <div class="modal fade" id="deletePaketModalsetbayar<?= $row->id_setbayar?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="deletePaketModalTitle">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deletePaketModalTitle">Hapus data SET pembayaran</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-justify">Apakah anda yakin akan menghapus data ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-secondary" type="button" data-dismiss="modal"> Batal </button>
                        <a href="<?php echo base_url() ?>index.php/admin/Admin/hapussetbayar/<?php echo $row->id_setbayar ?>" role="button" class="btn btn-success"> Ya </a>
                    </div>
                </div>
            </div>
        </div>

        <!--  Update Modal -->
        
        <div class="modal fade" id="updatemodal<?= $row->id_setbayar?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="konfirmasiModalTitle">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="konfirmasiModalTitle">SET pembayaran</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="<?php echo base_url() ?>index.php/admin/Admin/updatesetbayar/<?php echo $row->id_setbayar ?>">
                    <div class="modal-body">
                        
                        <h5 class="text-justify">
                        <input type="hidden" name="id_setbayar" id="id_set" value="<?php echo $row->id_setbayar;?>">
                        <h5 class="mt-2">Jenis Pembayaran</h5>
                        <fieldset class="form-group">
                        <input type="text" name="jenis_pembayaran" class="form-control" id="jenis_pembayaran" value="<?= $row->jenis_pembayaran;?>"  readonly >
                        </fieldset>
                        <h5 class="mt-2">Jumlah Pembayaran</h5>
                        <fieldset class="form-group">
                        <input type="text" name="jumlah_bayar" class="form-control" id="jumlah_bayar" value="<?php echo $row->jumlah_bayar;?>">
                        </fieldset>
                        <h5 class="mt-2">Awal Pembayaran</h5>
                        <fieldset class="form-group">
                        <input type="date" name="tanggal_awal" class="form-control" id="tanggal_awal" value="<?php echo $row->tanggal_awal;?>">
                        </fieldset>
                        <h5 class="mt-2">Batas Pembayaran</h5>
                        <fieldset class="form-group">
                        <input type="date" name="tanggal_akhir" class="form-control" id="tanggal_akhir" value="<?php echo $row->tanggal_akhir;?>">
                        </fieldset>

                        </h5>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    <?php
        endforeach;
    ?>

 <!--  Tambah Modal -->


        
        <div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="konfirmasiModalTitle">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="konfirmasiModalTitle">SET pembayaran</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="<?php echo base_url() ?>index.php/admin/Admin/tmbhsetbayar">
                    <div class="modal-body">
                        
                        <h5 class="text-justify">
                        <input type="hidden" name="id_setbayar" id="id_setbayar" value="">
                        <h5 class="mt-2">Jenis Pembayaran</h5>
                        <fieldset class="form-group">
                        <input type="text" name="jenis_pembayaran" class="form-control" id="jenis_pembayaran" >
                        </fieldset>
                        <h5 class="mt-2">Jumlah Pembayaran</h5>
                        <fieldset class="form-group">
                        <input type="hidden" name="jumlah_bayar" class="form-control" id="jumlah_bayar">
                        </fieldset>
                        <h5 class="mt-2">Awal Pembayaran</h5>
                        <fieldset class="form-group">
                        <input type="hidden" name="tanggal_awal" class="form-control" id="tanggal_awal">
                        </fieldset>
                        <h5 class="mt-2">Batas Pembayaran</h5>
                        <fieldset class="form-group">
                        <input type="hidden" name="tanggal_akhir" class="form-control" id="tanggal_akhir">
                        </fieldset>

                        </h5>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">Tambah</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
