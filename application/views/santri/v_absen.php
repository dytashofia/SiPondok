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



             <div class="row">
                 <div class="col-xl-9 col-lg-6 col-md-12">
                     <div class="card ">
                     </div>
                     <div class="card ">
                         <div class="card-header text-center">
                             <h4 class="card-title">Absensi</h4>
                             <br><br><br>
                             <h4 class="card-title">Info Santri</h4>
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
                             <style>
                                 .bm {
                                     background: -webkit-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                                     background: -o-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                                     background: -moz-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                                     background: linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
                                     box-shadow: 0 1px 15px 1px #b9b9b9;
                                     border: 0;

                                 }

                                 .bm:hover {
                                     background: -webkit-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);

                                     box-shadow: 0 1px 15px 1px #b9b9b9;

                                 }


                                 @media (min-width: 768px) {
                                     .bm {
                                         width: 200px;
                                         height: 200px;
                                     }

                                     .btn.btn-icon i {
                                         font-size: 5rem;
                                     }

                                     .as {
                                         display: flex;
                                         align-items: center;
                                         justify-content: center;
                                         margin-top: 35px;
                                     }

                                     .ab {
                                         margin-top: 15px;
                                         font-weight: bold;
                                     }

                                     .ag {
                                         display: flex;
                                         align-items: center;
                                         justify-content: center;
                                         margin-top: 15px;
                                     }

                                     .rr {
                                         font-size: 100px;
                                     }


                                 }



                                 .btn .badge {
                                     top: -185px;
                                     right: -91px;

                                     width: 50px;
                                     height: 50px;
                                     font-size: 2rem;
                                 }

                                 @media (max-width: 768px) {
                                     .btn .badge {
                                         top: -38px;
                                         right: -20px;
                                         width: 30px;
                                         height: 30px;
                                         font-size: 1.2rem;
                                     }

                                     .bm {
                                         width: 58.8px;
                                         height: 39px;
                                     }

                                     .ad {
                                         display: flex;
                                     }

                                     .ab {
                                         display: none;
                                     }

                                     .rr {
                                         font-size: 30px;
                                     }

                                 }
                             </style>
                             
                            <div class="ml-1 mt-1">
                                     <h4 class="card-title mb-3"> NIS : <?php echo ucfirst($this->session->userdata('NIS'));?> </h4>      
                            </div>
                            <div class="table-responsive">  

                            <div class="ml-1 mt-1">
                                     <h4 class="card-title mb-3"> Nama Santri : <?php echo ucfirst($this->session->userdata('nama_santri'));?> </h4>      
                            </div>
                            <div class="table-responsive"> 
                           
                            <div class="card-body text-center">
                                 <a href="<?php echo base_url('santri/Santri/absen_diniyah/'); ?>">
                                     <button type="button" class="btn bm btn-icon btn-secondary  mr-5 ml-5 mb-5 mt-5"><i class="ft-bar-chart-2  ag"></i>
                                         <p class="ab">DINIYAH</p>
                                     </button>
                                 </a>
                                 <a href="<?= base_url('santri/Santri/absen_khataman/'); ?>">
                                     <button type="button" class="btn bm btn-icon btn-secondary  mr-5 ml-5 mb-5 mt-5"><i class="ft-watch as ad"></i>
                                         <p class="ab"> قراءةالقرأن </p>
                                        
                                     </button>
                                 </a> 
                             </div>
                         </div>
                     </div>
                 </div>
            </div>     

