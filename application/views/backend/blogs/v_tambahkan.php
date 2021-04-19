
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambahkan Artikel</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>paneladmin/blogs">Artikel</a></li>
            <li class="breadcrumb-item active">Tambahkan Artikel</li>
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
            echo form_open_multipart('paneladmin/blogs_tambahkan',$attributes); ?>
              <div class="card-body">
                <div class="form-group">

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="blogs_judul" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="textarea"  name ="blogs_desk" style="width: 100%; height: 100px;"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Meta Deskripsi</label>
                        <input type="text" class="form-control" name="blogs_meta_desk" placeholder="Meta Deskripsi">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kata kunci</label>
                        <input type="text" class="form-control tags" id="blogs_keyword" value="" name="blogs_keyword"  data-role="tagsinput"/>
                          <?php foreach ($tag as $tag){    } ?>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Gambar</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Add Image</label>
                         <p> Dimensi foto Landscape 694px x 420px & maksimal ukuran file 1 Mb </p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-success" title="Tambah Blog"><i class="fas fa-file-upload"></i> Tambahkan</button>
                <a class="btn btn-outline-info" title="Batal" href="<?php echo base_url()?>paneladmin/blogs"><i class="fab fa-creative-commons-sa"></i> Batal</a>

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
