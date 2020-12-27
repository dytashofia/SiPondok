<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Detail Data Santri</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Detail Data Santri
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
                            foreach($detail as $ds) : {
                        ?>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                           <h5 class="mt-2">NIS </h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="NIS" id="NIS" value="<?= $ds->NIS?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NAMA SANTRI</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_santri" id="nama_santri" value="<?= $ds->nama_santri;?>" readonly>
                                            </fieldset>
                                            <h5 class="mt-2">JENIS KELAMIN</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="jk" id="jk" value="<?= $ds->jk;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">TEMPAT TANGGAL LAHIR</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="ttl" id="ttl" value="<?= date('d-F-Y', strtotime($ds->ttl)); ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">ALAMAT</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $ds->alamat; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">PENDIDIKAN</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="pendidikan" id="pendidikan" value="<?= $ds->pendidikan;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">JURUSAN</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?= $ds->jurusan;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NIM</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nim" id="nim" value="<?= $ds->nim;?>" readonly>
                                            </fieldset>
                                            <h5 class="mt-2">TELEPON</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $ds->no_hp;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">TANGGAL MASUK</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="tgl_masuk" id="tgl_masuk" value="<?= date('d-F-Y', strtotime($ds->tgl_masuk)); ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NAMA AYAH</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="<?= $ds->nama_ayah;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NAMA IBU</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="<?= $ds->nama_ibu;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">NAMA WALI</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_wali" id="nama_wali" value="<?= $ds->nama_wali;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">TELEPON WALI</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="no_telp_wali" id="no_telp_wali" value="<?= $ds->no_telp_wali;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">USERNAME</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="username" id="username" value="<?= $ds->username;?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">PASSWORD</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="password" id="password" value="<?= $ds->password;?>" readonly>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">

                                            <h5 class="mt-2">FOTO</h5>
                                            <?php if($ds->foto==''){?>
                                                <img src="<?php echo base_url('assets/berkasSantri')?>" width="120"><br>
                                             <?php }else{ ?>
                                                <embed  src="<?php echo base_url('assets/berkasSantri/'. $ds->foto)?>" width="150"></embed><br>
                                            <?php }?> 
                                            <fieldset class="form-group">
                                            <div>
                                                 <?php echo $ds->foto; ?>
                                            </div>
                                            </fieldset>  
                                            <h5 class="mt-2">SURAT PERNYATAAN</h5>
                                            <?php if($ds->surat_pernyataan==''){?>
                                                <p class="text-bold text-muted">Belum upload</P>
                                             <?php }else{ ?>
                                                <a  class="btn btn-success" href="<?php echo base_url('assets/berkasSantri'. $ds->surat_pernyataan)?>">Download Surat Pernyataan</a><br>
                                                <?php echo $ds->surat_pernyataan; ?>
                                            <?php }?> 
                                            <fieldset class="form-group">
                                            </fieldset>  
                                            <h5 class="mt-2">BUKTI PEMBAYARAN</h5>
                                            <?php if($ds->bukti_pembayaran==''){?>
                                                <p class="text-bold text-muted">Belum upload</P>
                                             <?php }else{ ?>
                                                <embed  src="<?php echo base_url('assets/berkasSantri'. $ds->bukti_pembayaran)?>" width="150"></embed><br>
                                                <?php echo $ds->bukti_pembayaran; ?>
                                            <?php }?> 
                                            <fieldset class="form-group">
                                            </fieldset> 
                                        </div>
                                        <div> 
                                            <h5 class="mt-2">STATUS</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="status_pembayaran" id="status_pembayaran" value="Belum dikonfirmasi" value="<?= $ds->status_pembayaran; ?>" readonly>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/admin/Data_Santri"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                        </div>
                                             <?php }
                                    endforeach; 
                         ?>

                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>