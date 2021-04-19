
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Website</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Website</li>
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
              <h3 class="card-title">Form Data Website</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
            echo form_open_multipart('paneladmin/identitaswebsite',$attributes); ?>
              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" name="id_identitas" value="<?php echo $record['id_identitas']?>">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Website Name</label>
                        <input type="text" class="form-control" name="nama_website" value="<?php echo $record['nama_website']?>" placeholder="Website Name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Domain</label>
                        <input type="text" class="form-control" name="url" value="<?php echo $record['url']?>" placeholder="Contoh : http://www.domain.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name ="email" id="exampleInputEmail1" value="<?php echo $record['email']?>" placeholder="Email Perusahaan">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tag Line</label>
                        <input type="text" class="form-control" name="slogan" value="<?php echo $record['slogan']?>" placeholder="Tag Line Website">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Office Number</label>
                        <input type="text" class="form-control" name="no_telp" value="<?php echo $record['no_telp']?>" placeholder="Office Number">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>WhatsApp Number</label>
                        <input type="text" class="form-control" name="whatsapp" value="<?php echo $record['whatsapp']?>" placeholder="WhatsApp Number">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" class="form-control" name="facebook" value="<?php echo $record['facebook']?>" placeholder="Facebook">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" class="form-control" name="instagram" value="<?php echo $record['instagram']?>" placeholder="Instagram">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Youtube</label>
                        <input type="text" class="form-control" name="youtube" value="<?php echo $record['youtube']?>" placeholder="Alamat Youtube">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Google Maps</label>
                        <input type="text" class="form-control" name="maps" value="<?php echo $record['maps']?>" placeholder="Kode Google Maps">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Address</label>
                        <textarea type="text" class="form-control" name="alamat"  placeholder="Address"><?php echo $record['alamat']?></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Meta Description</label>
                        <textarea type="text" class="form-control" name="meta_deskripsi" placeholder="Meta Description"><?php echo $record['meta_deskripsi']?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Meta Keyword</label>
                        <input type="text" class="form-control tags" id="blogs_keyword" name="meta_keyword" value="<?php echo $record['meta_keyword']?>">
                        <?php   $_arrNilai = explode(',', $record['meta_keyword']);
                          foreach ($tag as $tag){
                              $_ck = (array_search($tag['keyword_nama_seo'], $_arrNilai) === false)? '' : 'checked';
                           } ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pixel <small><a href="https://developers.facebook.com/docs/facebook-pixel/" target="_blank">Create Account</a></small></label>
                        <input type="text" class="form-control" name="pixel" value="<?php echo $record['pixel']?>" placeholder="Kode Pixel">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Google Console <small><a href="https://search.google.com/search-console/welcome?utm_source=about-page" target="_blank">Create Account</a></small></label>
                        <input type="text" class="form-control" name="seo" value="<?php echo $record['seo']?>" placeholder="Kode Google Search Console">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Google Analytics <small><a href="https://analytics.google.com/analytics/web/provision/#/provision" target="_blank">Create Account</a></small></label>
                        <input type="text" class="form-control" name="analytics" value="<?php echo $record['analytics']?>" placeholder="Kode Google Analytics">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Your Logo</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="logo">
                          <label class="custom-file-label" for="exampleInputFile">Image before <?php echo $record['logo'] ?></label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Preview Logo</label>
                        <br>
                        <img class="img-fluid mb-3" src="<?php echo base_url()?>bahan/backend/foto/<?php echo $record['logo'] ?>" alt="Photo">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Favicon</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="favicon">
                          <label class="custom-file-label" for="exampleInputFile">Image before <?php echo $record['favicon'] ?></label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Preview Favicon</label>
                        <br>
                        <img class="img-fluid mb-3" src="<?php echo base_url()?>bahan/backend/foto/<?php echo $record['favicon'] ?>" alt="Photo">
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-success" title="Save Identitas"><i class="fas fa-file-upload"></i> Save</button>
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
