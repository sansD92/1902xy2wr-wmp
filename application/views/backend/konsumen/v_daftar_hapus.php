<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><strong>Sampah Berkas Dealing Tahunan</strong></h1>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title col-6 p-0"><a class="btn btn-default btn-sm" title="Edit Data" href="<?php echo base_url()?>paneladmin/konsumen"><i class="fas fa-plus-circle pr-2"></i>Kembali</a></h3>
                </div>
            
            <div class="card-body">
              <table id="example1" class="table table-responsive-xl col-12 table-bordered table-striped p-0">
                <thead>
                <tr>
                   <th style="text-align: center;">Action</th>
                    <th>Kode Konsumen</th>
                    <th>Nama konsumen</th>
                    <th>Tanggal Dealing</th>
                    <th>Perumahan</th>
                    <th>Pembayaran</th>
                    <th>Status Proses</th>
                    <th>Status Prospek</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach ($record as $row){
                  ?>

                <tr>
                    <td style="text-align: center;">
                           <?php
                        echo"
                        <a class='btn btn-primary btn-sm' title='Kembalikan' href='".base_url()."paneladmin/konsumen_restore/$row[konsumen_id]'><i class='fab fa-creative-commons-sa'></i></a>";
                        ?>
                          
                        <?php
                        if($this->session->level=='1' OR $this->session->level=='2'){echo"
                        <a class='btn btn-danger btn-sm' title='Permanently Hapus' href='".base_url()."paneladmin/konsumen_delete/$row[konsumen_id]' onclick=\"return confirm('Yakin mau menghapus permanen konsumen ini?')\"><i class='fas fa-trash-alt'></i></a>";
                        } ?>
                      
                    </td>
                  <td><?=$row['konsumen_kode']?></td>
                  <td><?=$row['konsumen_nama']?></td>
                  <td><?=$row['konsumen_tgl_order']?></td>
                  <td><?=$row['konsumen_perumahan_kode']?></td>
                  <td><?=$row['konsumen_pembayaran']?></td>
                  <td><?=$row['konsumen_statpros']?></td>
                  <td><?=$row['konsumen_statprospek']?></td>
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
