
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Profile</li>
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
                     src="<?php echo base_url()?>bahan/foto_profil/<?php echo $users['user_gambar'];?>"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center"><?php echo "$users[username]";?></h3>

              <p class="text-muted text-center"><?php echo "$users[user_login_status]";?></p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Member Since</b> <a class="float-right"><?php echo tgl_indo($users['user_post_tanggal']);?></a>
                </li>
                <li class="list-group-item">
                  <b>Last Login</b><br> <a class=""><?php echo tgl_indo($users['user_login_tanggal']);?> <?php echo $users['user_login_jam'];?></a>
                </li>
              </ul>
              <a href="<?php echo base_url(); ?>paneladmin/logout" class="btn btn-primary btn-block"><b>Logout</b></a>
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
                <?php
                if($this->session->level=='1'){
                  echo"<li class=' nav-item'><a class='active nav-link' href='#activity' data-toggle='tab'>All User Block</a></li>";
                  }
                 ?>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
              <?php if($this->session->level=='1'){ ?>
                <div class="active tab-pane" id="activity">
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title"><a class="btn btn-success btn-sm" title="Edit Data" href="<?php echo base_url()?>paneladmin/profil"><i class="fas fa-plus-circle"></i> Back</a></h3>
                        </div>
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Registered</th>
                              <th>Username</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($recordall as $row){
                              $tgl_posting = $this->mylibrary->tgl_indo($row['user_post_tanggal']);
                              ?>

                            <tr>
                              <td><?=$tgl_posting?></td>
                              <td><?=$row['username']?></td>
                              <td>
                                <?php
                                echo"<a class='btn btn-primary btn-sm' title='Edit Data' href='".base_url()."paneladmin/user_update/$row[id_session]'><i class='fas fa-edit'></i></a>
                                <a class='btn btn-danger btn-sm' title='Delete Data' href='".base_url()."paneladmin/user_delete/$row[id_session]' onclick=\"return confirm('Are you sure want to delete this data?')\"><i class='fas fa-trash-alt'></i></a>";
                                ?>
                              </td>
                            </tr>
                          <?php } ?>

                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Date</th>
                              <th>Title</th>
                              <th>Action</th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                    </div>
                  </div>
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
