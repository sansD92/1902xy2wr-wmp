
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data karyawan</h1>
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
            echo form_open_multipart('aspanel/data_karyawan_tambahkan',$attributes); ?>
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Karyawan">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nomer KTP</label>
                        <input type="text" class="form-control" name="user_detail_ktp" placeholder="Nomor KTP">
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
                              if ($rows['user_kelamin_id'] == $row['user_kelamin_id']){
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
                              if ($rows['user_agama_id'] == $row['user_agama_id']){
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
                        <input type="text" class="form-control" name="user_detail_tempatlahir" placeholder="Tempat Lahir">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="user_detail_tgllahir">
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
                              if ($rows['user_perkawinan_id'] == $row['user_perkawinan_id']){
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
                        <input type="text" class="form-control" name="user_detail_pendidikan" placeholder="Pendidikan Terakhir">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tempat Tinggal Sekarang</label>
                        <input type="text" class="form-control" name="user_detail_tempattinggal" placeholder="Tempat Tinggal Sekarang">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nomer Handphone Aktif</label>
                        <input type="text" class="form-control" name="user_detail_no_telp" placeholder="Nomer HP">
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Email Karyawan">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Username Karyawan">
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
                            if ($rows['user_level_id'] == $row['user_level_id']){
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
                <a class="btn btn-outline-info" title="batal" href="<?php echo base_url()?>aspanel/data_karyawan"><i class="fab fa-creative-commons-sa"></i> Batal</a>

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
