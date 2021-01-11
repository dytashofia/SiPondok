 <div style="margin-left:0;" class="app-content content">
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
                                     <h4 class="pp  text-center">TAMBAH RINGKASAN</h4>
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
                            <?php echo form_open_multipart('/santri/Santri/aksi_tambah_ringkasan'); ?>
                        <?php foreach ($detail_santri as $ringkasan_santri) { ?>
                        <div class="row match-height">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">
                                            <h5 class="mt-2">ID Diniyah</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="id_diniyah" id="id_diniyah" value="<?= $ringkasan_santri->id_diniyah; ?>" class="form-control" readonly>
                                            </fieldset>
                                            <h5 class="mt-2">NAMA MAPEL</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="id_diniyah" id="id_diniyah" value="<?= $ringkasan_santri->nama_mapel; ?>" class="form-control" readonly>
                                            </fieldset>
                                            <h5 class="mt-2">RINGKASAN</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="sanksi" class="form-control" id="sanksi" placeholder="Masukkan Sanksi">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>santri/Santri/diniyah"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                            <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button></a>
                        </div>

                         <?= form_close(); ?>    
                           
                         </div>
                     </div>
                 </div>