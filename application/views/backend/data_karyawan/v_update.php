
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data karyawan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>aspanel/data_karyawan">Data Karyawan</a></li>
            <li class="breadcrumb-item active">Tambah Data Karyawan</li>
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
            echo form_open_multipart('aspanel/data_karyawan_update',$attributes); ?>
              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" name="id_user" value="<?php echo $rows['id_user'] ?>">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Karyawan" value="<?php echo $rows['nama'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nomer KTP</label>
                        <input type="text" class="form-control" name="user_detail_ktp" placeholder="Nomor KTP" value="<?php echo $rows['user_detail_ktp'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-6 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-12">
                          <select name='user_detail_jekel' class="form-control select2" style="width: 100%;">
                            <?php foreach ($records_kel as $row) {
                              if ($rows['user_detail_jekel'] == $row['user_kelamin_nama']){
                                echo"<option selected='selected' value='$row[user_kelamin_nama]'>$row[user_kelamin_nama]</option>";
                              }else{
                                echo"<option value='$row[user_kelamin_nama]'>$row[user_kelamin_nama]</option>";
                           }
                         } ?>
                        </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-6 col-form-label">Agama</label>
                        <div class="col-sm-12">
                          <select name='user_detail_agama' class="form-control select2" style="width: 100%;">
                            <?php foreach ($records_agama as $row) {
                              if ($rows['user_detail_agama'] == $row['user_agama_nama']){
                                echo"<option selected='selected' value='$row[user_agama_nama]'>$row[user_agama_nama]</option>";
                              }else{
                                echo"<option value='$row[user_agama_nama]'>$row[user_agama_nama]</option>";
                           }
                         } ?>
                        </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" name="user_detail_tempatlahir" placeholder="Tempat Lahir" value="<?php echo $rows['user_detail_tempatlahir'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="user_detail_tgllahir" value="<?php echo $rows['user_detail_tgllahir'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-6 col-form-label">Status Perkawinan</label>
                        <div class="col-sm-12">
                          <select name='user_detail_perkawinan' class="form-control select2" style="width: 100%;">
                            <?php foreach ($records_kawin as $row) {
                              if ($rows['user_detail_perkawinan'] == $row['user_perkawinan_nama']){
                                echo"<option selected='selected' value='$row[user_perkawinan_nama]'>$row[user_perkawinan_nama]</option>";
                              }else{
                                echo"<option value='$row[user_perkawinan_nama]'>$row[user_perkawinan_nama]</option>";
                           }
                         } ?>
                        </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <input type="text" class="form-control" name="user_detail_pendidikan" placeholder="Pendidikan Terakhir" value="<?php echo $rows['user_detail_pendidikan'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tempat Tinggal Sekarang</label>
                        <input type="text" class="form-control" name="user_detail_tempattinggal" placeholder="Tempat Tinggal Sekarang" value="<?php echo $rows['user_detail_tempattinggal'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nomer Handphone Aktif</label>
                        <input type="text" class="form-control" name="user_detail_no_telp" placeholder="Nomer HP" value="<?php echo $rows['user_detail_no_telp'] ?>">
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Email Karyawan" value="<?php echo $rows['email'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Username Karyawan" value="<?php echo $rows['username'] ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Gambar</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="gambar" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Tambah Gambar</label>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                      <label for="inputName" class="col-sm-3 col-form-label">Level User</label>
                      <div class="col-sm-12">
                        <select name='user_status' class="form-control select2" style="width: 100%;">
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
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                      <label for="inputName" class="col-sm-3 col-form-label">Divisi</label>
                      <div class="col-sm-12">
                        <select name='user_detail_divisi' class="form-control select2" style="width: 100%;">
                          <?php foreach ($records_divisi as $row) {
                            if ($rows['user_detail_divisi'] == $row['divisi_id']){
                              echo"<option selected='selected' value='$row[divisi_id]'>$row[divisi_judul]</option>";
                            }else{
                              echo"<option value='$row[divisi_id]'>$row[divisi_judul]</option>";
                         }
                       } ?>
                      </select>
                      </div>
                    </div>
                    </div>

                  </div>

                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-success" title="Tambahkan"><i class="fas fa-file-upload"></i> Tambahkan</button>
                <a class="btn btn-outline-info" title="Cancel" href="<?php echo base_url()?>aspanel/data_karyawan"><i class="fab fa-creative-commons-sa"></i> Batal</a>

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
