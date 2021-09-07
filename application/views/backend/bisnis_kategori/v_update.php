
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Perbarui Kategori Bisnis</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>aspanel/bisnis_kategori">Kategori Bisnis</a></li>
            <li class="breadcrumb-item active">Perbarui Kategori Bisnis</li>
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
            echo form_open_multipart('aspanel/bisnis_kategori_update',$attributes); ?>


              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" name="bisnis_kategori_id" value="<?php echo $rows['bisnis_kategori_id'] ?>">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="bisnis_kategori_judul" value="<?php echo $rows['bisnis_kategori_judul'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="textarea"  name ="bisnis_kategori_desk" style="width: 100%; height: 100px;"><?php echo $rows['bisnis_kategori_desk'] ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Meta Deskripsi</label>
                        <input type="text" class="form-control" name="bisnis_kategori_meta_desk" value="<?php echo $rows['bisnis_kategori_meta_desk'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kata Kunci</label>
                        <input type="text" class="form-control tags" id="products_keyword" name="bisnis_kategori_keyword" value="<?php echo $rows['bisnis_kategori_keyword'] ?>">
                      <?php   $_arrNilai = explode(',', $rows['bisnis_kategori_keyword']);
                        foreach ($tag as $tag){
                            $_ck = (array_search($tag['keyword_nama_seo'], $_arrNilai) === false)? '' : 'checked';
                         } ?>
                      </div>
                    </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Hasil Gambar</label>
                      <div class="row">
                        <img class="img-fluid mb-3" src="<?php echo base_url()?>assets/frontend/linibisnis/<?php echo $rows['bisnis_kategori_gambar'] ?>" alt="Gambar">
                      </div>

                    </div>
                  </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Gambar</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar">
                          <label class="custom-file-label" for="exampleInputFile"><?php echo $rows['bisnis_kategori_gambar'] ?></label>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Hasil Gambar Sub</label>
                        <div class="row">
                          <img class="img-fluid mb-3" src="<?php echo base_url()?>assets/frontend/linibisnis/<?php echo $rows['bisnis_kategori_gambar_sub'] ?>" alt="Gambar Sub">
                        </div>

                      </div>
                    </div>
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Gambar Sub</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar2">
                            <label class="custom-file-label" for="exampleInputFile"><?php echo $rows['bisnis_kategori_gambar_sub'] ?></label>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Hasil Gambar Icon</label>
                          <div class="row">
                            <img class="img-fluid mb-3" src="<?php echo base_url()?>assets/frontend/linibisnis/<?php echo $rows['bisnis_kategori_gambar_icon'] ?>" alt="Gambar Icon">
                          </div>

                        </div>
                      </div>
                        <div class="col-sm-12">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Gambar Icon</label>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="gambar3">
                              <label class="custom-file-label" for="exampleInputFile"><?php echo $rows['bisnis_kategori_gambar_icon'] ?></label>
                            </div>
                          </div>
                        </div>

                  </div>

                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-success" title="Simpan"><i class="fas fa-file-upload"></i> Simpan</button>
                <a class="btn btn-primary" title="Batal" href="<?php echo base_url()?>aspanel/bisnis_kategori"><i class="fab fa-creative-commons-sa"></i> Batal</a>

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
