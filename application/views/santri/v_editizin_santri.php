<div class="app-content content">
    <div class="content-wrapper">

        <div class="content-body" style="background: linear-gradient(to right, #00cef9, #00e6af);">
            <style>
                .rr {
                    color: #00cef9;
                }

                .tb {
                    width: 85%;
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
            <!-- Striped rows start -->
            <div class="row">
                <div class="col-12">
                    <div class="card" style="margin-bottom:-21px;  ">
                        <div class="card-header">
                            <ul class="list-inline kl ">
                                <li><i class=" ft-feather rr"></i></li>
                                <li class="tb">
                                    <div style=" border: 0; padding: 10px; background: linear-gradient(to right, #00cef9, #00e6af); "><mark style="background: white;">
                                            <h4 class="pp  text-center "> PERIZINAN</h4>
                                        </mark></div>
                                </li>
                                </span>
                            </ul>

                        </div>
                    </div>
                    <div class="col-12">
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

                            <?php echo form_open_multipart('index.php/santri/Santri/updateperizinan'); ?>
                            <?php
                            foreach ($izinedit as $i) :
                            ?>
                                <div class="row match-height">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="card-body">

                                                    <fieldset class="form-group">
                                                        <input type="hidden" name="id_perizinan" id="id_perizinan" class="form-control" value="<?= $i->id_perizinan; ?>" readonly>
                                                    </fieldset>

                                                    <h5 class="mt-2">NIS</h5>
                                                    <fieldset class="form-group">
                                                        <input type="text" class="form-control" name="NIS" value="<?= $i->NIS; ?>" id="NIS" readonly>
                                                    </fieldset>


                                                    <h5 class="mt-2">Nama Santri </h5>
                                                    <fieldset class="form-group">
                                                        <input type="text" class="form-control" id="nama_santri" value="<?php echo ucfirst($this->session->userdata('nama_santri')); ?>" readonly>
                                                    </fieldset>

                                                    <h5 class="mt-2">Tanggal Izin</h5>
                                                    <fieldset class="form-group">
                                                        <input type="date" class="form-control" name="tgl_izin" id="tgl_izin" value="<?= $i->tgl_izin; ?>">
                                                    </fieldset>

                                                    <h5 class="mt-2">Tanggal Kembali</h5>
                                                    <fieldset class="form-group">
                                                        <input type="date" class="form-control" name="tgl_datang" id="tgl_datang" value="<?= $i->tgl_datang; ?>">
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="card-body">

                                                    <h5 class="mt-2">Alasan</h5>
                                                    <fieldset class="form-group">
                                                        <textarea class="form-control" name="alasan" id="alasan" rows="4"><?= $i->alasan; ?></textarea>
                                                    </fieldset>
                                                    <h5 class="mt-2">Edit Keterangan Jika diperlukan</h5>
                                                    <?php
                                                    if ($i->keterangan == '') { ?>
                                                        <img src="<?php echo base_url('assets/file_izin/nofile.png') ?>" width="120" height="120"><br>
                                                    <?php } else { ?>

                                                        <embed src="<?php echo base_url('assets/file_izin/' . $i->keterangan) ?>" width="120" height="120"></embed><br>
                                                    <?php } ?>
                                                    <fieldset class="form-group">
                                                        <div>
                                                            <?php echo $i->keterangan; ?>

                                                        </div>

                                                        <input type="file" class="form-control" name="keterangan" value="<?= $i->keterangan; ?>">
                                                    </fieldset>

                                                    <fieldset class="form-group">
                                                        <input type="hidden" name="status" id="status" class="form-control" value="<?= $i->status; ?>" readonly>
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="text-align:right; padding-right:10px;">
                                    <!-- Buttons with Icon -->
                                    <a href="<?php echo base_url(); ?>index.php/santri/Santri/perizinan"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                                    <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button>

                                </div>
                            <?php
                            endforeach;
                            ?>

                            <?php echo form_close(); ?>

                        </div>
                    </div>
                </div>
                <!-- Striped rows end -->
            </div>
        </div>
    </div>