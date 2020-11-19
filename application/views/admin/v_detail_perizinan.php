<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Detail Data Perizinan</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Detail Data Perizinan
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
                      <?php
                            foreach($detail as $i) :
                        ?>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">ID</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="id_perizinan" id="id_perizinan" class="form-control" value="<?= $i->id_perizinan;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NIS</h5>
                                            <fieldset class="form-group">
                                                <input type="text"  class="form-control" name="NIS" value="<?= $i->NIS;?>" id="NIS" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Santri </h5>
                                            <fieldset class="form-group">
                                            <input type="text" class="form-control" name="nama_santri" id="nama_santri" value="<?= $i->nama_santri;?>"  readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Alamat Santri </h5>
                                            <fieldset class="form-group">
                                            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $i->alamat;?>"  readonly>
                                            </fieldset>

                                            <h5 class="mt-2"> No Yang bisa dihubungi </h5>
                                            <fieldset class="form-group">
                                            <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $i->no_hp;?>"  readonly>
                                            </fieldset>

                                             <h5 class="mt-2">Tanggal Izin</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_izin" id="tgl_izin" value="<?= $i->tgl_izin;?>" readonly>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">

                                            <h5 class="mt-2">Tanggal Kembali</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" value="<?= $i->tgl_datang;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Alasan</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="alasan" id="alasan" value="<?= $i->alasan;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Keteragan</h5>
                                            <?php
                                                    if($i->keterangan==''){?>
                                                                 <img src="<?php echo base_url('assets/file_izin/nofile.png')?>" width="120" height="120"><br>
                                             <?php }else{ ?>
 
                                                <embed  src="<?php echo base_url('assets/file_izin/'.$i->keterangan)?>" width="120" height="120"></embed><br>
                                            <?php }?> 
                                            <fieldset class="form-group">
                                            <div>
                                                 <?php echo $i->keterangan; ?>
                                                    
                                            </div>
                                            </fieldset>

                                            <h5 class="mt-2">Status</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="status" id="status" value="<?= $i->status?>" readonly>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/admin/admin/perizinan"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                        </div>
                            <?php
                                    endforeach;
                         ?>

                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>