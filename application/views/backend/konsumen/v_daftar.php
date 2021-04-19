<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><strong>Daftar Klien</strong></h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
           <?php  if($this->session->level=='1' OR $this->session->level=='3'){ ?>    
            <div class="card-header">
                <h3 class="card-title col-6 p-0">
                    <a class="btn btn-default btn-sm" title="Tambahkan" href="<?php echo base_url()?>paneladmin/konsumen_tambahkan"><i class="fas fa-user-plus"></i></a>
                    <?php  if($this->session->level=='1'){?> 
                    <a class="btn btn-default btn-sm" title="Export" href="<?php echo base_url()?>paneladmin/exportxlskonsumen">Export</a>
                    <?php } ?>
                </h3>
                <h3 class="card-title col-6 p-0"><a class="btn btn-default btn-sm" title="Sampah" href="<?php echo base_url()?>paneladmin/konsumen_storage_bin" style="float: right;"><i class="fas fa-trash pr-2"></i></a></h3>
            </div>
           <?php } ?>
            <div class="card-body">
              <table id="example1" class="table table-responsive-xl col-12 table-bordered table-striped p-0">
                <thead>
                <tr>
                    <th style="text-align: center;">Action</th>
                    <th>Sales</th>
                    <th>Nama Klien</th>
                    <th>Tanggal Dealing</th>
                    <th>Nama Paket</th>
                    <th>Pembayaran</th>
                    <th>Status Proses</th>
                    <th>Status Prospek</th>
                    <th>Status Update</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($record as $row){
                  ?>

                <tr>
                    
                    <td style="text-align: center;">
                        <?php echo"<a class='btn btn-info btn-sm' title='Lihat' href='".base_url()."paneladmin/konsumen_detail/$row[konsumen_id]'><i class='fas fa-eye'></i></a>" ?>
                        <?php  if($this->session->level=='1' OR $this->session->level=='3' ){ ?> 
                           <?php
                        echo"
                         <a class='btn btn-primary btn-sm' title='Ubah' href='".base_url()."paneladmin/konsumen_update/$row[konsumen_id]'><i class='fas fa-edit'></i></a>
                        <a class='btn btn-danger btn-sm' title='Hapus' href='".base_url()."paneladmin/konsumen_delete_temp/$row[konsumen_id]' onclick=\"return confirm('Yakin mau buang daftar konsumen ini?')\"><i class='fas fa-trash-alt'></i></a>";
                        
                        ?>
                        <?php }?>
                    </td>
                    
                  <td><?=$row['konsumen_cs_fu']?></td>
                  <td><?=$row['konsumen_nama']?></td>
                  <td><?=$row['konsumen_tgl_order']?></td>
                  <td><?=$row['konsumen_perumahan_kode']?></td>
                  <td><?=$row['konsumen_pembayaran']?></td>
                  <td><?=$row['konsumen_statpros']?></td>
                  <td><?=$row['konsumen_statprospek']?></td>
                  <td><?=$row['konsumen_statupdate']?></td>
                </tr>
              <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </section>
</div>

<?php $this->load->view('backend/bottom')?>
