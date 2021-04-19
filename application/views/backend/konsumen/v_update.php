
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Perbarukan Konsumen</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>paneladmin/konsumen">Daftar Konsumen</a></li>
            <li class="breadcrumb-item active">Perbarukan Konsumen</li>
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
            echo form_open_multipart('paneladmin/konsumen_update',$attributes); ?>
              <div class="card-body">
               
                <div class="form-group">
                    <input type="hidden" name="konsumen_id" value="<?php echo $rows['konsumen_id'] ?>">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kode Konsumen</label>
                        <input type="text" class="form-control" name="konsumen_kode" placeholder="Kode Konsumen" value="<?php echo $rows['konsumen_kode'] ?>" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Konsumen</label>
                        <input type="text" class="form-control" name="konsumen_nama" placeholder="Nama Konsumen" value="<?php echo $rows['konsumen_nama'] ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Dealing</label>
                        <input type="date" class="form-control" name="konsumen_tgl_order" value="<?php echo $rows['konsumen_tgl_order'] ?>" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Minggu</label>
                        <select name='konsumen_minggu' class="form-control select2" style="width: 100%;">
                        <?php foreach ($record_minggu as $row) {
                          if ($rows['konsumen_minggu'] == $row['konsumen_minggu_id']){
                            echo"<option selected='selected' value='$row[konsumen_minggu_nama]'>$row[konsumen_minggu_nama]</option>";
                          }else{
                            echo"<option value='$row[konsumen_minggu_nama]'>$row[konsumen_minggu_nama]</option>";
                       }
                     } ?>
                    </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kode Perumahan</label>
                        <select name='konsumen_perumahan_kode' class="form-control select2" style="width: 100%;">
                        <?php foreach ($record_kodeper as $row) {
                          if ($rows['konsumen_perumahan_kode'] == $row['perumahan_kode']){
                            echo"<option selected='selected' value='$row[perumahan_kode]'>$row[perumahan_kode]</option>";
                          }else{
                            echo"<option value='$row[perumahan_kode]'>$row[perumahan_kode]</option>";
                       }
                     } ?>
                    </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Media Promosi</label>
                        <select name='konsumen_media_nama' class="form-control select2" style="width: 100%;">
                        <?php foreach ($record_medpro as $row) {
                          if ($rows['konsumen_media_nama'] == $row['media_promosi_nama']){
                            echo"<option selected='selected' value='$row[media_promosi_nama]'>$row[media_promosi_nama]</option>";
                          }else{
                            echo"<option value='$row[media_promosi_nama]'>$row[media_promosi_nama]</option>";
                       }
                     } ?>
                    </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>No.Telp Konsumen</label>
                        <input type="text" class="form-control" name="konsumen_telp" placeholder="No. Telp Konsumen" value="<?php echo $rows['konsumen_telp'] ?>" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tipe Pembayaran</label>
                        <select name='konsumen_pembayaran' class="form-control select2" style="width: 100%;">
                        <?php foreach ($record_bayar as $row) {
                          if ($rows['konsumen_pembayaran'] == $row['konsumen_pembayaran_nama']){
                            echo"<option selected='selected' value='$row[konsumen_pembayaran_nama]'>$row[konsumen_pembayaran_nama]</option>";
                          }else{
                            echo"<option value='$row[konsumen_pembayaran_nama]'>$row[konsumen_pembayaran_nama]</option>";
                       }
                     } ?>
                    </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <?php  if($this->session->level=='1'){ ?>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Follow Up Oleh</label>
                        <select name='konsumen_cs_fu' class="form-control select2" style="width: 100%;">
                        <?php foreach ($record_cs as $row) {
                          if ($rows['konsumen_cs_fu'] == $row['username']){
                            echo"<option selected='selected' value='$row[username]'>$row[nama]</option>";
                          }else{
                            echo"<option value='$row[username]'>$row[nama]</option>";
                       }
                     } ?>
                    </select>
                      </div>
                    </div>
                    <?php } ?>
                    <?php  if($this->session->level=='3'){ ?>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Follow Up Oleh</label>
                        <input type="hidden" name="konsumen_cs_fu" value="<?php echo $rows['konsumen_cs_fu'] ?>">
                        <input type="text" class="form-control" value="<?php echo $rows['konsumen_cs_fu'] ?>" disabled>
                      </div>
                    </div>
                    <?php } ?>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Follow Up</label>
                        <input type="date" class="form-control" name="konsumen_tgl_fu" value="<?php echo $rows['konsumen_tgl_fu'] ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status Konsumen</label>
                        <select name='konsumen_stat' class="form-control select2" style="width: 100%;">
                        <?php foreach ($record_stat as $row) {
                          if ($rows['konsumen_stat'] == $row['konsumen_status_nama']){
                            echo"<option selected='selected' value='$row[konsumen_status_nama]'>$row[konsumen_status_nama]</option>";
                          }else{
                            echo"<option value='$row[konsumen_status_nama]'>$row[konsumen_status_nama]</option>";
                       }
                     } ?>
                    </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status Prospek</label>
                        <select name='konsumen_statprospek' class="form-control select2" style="width: 100%;">
                        <?php foreach ($record_statprospek as $row) {
                          if ($rows['konsumen_statprospek'] == $row['konsumen_statprospek_nama']){
                            echo"<option selected='selected' value='$row[konsumen_statprospek_nama]'>$row[konsumen_statprospek_nama]</option>";
                          }else{
                            echo"<option value='$row[konsumen_statprospek_nama]'>$row[konsumen_statprospek_nama]</option>";
                       }
                     } ?>
                    </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status Proses</label>
                        <select name='konsumen_statpros' class="form-control select2" style="width: 100%;">
                        <?php foreach ($record_statpros as $row) {
                          if ($rows['konsumen_statpros'] == $row['konsumen_statpros_nama']){
                            echo"<option selected='selected' value='$row[konsumen_statpros_nama]'>$row[konsumen_statpros_nama]</option>";
                          }else{
                            echo"<option value='$row[konsumen_statpros_nama]'>$row[konsumen_statpros_nama]</option>";
                       }
                     } ?>
                    </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status Update</label>
                        <select name='konsumen_statupdate' class="form-control select2" style="width: 100%;">
                        <?php foreach ($record_statupdate as $row) {
                          if ($rows['konsumen_statupdate'] == $row['konsumen_statupdate_nama']){
                            echo"<option selected='selected' value='$row[konsumen_statupdate_nama]'>$row[konsumen_statupdate_nama]</option>";
                          }else{
                            echo"<option value='$row[konsumen_statupdate_nama]'>$row[konsumen_statupdate_nama]</option>";
                       }
                     } ?>
                    </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Detail Kondisi</label>
                        <input type="text" class="form-control" name="konsumen_kondisi" placeholder="Detail Kondisi" value="<?php echo $rows['konsumen_kondisi'] ?>" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Solusi</label>
                        <input type="text" class="form-control" name="konsumen_solusi" placeholder="Solusi ke konsumen" value="<?php echo $rows['konsumen_solusi'] ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Gaji Istri</label>
                        <input type="number" class="form-control" name="konsumen_gi" value="<?php echo $rows['konsumen_gi'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Gaji Suami</label>
                        <input type="number" class="form-control" name="konsumen_gs" value="<?php echo $rows['konsumen_gs'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Cicilan</label>
                        <input type="number" class="form-control" name="konsumen_cicilan" value="<?php echo $rows['konsumen_cicilan'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tempat Kerja Istri</label>
                        <input type="text" class="form-control" name="konsumen_ki" placeholder="Tempat Kerja Istri" value="<?php echo $rows['konsumen_ki'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tempat Kerja Suami</label>
                        <input type="text" class="form-control" name="konsumen_ks" placeholder="Tempat Kerja Suami" value="<?php echo $rows['konsumen_ks'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Domisili</label>
                        <input type="text" class="form-control" name="konsumen_domisili" placeholder="Domisili" value="<?php echo $rows['konsumen_domisili'] ?>">
                      </div>
                    </div>
                  </div>
                
                  
                </div>
                
              </div>

              <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-success" title="Simpan"><i class="fas fa-file-upload"></i> Simpan</button>
                <a class="btn btn-primary" title="Batal" href="<?php echo base_url()?>paneladmin/konsumen"><i class="fab fa-creative-commons-sa"></i> Batal</a>

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
