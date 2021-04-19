
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>paneladmin/products">Products</a></li>
            <li class="breadcrumb-item active">Add Products</li>
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
            echo form_open_multipart('paneladmin/products_tambahkan',$attributes); ?>
              <div class="card-body">
                <div class="form-group">

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="products_judul" placeholder="Interesting Title Ideas">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 col-form-label">Category</label>
                    <div class="col-sm-12">
                      <select name='products_cat_id' class="form-control select2" style="width: 100%;">
                        <?php foreach ($records as $row) {
                          if ($rows['products_cat_id'] == $row['products_cat_id']){
                            echo"<option selected='selected' value='$row[products_cat_id]'>$row[products_cat_judul]</option>";
                          }else{
                            echo"<option value='$row[products_cat_id]'>$row[products_cat_judul]</option>";
                       }
                     } ?>
                    </select>
                    </div>
                  </div>
                </div></div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="textarea"  name ="products_desk" style="width: 100%; height: 100px;"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Meta Description</label>
                        <input type="text" class="form-control" name="products_meta_desk" placeholder="Meta description">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Keywords</label>
                        <input type="text" class="form-control tags" id="blogs_keyword" value="" name="products_keyword"  data-role="tagsinput"/>
                          <?php foreach ($tag as $tag){    } ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Image 1</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Add Image</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Image 2</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar2" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Add Image</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Image 3</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar3" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Add Image</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Image 4</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar4" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Add Image</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Image 5</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar5" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Add Image</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Image 6</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar6" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Add Image</label>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-success" title="Add Products"><i class="fas fa-file-upload"></i> Add</button>
                <a class="btn btn-outline-info" title="Cancel" href="<?php echo base_url()?>paneladmin/products"><i class="fab fa-creative-commons-sa"></i> Cancel</a>

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
