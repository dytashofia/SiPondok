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
                                 <li><i class=" ft-watch rr"></i></li>
                                 <li class="tb">
                                     <h4 class="pp  text-center">INFO PEMBAYARAN</h4>
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
                         <div class="card-content collapse show">
                             <div class="card-body">
                                 <a class="ml-1" href="<?php echo base_url(); ?>santri/Santri/pembayaran"><button type="button" class="btn btn-primary btn-min-width mr-1 ff mb-2"><i class="ft-bookmark"></i> HISTORY</button></a>
                                 <div class="ml-1 mt-1">
                                     <h4 class="card-title mb-3">Segala Pembayaran yang harus dilunasi Santri Bulan Ini :</h4>
                                     <!-- &nbsp;&nbsp;&nbsp;<a href="#"><button type="button" class="btn ff btn-primary btn-min-width mr-1 mb-1"><i class="ft-plus"> </i> Tambah Data</button></a> -->
                                 </div>
                                 <div class="ml-1 mt-1">
                                     <h4 class="card-title mb-3"> Atas Nama Santri : <?php echo ucfirst($this->session->userdata('nama_santri'));?> </h4>
                                     <!-- &nbsp;&nbsp;&nbsp;<a href="#"><button type="button" class="btn ff btn-primary btn-min-width mr-1 mb-1"><i class="ft-plus"> </i> Tambah Data</button></a> -->
                                 </div>
                                 <div class="table-responsive">


                                     <table class="table text-center table-striped table-bordered zero-configuration">
                                         <style>
                                             .dataTables_filter {
                                                 text-align: right;
                                                 display: none;
                                             }

                                             .dataTables_filter label {
                                                 text-align: left;
                                             }

                                             .dataTables_paginate ul {
                                                 position: absolute;
                                                 right: 0;
                                                 padding-right: 1rem;
                                             }

                                             .dataTables_paginate {
                                                 display: none;
                                             }

                                             .dataTables_info {
                                                 padding-top: 15px;
                                                 padding-bottom: 50px;
                                                 display: none;
                                             }

                                             .dataTables_length {
                                                 display: none;
                                             }
                                         </style>
                                         <thead>
                                             <tr>
                                                 <th>NO</th>
                                                 <!-- <th>ID ARMADA</th> -->
                                                 <th>JENIS BAYAR</th>
                                                 <th>JUMLAH</th>
                                                 <th>PEMBAYARAN DIBUKA</th>
                                                 <th>PEMBAYARAN DITUTUP</th>
                                                 <th>ACTION</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                            <?php
                                                $noUrut = 1;
                                                foreach($info as $produk) :
                                            ?>
                                                <tr>
                                                    <td><?= $noUrut;?></td>
                                                    <td><?= $produk->jenis_pembayaran;?></td>
                                                    <td><?= $produk->jumlah_bayar;?></td>
                                                    <td><?= $produk->tanggal_awal;?></td>
                                                    <td><?= $produk->tanggal_akhir;?></td>
                                                    <td>
                                                            <?php
                                                            if($produk->tanggal_awal =='0000-00-00'){?>
                                                                 <?php echo "tidak ada aksi"?>
                                                                
                                                        <?php }else{ ?>   
                                                            <div class="btn-group mr-2 mb-2">
                                                                    <a href="<?php echo base_url('santri/Santri/tmbhuploadpembayaran/'.$produk->id_setbayar); ?>" title="Bayar" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                                        <button type="button" class="btn btn-primary">
                                                                            <i class="la la-pencil color-muted m-r-5">Bayar</i>
                                                                        </button>
                                                                    </a>
                                                                </div>       
                                                    <?php } ?>
                                                   
                                                    </td>
                                                </tr>
                                                <?php
                                                    $noUrut++;
                                                    endforeach;
                                                ?>
                                            </tbody>
                                         <tfoot>
                                             <tr>
                                                 <th>NO</th>
                                                 <!-- <th>ID ARMADA</th> -->
                                                 <th>JENIS BAYAR</th>
                                                 <th>JUMLAH</th>
                                                 <th>PEMBAYARAN DIBUKA</th>
                                                 <th>PEMBAYARAN DITUTUP</th>
                                                 <th>ACTION</th>
                                             </tr>
                                         </tfoot>
                                     </table>

                                 </div>

                                 <div class="ml-1 mt-1">

                                     <h4 class="card-title text-center">Untuk Melakukan Pembayaran pada REK BRI dibawah :</h4>
                                     <div class="input-group " style="display:flex; align-items:center; justify-content:center;">
                                         <fieldset style="width: 70%;">
                                             <input type="text" class="form-control" readonly="readonly" value="220301002459538" placeholder="Some path" id="myInput">
                                         </fieldset>
                                         <span class="input-group-btn">
                                             <button class="btn btn-default" type="button" id="copy-button" onclick="myFunction()" data-toggle=" tooltip" data-placement="button" title="Copy to Clipboard">
                                                 Copy
                                             </button>
                                         </span>
                                     </div>

                                     <h4 class="card-title text-center mt-1">Atas Nama : Yayasan Al-Munawwiriy</h4>
                                     <!-- &nbsp;&nbsp;&nbsp;<a href="#"><button type="button" class="btn ff btn-primary btn-min-width mr-1 mb-1"><i class="ft-plus"> </i> Tambah Data</button></a> -->
                                 </div>
                             </div>
                         </div>
                     </div>

                     <script>
                         function myFunction() {
                             var copyText = document.getElementById("myInput");
                             copyText.select();
                             copyText.setSelectionRange(0, 99999)
                             document.execCommand("copy");

                         }
                     </script>
                 </div>