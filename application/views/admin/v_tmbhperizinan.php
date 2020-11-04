<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Tambah Data Perizinan</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Tambah Data Perizinan
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
                            <h4 class="card-title">Tambah Data Perizinan</h4>
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
                                            <h5 class="mt-2">ID</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" id="basicInput">
                                            </fieldset>

                                            <h5 class="mt-2">Nama</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" id="basicInput">
                                            </fieldset>

                                            <h5 class="mt-2">Tanggal Berangkat</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" id="basicInput">
                                            </fieldset>

                                            <h5 class="mt-2">Tanggal Kembali</h5>
                                            <fieldset class="form-group">
                                                <input type="date" class="form-control" id="basicInput">
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
                                                <textarea class="form-control" id="basicTextarea" rows="4"></textarea>
                                            </fieldset>

                                            <h5 class="mt-2">Upload Keterangan Jika Ada</h5>
                                            <fieldset class="form-group">
                                                <input style="height: 100px; 
                                                    padding:20% 0 0 100%; 
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
                            <a href="<?php echo base_url(); ?>index.php/admin/admin/perizinan"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                            <a href="<?php echo base_url(); ?>index.php/admin/admin/perizinan"><button type="button" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button></a>

                        </div>




                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
    </div>
</div>