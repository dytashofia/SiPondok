<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Tambah Data Admin</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Tambah Data Admin
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
                            <h4 class="card-title">Tambah Data Admin</h4>
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

                        <?php echo form_open_multipart('index.php/admin/Admin/tmbhaksi_admin'); ?>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">ID ADMIN</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="id_admin" id="id_admin" value="<?php echo $id_admin; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Username</h5>
                                            <fieldset class="form-group<?= form_error('username') ? 'has-error' : null; ?>">
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username">
                                                <?= form_error('username', '<small class="text-form text-danger mt-2 ml-2">', '</small>'); ?> 
                                            </fieldset>

                                            <h5 class="mt-2">Password</h5>
                                            <fieldset class="form-group <?= form_error('password') ? 'has-error' : null; ?> ">
                                                <input type="text" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                                                <?= form_error('password', '<small class="text-form text-danger mt-2 ml-2">', '</small>'); ?> 
                                            </fieldset>

                                            <h5 class="mt-2">Nama Admin</h5>
                                            <fieldset class="form-group<?= form_error('nama_admin') ? 'has-error' : null; ?>">
                                                <input type="text" class="form-control"name="nama_admin" id="nama_admin" placeholder="Tambah Nama Admin">
                                                <?= form_error('nama_admin', '<small class="text-form text-danger mt-2 ml-2">', '</small>'); ?> 
                                            </fieldset>
                                            <br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                                                                    
                                            <h5 class="mt-2">Foto</h5>
                                            <fieldset class="form-group">
                                                <input type="file" name="foto_admin" id="foto_admin" class="form-control" >
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/admin/admin/admin"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                            <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button></a>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>