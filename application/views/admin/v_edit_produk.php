<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Edit Data Produk</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Data Produk
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
                            <h4 class="card-title">Edit Data Produk</h4>
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
                        
                        <?php echo form_open_multipart('index.php/admin/produk/aksiEditProduk');?>
                        <?php
                            foreach($data_produk as $produk) :
                        ?>
                        <div class="row match-height">
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">

                                            
                                            <h5 class="mt-2">ID Produk</h5>
                                            <fieldset class="form-group">
                                                <input type="text" name="id_produk" id="id_produk" class="form-control" value="<?= $produk->id_produk;?>"  placeholder="Masukkan ID Produk..." readonly>
                                            </fieldset>

                                            <h5 class="mt-2">ID Admin</h5>
                                            <fieldset class="form-group">
                                                <select name="id_admin" id="id_admin" class="custom-select">
                                                <option value=""> Pilih Admin </option>
                                                <?php
                                                foreach($data_admin as $opt_admin) :
                                                    if($opt_admin->id_admin == $produk->id_admin)
                                                    {
                                                        ?>
                                                            <option value="<?= $opt_admin->id_admin;?>" selected><?= $opt_admin->nama_admin?></option>
                                                        <?php
                                                    }else
                                                    {
                                                        ?>
                                                            <option value="<?= $opt_admin->id_admin;?>"><?= $opt_admin->nama_admin;?></option>
                                                        <?php
                                                    }
                                                endforeach;
                                            ?>
                                            </select>
                                            </fieldset>
                                            
                                            <h5 class="mt-2">Nama Produk</h5>
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="nama_produk" id="nama_produk" value="<?= $produk->nama_produk;?>" placeholder="Masukkan Nama Produk...">
                                            </fieldset>

                                            <h5 class="mt-2">Edit Gambar Jika Diperlukan</h5>
                                            <fieldset class="form-group">
                                            <?php
                                                if($produk->foto_produk==''){?>
                                                    <label>Belum Ada Gambar</label><br>
                                                <?php }else{ ?>
                                                    <img src="<?php echo base_url('assets/img/produk/'.$produk->foto_produk)?>" width="120" height="130"><br>
                                                <?php }?>
                                                <fieldset class="form-group">
                                                    <div>
                                                        <?php echo $produk->foto_produk; ?>
                                                    </div>
                                          
                                                <input type="file" class="form-control" name="foto_produk" value="<?= $produk->foto_produk;?>">
                                            </fieldset>
                                    

                                            <h5 class="mt-2">Deskripsi</h5>
                                            <fieldset class="form-group">
                                                <textarea style="height: 200px;" class="form-control" id="deskripsi" name="deskripsi" rows="5"  placeholder="Masukkan Deskripsi..."><?= $produk->deskripsi;?></textarea>
                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-body">

                                            <h5 class="mt-2">Resep</h5>
                                            <fieldset class="form-group">
                                                <textarea style="height: 300px;" class="form-control" name="resep" id="resep" rows="5" placeholder="Masukkan resep..."><?= $produk->resep;?></textarea>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="text-align:right; padding-right:10px;">
                            <!-- Buttons with Icon -->
                            <a href="<?php echo base_url(); ?>index.php/admin/produk/produk"> <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1"><i class="ft-arrow-left"></i> Kembali </button></a>
                            <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i class="ft-file"></i> Simpan </button></a>

                        </div>
                        <?php
                                    endforeach;
                         ?>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
            
            <!-- Striped rows end -->
        </div>
    </div>
</div>