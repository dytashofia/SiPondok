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
                        <?php foreach ($santri as $edit) :
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
                                                    <input type="text" class="form-control" value="<?= $edit['nama_santri']; ?>" name="nama" id="nama">
                                                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                                </fieldset>

                                                <h5 class="mt-2">Jenis Kelamin</h5>
                                                <?php if ($edit['jk'] == 'Laki-laki') : ?>
                                                    <select name="jk" id="jk" class="custom-select">
                                                        <option value="<?= $edit['jk']; ?>" selected><?= $edit['jk']; ?></option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                    <?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
                                                <?php elseif ($edit['jk'] == 'Perempuan') : ?>
                                                    <select name="jk" id="jk" class="custom-select">
                                                        <option value="<?= $edit['jk']; ?>" selected><?= $edit['jk']; ?></option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                    </select>
                                                    <?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
                                                <?php else : ?>
                                                    <select name="jk" id="jk" class="custom-select">
                                                        <option value="">---Pilih---</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                    <?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
                                                <?php endif; ?>

                                                <h5 class="mt-2">Tempat Tanggal Lahir </h5>
                                                <fieldset class="form-group">
                                                    <input type="date" class="form-control" name="ttl" id="ttl" value="<?= $edit['ttl']; ?>">
                                                    <?= form_error('ttl', '<small class="text-form text-danger">', '</small>'); ?>
                                                </fieldset>

                                                <h5 class="mt-2">ALAMAT</h5>
                                                <fieldset class="form-group">
                                                    <textarea class="form-control" name="almt" id="almt"><?= $edit['alamat']; ?></textarea>
                                                    <?= form_error('almt', '<small class="text-form text-danger">', '</small>'); ?>
                                                </fieldset>

                                                <h5 class="mt-2">Pendidikan</h5>
                                                <?php if ($edit['pendidikan'] == 'SMA/SMK') : ?>
                                                    <select name="pdd" id="pdd" class="custom-select">
                                                        <option value="<?= $edit['pendidikan']; ?>" selected><?= $edit['pendidikan']; ?></option>
                                                        <option value="Kuliah">Kuliah</option>
                                                    </select>
                                                    <?= form_error('pdd', '<small class="text-danger">', '</small>'); ?>
                                                <?php elseif ($edit['pendidikan'] == 'Kuliah') : ?>
                                                    <select name="pdd" id="pdd" class="custom-select">
                                                        <option value="<?= $edit['pendidikan']; ?>" selected><?= $edit['pendidikan']; ?></option>
                                                        <option value="SMA/SMK">SMA/SMK</option>
                                                    </select>
                                                    <?= form_error('pdd', '<small class="text-danger">', '</small>'); ?>
                                                <?php else : ?>
                                                    <select name="pdd" id="pdd" class="custom-select">
                                                        <option value="">---Pilih---</option>
                                                        <option value="SMA/SMK">SMA/SMK</option>
                                                        <option value="Kuliah">Kuliah</option>
                                                    </select>
                                                    <?= form_error('pdd', '<small class="text-danger">', '</small>'); ?>
                                                <?php endif; ?>

                                                <h5 class="mt-2">Jurusan</h5>
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="jur" id="jur" value="<?= $edit['jurusan']; ?>">
                                                    <?= form_error('jur', '<small class="text-danger">', '</small>'); ?>
                                                </fieldset>

                                                <h5 class="mt-2">NIM/NIS</h5>
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="nim" id="nim" value="<?= $edit['nim']; ?>">
                                                    <?= form_error('nim', '<small class="text-danger">', '</small>'); ?>
                                                </fieldset>

                                                <h5 class="mt-2">Telepon</h5>
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="nohp" id="nohp" value="<?= $edit['no_hp']; ?>">
                                                    <?= form_error('nohp', '<small class="text-danger">', '</small>'); ?>
                                                </fieldset>

                                                <h5 class="mt-2">Nama Ayah</h5>
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="ayah" id="ayah" value="<?= $edit['nama_ayah']; ?>">
                                                    <?= form_error('ayah', '<small class="text-danger">', '</small>'); ?>
                                                </fieldset>

                                                <h5 class="mt-2">Nama Ibu</h5>
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="ibu" id="ibu" value="<?= $edit['nama_ibu']; ?>">
                                                    <?= form_error('ibu', '<small class="text-danger">', '</small>'); ?>
                                                </fieldset>

                                                <h5 class="mt-2">Nama Wali</h5>
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="wali" id="wali" value="<?= $edit['nama_wali']; ?>">
                                                    <?= form_error('wali', '<small class="text-danger">', '</small>'); ?>
                                                </fieldset>

                                                <h5 class="mt-2">No Hp Orang Tua/Wali</h5>
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="nohpwali" id="nohpwali" value="<?= $edit['no_telp_wali']; ?>">
                                                    <?= form_error('nohpwali', '<small class="text-danger">', '</small>'); ?>
                                                </fieldset>

                                                <h5 class="mt-2">Nama Institusi</h5>
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="univ" id="univ" value="<?= $edit['nama_institusi']; ?>">
                                                    <?= form_error('univ', '<small class="text-danger">', '</small>'); ?>
                                                </fieldset>

                                                <h5 class="mt-2">Status Pembayaran</h5>
                                                <?php if ($edit['status_pembayaran'] == 'Diterima') : ?>
                                                    <select name="status_pembayaran" id="status_pembayaran" class="custom-select">
                                                        <option value="<?= $edit['status_pembayaran']; ?>" selected><?= $edit['status_pembayaran']; ?></option>
                                                        <option value="Belum Diterima">Belum Diterima</option>
                                                    </select>
                                                    <?= form_error('status_pembayaran', '<small class="text-danger">', '</small>'); ?>
                                                <?php elseif ($edit['status_pembayaran'] == 'Belum Diterima') : ?>
                                                    <select name="status_pembayaran" id="status_pembayaran" class="custom-select">
                                                        <option value="<?= $edit['status_pembayaran']; ?>" selected><?= $edit['status_pembayaran']; ?></option>
                                                        <option value="Diterima">Diterima</option>
                                                    </select>
                                                    <?= form_error('status_pembayaran', '<small class="text-danger">', '</small>'); ?>
                                                <?php else : ?>
                                                    <select name="status_pembayaran" id="status_pembayaran" class="custom-select">
                                                        <option value="">---Pilih---</option>
                                                        <option value="Diterima">Diterima</option>
                                                        <option value="Belum Diterima">Belum Diterima</option>
                                                    </select>
                                                    <?= form_error('status_pembayaran', '<small class="text-danger">', '</small>'); ?>
                                                <?php endif; ?>

                                                <h5 class="mt-2">Username</h5>
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="username" id="username" value="<?= $edit['username']; ?>">
                                                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                                </fieldset>

                                                <h5 class="mt-2">Password</h5>
                                                <fieldset class="form-group">
                                                    <input type="password" class="form-control" name="psw" id="psw" value="<?= $edit['password']; ?>">
                                                    <?= form_error('psw', '<small class="text-danger">', '</small>'); ?>
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
                                                <?php if ($edit['foto'] == '') { ?>
                                                    <p class="text-bold text-muted">Belum upload</p>
                                                    <fieldset class="form-group p-2">
                                                        <input type="file" class="form-control" name="fto" id="fto">
                                                    </fieldset>
                                                <?php } else { ?>
                                                    <embed src="<?= base_url('assets/berkasSantri/' . $edit['foto']) ?>" width="150"></embed><br>
                                                    <?= $edit['foto']; ?>

                                                    <fieldset class="form-group p-2">
                                                        <input type="file" class="form-control" name="fto" id="fto">
                                                    </fieldset>
                                                <?php } ?>
                                                <input type="hidden" name="old_fto" value="<?= $edit['foto']; ?>">

                                                <h5 class="mt-2">SURAT PERNYATAAN</h5>
                                                <?php if ($edit['surat_pernyataan'] == '') { ?>
                                                    <p class="text-bold text-muted">Belum upload</p>
                                                    <fieldset class="form-group">
                                                        <input type="file" class="form-control" name="pernyataan" id="pernyataan">
                                                    </fieldset>
                                                <?php } else { ?>
                                                    <a class="btn btn-success" href="<?= base_url('assets/berkasSantri' . $edit['surat_pernyataan']) ?>">Download Surat Pernyataan</a><br>
                                                    <?= $edit['surat_pernyataan']; ?>

                                                    <fieldset class="form-group">
                                                        <input type="file" class="form-control" name="pernyataan" id="pernyataan">
                                                    </fieldset>
                                                <?php } ?>
                                                <input type="hidden" name="old_pernyataan" value="<?= $edit['surat_pernyataan']; ?>">

                                                <h5 class="mt-2">BUKTI PEMBAYARAN</h5>
                                                <?php if ($edit['bukti_pembayaran'] == '') { ?>
                                                    <p class="text-bold text-muted">Belum upload</p>
                                                    <fieldset class="form-group p-2">
                                                        <input type="file" class="form-control" name="bukti_pembayaran" id="bukti_pembayaran">
                                                    </fieldset>
                                                <?php } else { ?>
                                                    <embed src="<?= base_url('assets/berkasSantri' . $edit['bukti_pembayaran']) ?>" width="120" height="120"></embed><br>
                                                    <?= $edit['bukti_pembayaran']; ?>

                                                    <fieldset class="form-group p-2">
                                                        <input type="file" class="form-control" name="bukti_pembayaran" id="bukti_pembayaran">
                                                    </fieldset>
                                                <?php } ?>
                                                <input type="hidden" name="old_pembayaran" value="<?= $edit['bukti_pembayaran']; ?>">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>