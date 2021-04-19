
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <?php if($this->session->level=='1'){ ?>
                <li class="nav-item"><a class="nav-link active" href="#security" data-toggle="tab">Edit </a></li>
                <?php }  ?>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <?php if($this->session->level=='1'){ ?>
                <div class="active tab-pane" id="security">
                  <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
                  echo form_open_multipart('paneladmin/user_update',$attributes); ?>
                    <input type="hidden" name="id_session" value="<?php echo $rows['id_session']?>">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-3 col-form-label">Username</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name ="username" placeholder="<?php echo $rows['username']?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-3 col-form-label">Level</label>
                      <div class="col-sm-9">
                        <select name='level' class="form-control select2" style="width: 100%;">
                          <?php foreach ($records as $row) {
                            if ($rows['level'] == $row['user_level_id']){
                              echo"<option selected='selected' value='$row[user_level_id]'>$row[user_level_nama]</option>";
                            }else{
                              echo"<option value='$row[user_level_id]'>$row[user_level_nama]</option>";
                         }
                       } ?>
                      </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-3 col-form-label">Status</label>
                      <div class="col-sm-9">
                        <select name='user_status' class="form-control select2" style="width: 100%;">
                          <?php foreach ($record_status as $row) {
                            if ($rows['user_status'] == $row['user_status_id']){
                              echo"<option selected='selected' value='$row[user_status_id]'>$row[user_status_nama]</option>";
                            }else{
                              echo"<option value='$row[user_status_id]'>$row[user_status_nama]</option>";
                         }
                       } ?>
                      </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control"  name ="email" value="<?php echo $rows['email']?>" placeholder="Your Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control"  name ="nama" value="<?php echo $rows['nama']?>" placeholder="Nama Lengkap">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control"  name ="password" placeholder="Password">

                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Your Picture</label>
                      <div class="col-sm-9">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar">
                          <label class="custom-file-label" for="exampleInputFile">Image before <?php echo $rows['user_gambar'] ?></label>
                        </div>
                      </div>

                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Preview</label>
                    <div class="col-sm-9">
                      <img class="img-fluid mb-3" src="<?php echo base_url()?>bahan/foto_profil/<?php echo $rows['user_gambar'] ?>" alt="Photo">
                    </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"> </label>
                      <div class="col-sm-9">
                        <button type="submit" name ="submit" class="btn btn-success">Update</button>
                        <a class="btn btn-outline-info" title="Batal" href="<?php echo base_url()?>paneladmin/profil"><i class="fab fa-creative-commons-sa"></i> Cancel</a>
                      </div>
                    </div>
                  <?php echo form_close(); ?>
                </div>
                <?php } ?>


                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
<?php $this->load->view('backend/bottom')?>
