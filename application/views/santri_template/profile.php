 <style>
     .tombol {
         text-align: center;
         width: 234px;
         height: 27px;
         border-radius: 25px;
         border: none;
         background: -webkit-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
         background: -o-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
         background: -moz-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
         background: linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
         font-size: 12px;
         font-family: "Poppins";
         color: rgb(255, 255, 255);
         line-height: 1.2;
         color: #fff;
         text-transform: uppercase;
         -webkit-transition: all 0.4s;
         -o-transition: all 0.4s;
         -moz-transition: all 0.4s;
         transition: all 0.4s;
         border-width: 0.1px;
         border-style: outset;
         border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
         border-image: initial;
     }

     .tombol:hover {
         background-image: -moz-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
         background-image: -webkit-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
         background-image: -ms-linear-gradient(-10deg, rgb(0, 204, 255) 0%, rgb(101, 231, 196) 100%);
     }
 </style>

 <div class="col-xl-3 col-lg-6 col-md-12">
     <div class="card text-center">
         <div class="card-header">
             <h4 class="card-title">Profile</h4>
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

             <div class="card-body box-profile">

                 <img style="margin-bottom:20px; border-radius: 100%; width:120px;" class="profile-user-img img-fluid img-circle" src="<?= base_url(); ?>assets/berkasSantri/<?php echo ucfirst($this->session->userdata('foto')); ?>" alt="adefsing">

                 <h4 class="card-title"><?php echo ucfirst($this->session->userdata('nama_santri')); ?></h4>
                 <p class="card-text"><?php echo ucfirst($this->session->userdata('NIS')); ?> | <?php echo ucfirst($this->session->userdata('username')); ?>@gmail.com</p>

                 <button class="tombol" type="submit">
                     Edit Profile
                 </button>
                 <h4 class="card-title">&nbsp;</h4>
             </div>

         </div>
     </div>

     <div class="card text-center">
         <div class="card-header">
             <h4 class="card-title">Detail Profile</h4>
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

             <div class="card-body box-profile">


                 <p class="card-text">adefsing | adefsing@gmail.com</p>
                 <p class="card-text">adefsing | adefsing@gmail.com</p>
                 <p class="card-text">adefsing | adefsing@gmail.com</p>
                 <p class="card-text">adefsing | adefsing@gmail.com</p>
                 <p class="card-text">adefsing | adefsing@gmail.com</p>
                 <p class="card-text">adefsing | adefsing@gmail.com</p>
                 <p class="card-text">adefsing | adefsing@gmail.com</p>
                 <p class="card-text">adefsing | adefsing@gmail.com</p>
                 <p class="card-text">adefsing | adefsing@gmail.com</p>


                 <p class="card-text">&nbsp;</p>

             </div>

         </div>
     </div>
 </div>

 </div>

 <!-- Striped rows end -->
 </div>
 </div>
 </div>