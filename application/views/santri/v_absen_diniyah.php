 <div class="app-content content">
     <div class="content-wrapper">
         <!-- <div class="content-wrapper-before"></div> -->
         <div class="content-header row">
             <div class="content-header-left col-md-4 col-12 mb-2">
                 <h3 class="content-header-title">&nbsp;</h3>
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
             <!-- Striped rows start -->

             <style>
                 .rr {
                     color: white;
                 }

                 .tb {
                     width: 85%;
                     display: flex;
                     justify-content: center;
                     align-items: center;
                 }

                 .kl {
                     display: flex;
                     align-items: center;
                 }

                 .pp {
                     font-weight: bold;
                     color: white;

                 }

                 @media (min-width: 768px) {
                     .rr {
                         font-size: 90px;
                     }

                     .pp {
                         font-size: 30px;
                     }
                 }

                 @media (max-width: 768px) {
                     .rr {
                         font-size: 30px;
                     }

                     .pp {
                         font-size: 20px;
                     }
                 }
             </style>

             <div class="row">
                 <div class="col-xl-9 col-lg-6 col-md-12">
                     <div class="card" style="margin-bottom:-11px;">
                         <div class="card-header " style="background: linear-gradient(to right, #00cef9, #00e6af);">
                             <ul class="list-inline kl ">
                                 <li><i class=" ft-alert-circle rr"></i></li>
                                 <li class="tb">
                                     <h4 class="pp  text-center">ABSENSI DINIYAH</h4>
                                 </li>
                                 </span>
                             </ul>

                         </div>
                     </div>
                     <div class="card ">
                         <div class="card-header ">


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

                         <div>
                                &nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('santri/Santri/tambah_absen_diniyah'); ?>"><button type="button" class="btn ff btn-primary btn-min-width mr-1 mb-1">Submit Attendance</button></a>
                                </div>
                        <div class="table-responsive">

                         <div class="card-content collapse show">
                             <div class="card-body">
                                 <div class="table-responsive">


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
                                                 <th>ID DINIYAH</th>
                                                 <th>NIS</th>
                                                 <th>NAMA SANTRI</th>
                                                 <th>TANGGAL</th>
                                                 <th>KETERANGAN</th>
                                                 <th>RINGKASAN MATERI</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                         <?php 
                                            $no_urut = 1; 
                                            foreach($absensi_diniyah as $diniyah) :      
                                         ?>
                                             <tr>
                                                 <td><?= $no_urut; ?></td>
                                                 <td><?= $diniyah->id_diniyah; ?></td>
                                                 <td><?= $diniyah->NIS; ?></td>
                                                 <td><?= $diniyah->nama_santri; ?></td>
                                                 <td><?= $diniyah->tgl; ?></td>
                                                 <td><?= $diniyah->keterangan; ?></td>
                                                 <td><?= $diniyah->ringkasan_materi; ?></td>
                                             </tr>
                                        <?php 
                                            $no_urut ++;
                                            endforeach;
                                        ?>     
                                        <tbody>    
                                         <tfoot>
                                             <tr>
                                                 <tr>
                                                 <th>NO</th>
                                                 <th>ID DINIYAH</th>
                                                 <th>NIS</th>
                                                 <th>NAMA SANTRI</th>
                                                 <th>TANGGAL</th>
                                                 <th>KETERANGAN</th>
                                                 <th>RINGKASAN MATERI</th>
                                                </tr>
                                             </tr>
                                         </tfoot>
                                     </table>

                                 </div>
                             </div>

                         </div>
                     </div>

                 </div>