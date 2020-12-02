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
                                     <h4 class="pp  text-center">PELANGGARAN</h4>
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
                                 <div>
                                     &nbsp;&nbsp;&nbsp;<a href="#"><button type="button" class="btn btn-primary btn-min-width ff mr-1 mb-1"><i class="ft-plus"> </i> Tambah Data</button></a>
                                 </div>
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
                                                 <!-- <th>ID ARMADA</th> -->
                                                 <th>ID</th>
                                                 <th>NAMA</th>
                                                 <th>USERNAME</th>
                                                 <th>PASSWORD</th>
                                                 <th>ACTION</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td>1</td>
                                                 <!-- <td><?= $data['ID_ARM']; ?></td> -->
                                                 <td>aaa</td>
                                                 <td>aaa</td>
                                                 <td>aaaa</td>
                                                 <td>aaaaa</td>
                                                 <td>

                                                     <div class="btn-group mr-2 mb-2">
                                                         <a href="#" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                             <button type="button" class="btn btn-primary">
                                                                 <i class="la la-pencil color-muted m-r-5"></i>
                                                             </button>
                                                         </a>

                                                         &nbsp;
                                                         <a href="#" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                             <button type="button" class="btn btn-danger">
                                                                 <i class="la la-trash color-danger"></i>
                                                             </button>
                                                         </a>
                                                         &nbsp;
                                                         <a href="#" title="Detail" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                             <button type="button" class="btn btn-warning">
                                                                 <i class="la la-exclamation-circle color-danger"></i>
                                                             </button>
                                                         </a>

                                                     </div>

                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td>2</td>
                                                 <!-- <td><?= $data['ID_ARM']; ?></td> -->
                                                 <td>aaa</td>
                                                 <td>aaa</td>
                                                 <td>aaaa</td>
                                                 <td>aaaaa</td>
                                                 <td>

                                                     <div class="btn-group mr-2 mb-2">
                                                         <a href="#" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                             <button type="button" class="btn btn-primary">
                                                                 <i class="la la-pencil color-muted m-r-5"></i>
                                                             </button>
                                                         </a>

                                                         &nbsp;
                                                         <a href="#" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                             <button type="button" class="btn btn-danger">
                                                                 <i class="la la-trash color-danger"></i>
                                                             </button>
                                                         </a>
                                                         &nbsp;
                                                         <a href="#" title="Detail" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                             <button type="button" class="btn btn-warning">
                                                                 <i class="la la-exclamation-circle color-danger"></i>
                                                             </button>
                                                         </a>

                                                     </div>

                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td>3</td>
                                                 <!-- <td><?= $data['ID_ARM']; ?></td> -->
                                                 <td>aaa</td>
                                                 <td>aaa</td>
                                                 <td>aaaa</td>
                                                 <td>aaaaa</td>
                                                 <td>

                                                     <div class="btn-group mr-2 mb-2">
                                                         <a href="#" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                             <button type="button" class="btn btn-primary">
                                                                 <i class="la la-pencil color-muted m-r-5"></i>
                                                             </button>
                                                         </a>

                                                         &nbsp;
                                                         <a href="#" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                             <button type="button" class="btn btn-danger">
                                                                 <i class="la la-trash color-danger"></i>
                                                             </button>
                                                         </a>
                                                         &nbsp;
                                                         <a href="#" title="Detail" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                             <button type="button" class="btn btn-warning">
                                                                 <i class="la la-exclamation-circle color-danger"></i>
                                                             </button>
                                                         </a>

                                                     </div>

                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td>4</td>
                                                 <!-- <td><?= $data['ID_ARM']; ?></td> -->
                                                 <td>aaa</td>
                                                 <td>aaa</td>
                                                 <td>aaaa</td>
                                                 <td>aaaaa</td>
                                                 <td>

                                                     <div class="btn-group mr-2 mb-2">
                                                         <a href="#" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                             <button type="button" class="btn btn-primary">
                                                                 <i class="la la-pencil color-muted m-r-5"></i>
                                                             </button>
                                                         </a>

                                                         &nbsp;
                                                         <a href="#" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                             <button type="button" class="btn btn-danger">
                                                                 <i class="la la-trash color-danger"></i>
                                                             </button>
                                                         </a>
                                                         &nbsp;
                                                         <a href="#" title="Detail" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                             <button type="button" class="btn btn-warning">
                                                                 <i class="la la-exclamation-circle color-danger"></i>
                                                             </button>
                                                         </a>

                                                     </div>

                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td>5</td>
                                                 <!-- <td><?= $data['ID_ARM']; ?></td> -->
                                                 <td>aaa</td>
                                                 <td>aaa</td>
                                                 <td>aaaa</td>
                                                 <td>aaaaa</td>
                                                 <td>

                                                     <div class="btn-group mr-2 mb-2">
                                                         <a href="#" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                             <button type="button" class="btn btn-primary">
                                                                 <i class="la la-pencil color-muted m-r-5"></i>
                                                             </button>
                                                         </a>

                                                         &nbsp;
                                                         <a href="#" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                             <button type="button" class="btn btn-danger">
                                                                 <i class="la la-trash color-danger"></i>
                                                             </button>
                                                         </a>
                                                         &nbsp;
                                                         <a href="#" title="Detail" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                             <button type="button" class="btn btn-warning">
                                                                 <i class="la la-exclamation-circle color-danger"></i>
                                                             </button>
                                                         </a>

                                                     </div>

                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td>6</td>
                                                 <!-- <td><?= $data['ID_ARM']; ?></td> -->
                                                 <td>aaa</td>
                                                 <td>aaa</td>
                                                 <td>aaaa</td>
                                                 <td>aaaaa</td>
                                                 <td>

                                                     <div class="btn-group mr-2 mb-2">
                                                         <a href="#" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                             <button type="button" class="btn btn-primary">
                                                                 <i class="la la-pencil color-muted m-r-5"></i>
                                                             </button>
                                                         </a>

                                                         &nbsp;
                                                         <a href="#" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                             <button type="button" class="btn btn-danger">
                                                                 <i class="la la-trash color-danger"></i>
                                                             </button>
                                                         </a>
                                                         &nbsp;
                                                         <a href="#" title="Detail" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                             <button type="button" class="btn btn-warning">
                                                                 <i class="la la-exclamation-circle color-danger"></i>
                                                             </button>
                                                         </a>

                                                     </div>

                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td>7</td>
                                                 <!-- <td><?= $data['ID_ARM']; ?></td> -->
                                                 <td>aaa</td>
                                                 <td>aaa</td>
                                                 <td>aaaa</td>
                                                 <td>aaaaa</td>
                                                 <td>

                                                     <div class="btn-group mr-2 mb-2">
                                                         <a href="#" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                             <button type="button" class="btn btn-primary">
                                                                 <i class="la la-pencil color-muted m-r-5"></i>
                                                             </button>
                                                         </a>

                                                         &nbsp;
                                                         <a href="#" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                             <button type="button" class="btn btn-danger">
                                                                 <i class="la la-trash color-danger"></i>
                                                             </button>
                                                         </a>
                                                         &nbsp;
                                                         <a href="#" title="Detail" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                             <button type="button" class="btn btn-warning">
                                                                 <i class="la la-exclamation-circle color-danger"></i>
                                                             </button>
                                                         </a>

                                                     </div>

                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td>8</td>
                                                 <!-- <td><?= $data['ID_ARM']; ?></td> -->
                                                 <td>aaa</td>
                                                 <td>aaa</td>
                                                 <td>aaaa</td>
                                                 <td>aaaaa</td>
                                                 <td>

                                                     <div class="btn-group mr-2 mb-2">
                                                         <a href="#" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                             <button type="button" class="btn btn-primary">
                                                                 <i class="la la-pencil color-muted m-r-5"></i>
                                                             </button>
                                                         </a>

                                                         &nbsp;
                                                         <a href="#" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                             <button type="button" class="btn btn-danger">
                                                                 <i class="la la-trash color-danger"></i>
                                                             </button>
                                                         </a>
                                                         &nbsp;
                                                         <a href="#" title="Detail" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                             <button type="button" class="btn btn-warning">
                                                                 <i class="la la-exclamation-circle color-danger"></i>
                                                             </button>
                                                         </a>

                                                     </div>

                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td>9</td>
                                                 <!-- <td><?= $data['ID_ARM']; ?></td> -->
                                                 <td>aaa</td>
                                                 <td>aaa</td>
                                                 <td>aaaa</td>
                                                 <td>aaaaa</td>
                                                 <td>

                                                     <div class="btn-group mr-2 mb-2">
                                                         <a href="#" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                             <button type="button" class="btn btn-primary">
                                                                 <i class="la la-pencil color-muted m-r-5"></i>
                                                             </button>
                                                         </a>

                                                         &nbsp;
                                                         <a href="#" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                             <button type="button" class="btn btn-danger">
                                                                 <i class="la la-trash color-danger"></i>
                                                             </button>
                                                         </a>
                                                         &nbsp;
                                                         <a href="#" title="Detail" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                             <button type="button" class="btn btn-warning">
                                                                 <i class="la la-exclamation-circle color-danger"></i>
                                                             </button>
                                                         </a>

                                                     </div>

                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td>10</td>
                                                 <!-- <td><?= $data['ID_ARM']; ?></td> -->
                                                 <td>aaa</td>
                                                 <td>aaa</td>
                                                 <td>aaaa</td>
                                                 <td>aaaaa</td>
                                                 <td>

                                                     <div class="btn-group mr-2 mb-2">
                                                         <a href="#" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                             <button type="button" class="btn btn-primary">
                                                                 <i class="la la-pencil color-muted m-r-5"></i>
                                                             </button>
                                                         </a>

                                                         &nbsp;
                                                         <a href="#" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                             <button type="button" class="btn btn-danger">
                                                                 <i class="la la-trash color-danger"></i>
                                                             </button>
                                                         </a>
                                                         &nbsp;
                                                         <a href="#" title="Detail" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                             <button type="button" class="btn btn-warning">
                                                                 <i class="la la-exclamation-circle color-danger"></i>
                                                             </button>
                                                         </a>

                                                     </div>

                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td>11</td>
                                                 <!-- <td><?= $data['ID_ARM']; ?></td> -->
                                                 <td>aaa</td>
                                                 <td>aaa</td>
                                                 <td>aaaa</td>
                                                 <td>aaaaa</td>
                                                 <td>

                                                     <div class="btn-group mr-2 mb-2">
                                                         <a href="#" title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                             <button type="button" class="btn btn-primary">
                                                                 <i class="la la-pencil color-muted m-r-5"></i>
                                                             </button>
                                                         </a>

                                                         &nbsp;
                                                         <a href="#" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                             <button type="button" class="btn btn-danger">
                                                                 <i class="la la-trash color-danger"></i>
                                                             </button>
                                                         </a>
                                                         &nbsp;
                                                         <a href="#" title="Detail" onclick="return confirm('Anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
                                                             <button type="button" class="btn btn-warning">
                                                                 <i class="la la-exclamation-circle color-danger"></i>
                                                             </button>
                                                         </a>

                                                     </div>

                                                 </td>
                                             </tr>

                                         </tbody>
                                         <tfoot>
                                             <tr>
                                                 <th>NO</th>
                                                 <!-- <th>ID ARMADA</th> -->
                                                 <th>ID</th>
                                                 <th>NAMA</th>
                                                 <th>USERNAME</th>
                                                 <th>PASSWORD</th>
                                                 <th>ACTION</th>
                                             </tr>
                                         </tfoot>
                                     </table>

                                 </div>
                             </div>

                         </div>
                     </div>

                 </div>