<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Laporan Khataman</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" style="font-weight: bold;">LAPORAN KHATAMAN</h4>
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
                        <div class="table-responsive">
                            <div class="card-header">
                                <h4 class="card-title">Santri Melaksanakan Khataman Bulan Ini</h4>
                            </div>
                            <table class="table table-striped table-bordered zero-configuration ">

                                <style>
                                    .dataTables_filter {
                                        text-align: right;
                                    }

                                    .dataTables_filter label {
                                        text-align: left;
                                    }

                                    .dataTables_paginate ul {
                                        position: absolute;
                                        right: 0;
                                        padding-right: 1rem;
                                    }

                                    .dataTables_info {
                                        padding-top: 15px;
                                        padding-bottom: 50px;
                                    }
                                </style>
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA SANTRI</th>
                                        <!-- <th>JUZ</th> -->
                                        <!-- <th>KHATAMAN</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $noUrut = 1;
                                    foreach ($khatam as $k) :
                                    ?>
                                        <tr>

                                            <td> <?= $noUrut; ?> </td>
                                            <td> <?= $k->nama_santri; ?></td>
                                            <!-- <td> <?= $k->nama_juz; ?></td> -->

                                        </tr>
                                    <?php
                                        $noUrut++;
                                    endforeach;
                                    ?>

                                </tbody>

                            </table>

                            <hr color="#00cef9">

                            <div class="card-header">
                                <h4 class="card-title">Santri Tidak khataman bulan ini</h4>
                            </div>
                            <table class="table table-striped table-bordered zero-configuration">
                                <style>
                                    .dataTables_filter {
                                        text-align: right;
                                    }

                                    .dataTables_filter label {
                                        text-align: left;
                                    }

                                    .dataTables_paginate ul {
                                        position: absolute;
                                        right: 0;
                                        padding-right: 1rem;
                                    }

                                    .dataTables_info {
                                        padding-top: 15px;
                                        padding-bottom: 50px;
                                    }
                                </style>
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA SANTRI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $noUrut = 1;
                                    foreach ($tidak as $t) :
                                    ?>
                                        <tr>

                                            <td><?= $noUrut; ?></td>
                                            <td><?= $t->nama_santri; ?></td>


                                        </tr>
                                    <?php
                                        $noUrut++;
                                    endforeach;
                                    ?>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>