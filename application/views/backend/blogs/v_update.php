
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Perbarui Artikel</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>paneladmin/blogs">Artikel</a></li>
            <li class="breadcrumb-item active">Perbarui Artikel</li>
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
              <h3 class="card-title">Silahkan memperbarui artikel sehingga menarik minat baca pengunjung</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
            echo form_open_multipart('paneladmin/blogs_update',$attributes); ?>
    

              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" name="blogs_id" value="<?php echo $rows['blogs_id'] ?>">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="blogs_judul" value="<?php echo $rows['blogs_judul'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="textarea"  name ="blogs_desk" style="width: 100%; height: 100px;"><?php echo $rows['blogs_desk'] ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Meta Deskripsi</label>
                        <input type="text" class="form-control" name="blogs_meta_desk" value="<?php echo $rows['blogs_meta_desk'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kata kunci</label>
                        <input type="text" class="form-control tags" id="blogs_keyword" name="blogs_keyword" value="<?php echo $rows['blogs_keyword'] ?>">
                      <?php   $_arrNilai = explode(',', $rows['blogs_keyword']);
                        foreach ($tag as $tag){
                            $_ck = (array_search($tag['keyword_nama_seo'], $_arrNilai) === false)? '' : 'checked';
                         } ?>
                      </div>
                    </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Gambar Sebelumnya</label>
                      <div class="row">
                        <img class="img-fluid mb-3" src="<?php echo base_url()?>bahan/foto_blogs/<?php echo $rows['blogs_gambar'] ?>" alt="Photo">
                      </div>

                    </div>
                  </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Gambar</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar">
                          <label class="custom-file-label" for="exampleInputFile">File gambar sebelumnya <?php echo $rows['blogs_gambar'] ?></label>
                         <p> Dimensi foto Landscape 694px x 420px & maksimal ukuran file 1 Mb </p>
                        </div>
                      </div>
                    </div>


                  </div>

                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-success" title="Update Blog"><i class="fas fa-file-upload"></i> Perbarui</button>
                <a class="btn btn-primary" title="Batal" href="<?php echo base_url()?>paneladmin/blogs"><i class="fab fa-creative-commons-sa"></i> Batal</a>

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
