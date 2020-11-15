<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Detail Data Admin</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Detail Data Admin
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
                            <h4 class="card-title">Detail Data Admin</h4>
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

                        <?php //echo form_open_multipart('index.php/admin/Admin/update_admin'); ?>
                        <?php foreach($tb_admin as $admin) { ?>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">ID ADMIN</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="id_admin" id="id_admin" value="<?= $admin->id_admin; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Username</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="username" id="username" value="<?= $admin->username; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Password</h5>
                                            <fieldset class="form-group">
                                                <input type="password" class="form-control" name="password" id="password" value="<?= $admin->password; ?>" readonly>
                                            </fieldset>

                                            <h5 class="mt-2">Nama Admin</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_admin" id="nama_admin" value="<?= $admin->nama_admin; ?>" readonly>
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
                                                <input type="text" class="form-control" name="foto_admin" id="foto_admin" value="<?= $admin->foto_admin; ?>" readonly>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

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