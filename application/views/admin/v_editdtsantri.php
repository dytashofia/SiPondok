<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Edit Data Santri</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Data Santri
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
                    <?php foreach($santri as $edit) : 
                        $id = $edit['NIS'];    
                    ?>
                      <?php echo form_open_multipart('admin/Data_Santri/edit/' . $id); ?>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">NIS</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="NIS" id="NIS" class="form-control" value="<?= $id; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Santri </h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" value="<?= $edit['nama_santri']; ?>" name="nama_santri" id="nama_santri" >
                                                <?= form_error('nama_santri', '<small class="text-danger">','</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Jenis Kelamin</h5>
                                                <?php if($edit['jk'] == 'Laki-laki') : ?>
                                                    <select name="jk" id="jk" class="custom-select">
                                                        <option value="<?= $edit['jk']; ?>" selected><?= $edit['jk']; ?></option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                    <?= form_error('jk', '<small class="text-danger">','</small>'); ?>
                                                <?php elseif($edit['jk'] == 'Perempuan') : ?>
                                                    <select name="jk" id="jk" class="custom-select">
                                                        <option value="<?= $edit['jk']; ?>" selected><?= $edit['jk']; ?></option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                    </select>
                                                    <?= form_error('jk', '<small class="text-danger">','</small>'); ?>
                                                <?php else : ?>
                                                    <select name="jk" id="jk" class="custom-select">
                                                        <option value="">---Pilih---</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                    <?= form_error('jk', '<small class="text-danger">','</small>'); ?>
                                                <?php endif; ?>

                                            <h5 class="mt-2">Tempat Tanggal Lahir </h5>
                                                <fieldset class="form-group">
                                                    <input type="date" class="form-control" name="ttl" id="ttl" value="<?= $edit['ttl']; ?>">
                                                    <?= form_error('ttl', '<small class="text-form text-danger">', '</small>'); ?>
                                                </fieldset>

                                            <h5 class="mt-2">Pendidikan</h5>
                                            <?php if($edit['pendidikan'] == 'SMA/SMK') : ?>
                                                <select name="pendidikan" id="pendidikan" class="custom-select">
                                                    <option value="<?= $edit['pendidikan']; ?>" selected><?= $edit['pendidikan']; ?></option>
                                                    <option value="Kuliah">Kuliah</option>
                                                </select>
                                                <?= form_error('pendidikan', '<small class="text-danger">','</small>'); ?>
                                            <?php elseif($edit['pendidikan'] == 'Kuliah') : ?>
                                                <select name="pendidikan" id="pendidikan" class="custom-select">
                                                    <option value="<?= $edit['pendidikan']; ?>" selected><?= $edit['pendidikan']; ?></option>
                                                    <option value="SMA/SMK">SMA/SMK</option>
                                                </select>
                                            <?= form_error('pendidikan', '<small class="text-danger">','</small>'); ?>
                                            <?php else : ?>
                                                <select name="pendidikan" id="pendidikan" class="custom-select">
                                                    <option value="">---Pilih---</option>
                                                    <option value="SMA/SMK">SMA/SMK</option>
                                                    <option value="Kuliah">Kuliah</option>
                                                </select>
                                            <?= form_error('pendidikan', '<small class="text-danger">','</small>'); ?>
                                            <?php endif; ?>
                                            
                                            <h5 class="mt-2">Jurusan</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?= $edit['jurusan']; ?>">
                                                <?= form_error('jurusan', '<small class="text-danger">','</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">NIM</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nim" id="nim" value="<?= $edit['nim']; ?>">
                                                <?= form_error('nim', '<small class="text-danger">','</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Telepon</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $edit['no_hp']; ?>" >
                                                <?= form_error('no_hp', '<small class="text-danger">','</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Tanggal Masuk</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk" value="<?= $edit['tgl_masuk']; ?>">
                                                <?= form_error('tanggal_masuk', '<small class="text-form text-danger">', '</small>'); ?>
                                                </fieldset>
                                            
                                            <h5 class="mt-2">Nama Ayah</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="<?= $edit['nama_ayah']; ?>" >
                                                <?= form_error('nama_ayah', '<small class="text-danger">','</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Ibu</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="<?= $edit['nama_ibu']; ?>" >
                                                <?= form_error('nama_ibu', '<small class="text-danger">','</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Wali</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_wali" id="nama_wali" value="<?= $edit['nama_wali']; ?>" >
                                                <?= form_error('nama_wali', '<small class="text-danger">','</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Telepon Wali</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="no_telp_wali" id="no_telp_wali" value="<?= $edit['no_telp_wali']; ?>">
                                                <?= form_error('no_telp_wali', '<small class="text-danger">','</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Institusi</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_institusi" id="nama_institusi" value="<?= $edit['nama_institusi']; ?>">
                                                <?= form_error('nama_institusi', '<small class="text-danger">','</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Status Pembayaran</h5>
                                            <?php if($edit['status_pembayaran'] == 'Diterima') : ?>
                                                    <select name="status_pembayaran" id="status_pembayaran" class="custom-select">
                                                        <option value="<?= $edit['status_pembayaran']; ?>" selected><?= $edit['status_pembayaran']; ?></option>
                                                        <option value="Belum Diterima">Belum Diterima</option>
                                                    </select>
                                                <?= form_error('status_pembayaran', '<small class="text-danger">','</small>'); ?>
                                            <?php elseif($edit['status_pembayaran'] == 'Belum Diterima') : ?>
                                                    <select name="status_pembayaran" id="status_pembayaran" class="custom-select">
                                                        <option value="<?= $edit['status_pembayaran']; ?>" selected><?= $edit['status_pembayaran']; ?></option>
                                                        <option value="Diterima">Diterima</option>
                                                    </select>
                                                <?= form_error('status_pembayaran', '<small class="text-danger">','</small>'); ?>
                                            <?php else : ?>
                                                    <select name="status_pembayaran" id="status_pembayaran" class="custom-select">
                                                        <option value="">---Pilih---</option>
                                                        <option value="Diterima">Diterima</option>
                                                        <option value="Belum Diterima">Belum Diterima</option>
                                                    </select>
                                                <?= form_error('status_pembayaran', '<small class="text-danger">','</small>'); ?>
                                                <?php endif; ?>

                                            <h5 class="mt-2">Username</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="username" id="username" value="<?= $edit['username']; ?>">
                                                <?= form_error('username', '<small class="text-danger">','</small>'); ?>
                                            </fieldset>

                                            <h5 class="mt-2">Password</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="password" id="password" value="<?= $edit['password']; ?>">
                                                <?= form_error('password', '<small class="text-danger">','</small>'); ?>
                                            </fieldset>

                                             <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/admin/Data_santri"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                            <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">

                                            <h5 class="mt-2">FOTO</h5>
                                            <?php if($edit['foto']==''){?>
                                                <img src="<?= base_url('assets/file_santri')?>" width="120" height="120"><br>
                                             <?php }else{ ?>
                                                <embed  src="<?= base_url('assets/file_santri'.$edit['foto'])?>" width="120" height="120"></embed><br>
                                            <?php }?> 
                                            <fieldset class="form-group">
                                            <div>
                                                 <?= $edit['foto']; ?>
                                            </div>
                                            </fieldset>  
                                            <h5 class="mt-2">SURAT PERNYATAAN</h5>
                                            <?php if($edit['surat_pernyataan']==''){?>
                                                <img src="<?= base_url('assets/file_santri')?>" width="120" height="120"><br>
                                             <?php }else{ ?>
                                                <a  class="btn btn-success" href="<?= base_url('assets/file_santri'.$edit['surat_pernyataan'])?>">Download Surat Pernyataan</a><br>
                                            <?php }?> 
                                            <fieldset class="form-group">
                                            <!-- <div>
                                                 <?php= $edit['surat_pernyataan']; ?>
                                            </div> -->
                                            </fieldset>  
                                            <h5 class="mt-2">BUKTI PEMBAYARAN</h5>
                                            <?php if($edit['bukti_pembayaran']==''){?>
                                                <img src="<?= base_url('assets/file_santri')?>" width="120" height="120"><br>
                                             <?php }else{ ?>
                                                <embed  src="<?= base_url('assets/file_santri'.$edit['bukti_pembayaran'])?>" width="120" height="120"></embed><br>
                                            <?php }?> 
                                            <fieldset class="form-group">
                                            <div>
                                                 <?= $edit['bukti_pembayaran']; ?>
                                            </div>
                                            </fieldset> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php echo form_close();?>
                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>