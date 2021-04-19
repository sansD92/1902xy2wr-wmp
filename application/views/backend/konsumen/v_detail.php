
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Konsumen</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>paneladmin/konsumen">Konsumen</a></li>
            <li class="breadcrumb-item active">Detail Konsumen</li>
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
                        <p><?=$rows['konsumen_kode']?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Konsumen</label>
                        <p><?=$rows['konsumen_nama']?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Dealing</label>
                        <p><?=$rows['konsumen_tgl_order']?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Minggu</label>
                        <p><?=$rows['konsumen_minggu']?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kode Perumahan</label>
                        <p><?=$rows['konsumen_perumahan_kode']?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Media Promosi</label>
                        <p><?=$rows['konsumen_media_nama']?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>No.Telp Konsumen</label>
                        <p><?=$rows['konsumen_telp']?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tipe Pembayaran</label>
                        <p><?=$rows['konsumen_pembayaran']?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Follow Up Oleh</label>
                        <p><?php foreach ($record_cs as $row) {
                              if ($rows['konsumen_cs_fu'] == $row['id_user']){
                                echo"$row[nama]";
                           }
                         } ?></p>
                      </div>
                    </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Tanggal Follow Up</label>
                    <p><?=$rows['konsumen_tgl_fu']?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Status Konsumen</label>
                    <p><?=$rows['konsumen_stat']?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Status Prospek</label>
                    <p><?=$rows['konsumen_statprospek']?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Status Proses</label>
                    <p><?=$rows['konsumen_statpros']?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Status Update</label>
                    <p><?=$rows['konsumen_statupdate']?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Detail Kondisi</label>
                    <p><?=$rows['konsumen_kondisi']?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Solusi</label>
                    <p><?=$rows['konsumen_solusi']?></p>
                  </div>
                </div>
              </div>
               <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Gaji Istri</label>
                    <p>Rp. <?=number_format($rows['konsumen_gi'],0,',','.')?></p>
                  </div>
                </div>
              </div>
               <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Gaji Suami</label>
                    <p>Rp. <?=number_format($rows['konsumen_gi'],0,',','.')?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Cicilan</label>
                    <p>Rp. <?=number_format($rows['konsumen_cicilan'],0,',','.')?></p>
                  </div>
                </div>
              </div>
               <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Tempat Kerja Istri</label>
                    <p><?=$rows['konsumen_ki']?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Tempat Kerja Suami</label>
                    <p><?=$rows['konsumen_ks']?></p>
                  </div>
                </div>
              </div>
               <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Domisili</label>
                    <p><?=$rows['konsumen_domisili']?></p>
                  </div>
                </div>
              </div>
             
                </div>
              </div>

              <div class="card-footer">
                <a class="btn btn-primary" title="Kembali" href="<?php echo base_url()?>paneladmin/konsumen"><i class="fab fa-creative-commons-sa"></i> Kembali</a>

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
