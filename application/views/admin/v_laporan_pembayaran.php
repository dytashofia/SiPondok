<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Laporan Pembayaran</h3>
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
                            <h4 class="card-title" style="font-weight: bold;">LAPORAN PEMBAYARAN</h4>
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
                                <h4 class="card-title">Santri yang sudah melakukan pembayaran</h4>
                                </div>
                                <table class="table table-striped table-bordered ">
                                   
                                    </style>
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA SANTRI</th>
                                            <th>JENIS PEMABYARAN</th>
                                            <th>TANGGAL PEMBAYRAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                            $noUrut = 1;
                                            foreach($bayar as $b) :
                                        ?>
                                        <tr>
                                           
                                            <td><?= $noUrut;?></td>
                                            <td><?= $b->nama_santri;?></td>
                                            <td><?= $b->jenis_pembayaran;?></td>
                                            <td><?= $b->tgl_pembayaran;?></td>
                                            
                                        </tr>
                                         <?php
                                            $noUrut++;
                                            endforeach;
                                            ?>

                                    </tbody>

                                </table>

                                <div class="card-header">
                                <h4 class="card-title">Santri yang belum melakukan pembayaran</h4>
                                </div>
                                <table class="table table-striped  table-bordered">
                                    
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA SANTRI YANG BELUM BAYAR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                            $noUrut = 1;
                                            foreach($tidak as $t) :
                                        ?>
                                        <tr>
                                           
                                            <td><?= $noUrut;?></td>
                                            <td><?= $t->nama_santri;?></td>
                                            
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