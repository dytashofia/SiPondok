  <!-- modal tambah izin -->
  <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="konfirmasiModalTitle">
      <div class="modal-dialog  modal-dialog-centered" style="max-width: 700px;">
          <div class="modal-content">

              <div class="card-header " style="background: linear-gradient(to right, #00cef9, #00e6af);">
                  <button class="close" type="button" data-dismiss="modal" aria-label="close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <ul class="list-inline kl ">
                      <li>
                          <h4 class="text-center" style="color: white; font-weight:bold; "> TAMBAH KHATAMAN</h4>

                      </li>
                  </ul>


              </div>

          </div>
      </div>
  </div>






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
                                  <li><i class=" ft-layers rr"></i></li>
                                  <li class="tb">
                                      <h4 class="pp  text-center">KHATAMAN</h4>
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


                                      <button type="button" data-toggle="modal" data-target="#tambahModal" class="btn ff btn-primary btn-min-width mr-1 mb-1">
                                          <i class="ft-plus"></i>Buat Khataman Baru
                                      </button>
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
                                                  <th>NAMA SANTRI</th>
                                                  <th>TANGGAL IZIN</th>
                                                  <th>TANGGAL KEMBALI</th>
                                                  <th>ALASAN</th>
                                                  <th>KETERANGAN</th>
                                                  <th>STATUS</th>
                                                  <th>ACTION</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>

                                              <tr>

                                                  <td>sdfdsasdsa</td>
                                                  <td>adsasdasd</td>
                                                  <td> adasasd</td>
                                                  <td>adassd</td>
                                                  <td>asdasda</td>
                                                  <td>sdasdsa</td>
                                                  <td>asdasdas</td>
                                                  <td>

                                                      <div class="btn-group mr-2 mb-2">
                                                          &nbsp;
                                                          <a title="edit" data-toggle="tooltip" data-placement="top" data-original-title="edit">
                                                              <button type="button" data-toggle="modal" data-target="" class="btn btn-primary">
                                                                  <i class="la la-pencil color-muted m-r-5"></i>
                                                              </button>
                                                          </a>
                                                          &nbsp;

                                                          &nbsp;
                                                          <a title="Hapus" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
                                                              <button type="button" data-toggle="modal" data-target="" class="btn btn-danger">
                                                                  <i class="la la-trash color-danger"></i>
                                                              </button>
                                                          </a>
                                                          &nbsp;

                                                      </div>

                                                  </td>
                                              </tr>

                                          </tbody>

                                      </table>

                                  </div>
                              </div>

                          </div>
                      </div>

                  </div>