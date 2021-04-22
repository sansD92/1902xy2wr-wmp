
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profil</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>aspanel/home">Dashboard</a></li>
            <li class="breadcrumb-item active">User Profil</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
<?php $users= $this->Crud_m->view_where('user', array('username'=> $this->session->username))->row_array(); ?>
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="<?php echo base_url()?>assets/frontend/user/<?php echo $users['user_gambar'];?>"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center"><?php echo "$users[username]";?></h3>

              <p class="text-muted text-center"><?php echo "$users[user_login_status]";?></p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Bergabung sejak</b> <a class="float-right"><?php echo tgl_indo($users['user_post_tanggal']);?></a>
                </li>
                <li class="list-group-item">
                  <b>Terakhir aktif</b><br> <a class=""><?php echo tgl_indo($users['user_login_tanggal']);?> <?php echo $users['user_login_jam'];?></a>
                </li>
              </ul>
              <a href="<?php echo base_url(); ?>aspanel/logout" class="btn btn-primary btn-block"><b>Keluar</b></a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#security" data-toggle="tab">Edit Keamanan</a></li>


              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="security">
                  <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
                  echo form_open_multipart('aspanel/profil',$attributes); ?>
                    <input type="hidden" name="id_user" value="<?php echo $record['id_user']?>">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-3 col-form-label">Username</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name ="username" placeholder="<?php echo $record['username']?>" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control"  name ="email" value="<?php echo $record['email']?>" placeholder="Your Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nama lengkap</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control"  name ="nama" value="<?php echo $record['nama']?>" placeholder="Nama Lengkap">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Kata sandi</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control"  name ="password" placeholder="Kata sandi" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Foto profil</label>
                      <div class="col-sm-9">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar">
                          <label class="custom-file-label" for="exampleInputFile"><?php echo $record['user_gambar'] ?></label>
                        </div>
                      </div>

                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Preview</label>
                    <div class="col-sm-9">
                      <img class="img-fluid mb-3" src="<?php echo base_url()?>assets/frontend/user/<?php echo $record['user_gambar'] ?>" alt="Photo">
                    </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"> </label>
                      <div class="col-sm-9">
                        <button type="submit" name ="submit" class="btn btn-success">Perbarui</button>
                      </div>
                    </div>
                  <?php echo form_close(); ?>
                </div>


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
