
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Perbarui Produk</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>aspanel/products">Produk</a></li>
            <li class="breadcrumb-item active">Perbarui Produk</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 col-xs-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
            echo form_open_multipart('aspanel/products_detail_update',$attributes); ?>


              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" name="id_produk_detail" value="<?php echo $rows['id_produk_detail'] ?>">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk_detail" value="<?php echo $rows['nama_produk_detail'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="textarea"  name ="deskripsi_produk_detail" style="width: 100%; height: 100px;"><?php echo $rows['deskripsi_produk_detail'] ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Gambar saat ini</label>
                          <div class="row">
                            <img class="img-fluid mb-3" src="<?php echo base_url()?>assets/frontend/produk/<?php echo $rows['foto_produk_detail'] ?>" alt="Photo">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Ubah gambar</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar">
                            <label class="custom-file-label" for="exampleInputFile"><?php echo $rows['foto_produk_detail'] ?></label>
                          </div>
                        </div>
                      </div>
                  </div>

                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-success" title="Simpan"><i class="fas fa-file-upload"></i> Simpan</button>
                <a class="btn btn-primary" title="Batal" href="<?php echo base_url()?>aspanel/products"><i class="fab fa-creative-commons-sa"></i> Batal</a>

              </div>
            <?php echo form_close(); ?>
          </div>


        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

</div>
  <!-- /.content-wrapper -->


<?php $this->load->view('backend/bottom')?>
