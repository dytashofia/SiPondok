    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="<?php echo base_url(); ?>theme-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Pprrsa admin logo" src="<?php echo base_url(); ?>assets/Login1/images/logo_pondok.png" />
                        <h3 class="brand-text">PPRRSA Admin Page</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="<?php echo base_url(); ?>index.php/admin/admin"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
                <li class="active"><a href="<?php echo base_url(); ?>index.php/admin/admin/user"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Data User</span></a>
                </li>
                <li class=" nav-item"><a href="icons.html"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Data Santri</span></a>
                </li>
                <li class=" nav-item"><a href="cards.html"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Pembayaran</span></a>
                </li>
                <li class=" nav-item"><a href="buttons.html"><i class="ft-box"></i><span class="menu-title" data-i18n="">Perizinan</span></a>
                </li>
                <li class=" nav-item"><a href="typography.html"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Pelanggaran</span></a>
                </li>
                <li class=" nav-item"><a href="tables.html"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Kompetensi</span></a>
                </li>
                <li class=" nav-item"><a href="form-elements.html"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Data Web User</span></a>
                </li>

            </ul>
        </div>
        <div class="navigation-background"></div>
    </div>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Tambah Data User</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Tambah Data User
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
                                <h4 class="card-title">Tambah Data User</h4>
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
                                    <h5 class="mt-2">Username</h5>
                                    <fieldset class="form-group">
                                        <input type="text" class="form-control" id="basicInput">
                                    </fieldset>
                                    <h5 class="mt-2">Password</h5>
                                    <fieldset class="form-group">
                                        <input type="password" class="form-control" id="passwordField">
                                    </fieldset>

                                </div>
                                <div class="form-group" style="text-align:right; padding-right:10px;">
                                    <!-- Buttons with Icon -->
                                    <a href="<?php echo base_url(); ?>index.php/admin/admin/user"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                                    <a href="<?php echo base_url(); ?>index.php/admin/admin/user"><button type="button" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button></a>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <!-- Striped rows end -->
            </div>
        </div>
    </div>