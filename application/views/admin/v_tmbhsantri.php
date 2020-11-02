<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Tambah Data Santri</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Tambah Data Santri
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
                            <h4 class="card-title">Tambah Data Santri</h4>
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

                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">Nama Lengkap</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" id="basicInput">
                                            </fieldset>

                                            <h5 class="mt-2">Jenis Kelamin</h5>
                                            <fieldset class="form-group">
                                                <select class="form-control" id="basicSelect">
                                                    <option>Select Option</option>
                                                    <option>Laki-Laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                            </fieldset>

                                            <h5 class="mt-2">Tanggal Lahir</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" id="basicInput">
                                            </fieldset>

                                            <h5 class="mt-2">Alamat Asal</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" id="basicInput">
                                            </fieldset>
                                            <br>
                                            <h4 class="card-title">Pendidikan yang di tempuh</h4>

                                            <h5 class="mt-2">D3/D4/S1/S2/S3</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" id="basicInput">
                                            </fieldset>

                                            <h5 class="mt-2">Nama Kampus</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" id="basicInput">
                                            </fieldset>

                                            <h5 class="mt-2">Jurusan/Prodi/Fakultas</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" id="basicInput">
                                            </fieldset>

                                            <h5 class="mt-2">No. Telepon/HP</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" id="basicInput">
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">Tanggal Masuk Pondok</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" id="basicInput">
                                            </fieldset>

                                            <h5 class="mt-2">Nama Wali Santri</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" id="basicInput">
                                            </fieldset>

                                            <h5 class="mt-2">Pekerjaan Wali Santri</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" id="basicInput">
                                            </fieldset>

                                            <h5 class="mt-2">Alamat Wali Santri</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" id="basicInput">
                                            </fieldset>

                                            <h5 class="mt-2">No. Telepon/HP Wali Santri</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" id="basicInput">
                                            </fieldset>

                                            <h5 class="mt-2">Upload Foto 3x4</h5>
                                            <fieldset class="form-group">
                                                <input style="height: 270px; 
                                                    padding:30% 0 0 100%; 
                                                    background-image:url('<?php echo base_url(); ?>assets/img/tabah.png'); 
                                                    background-repeat: no-repeat;
                                                    background-position: center;" type="file" class="form-control" id="basicInput">
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/admin/admin/santri"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                            <a href="<?php echo base_url(); ?>index.php/admin/admin/santri"><button type="button" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button></a>

                        </div>




                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>