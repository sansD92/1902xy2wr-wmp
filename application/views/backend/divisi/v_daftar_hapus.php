<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Divisi Terhapus</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url()?>aspanel/divisi">Daftar Divisi</a></li>
            <li class="breadcrumb-item active">Divisi Terhapus</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><a class="btn btn-success btn-sm" title="Edit Data" href="<?php echo base_url()?>aspanel/divisi">Kembali Ke Daftar Divisi</a></h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Dibuat</th>
                  <th>Kode</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($record as $row){
                  $tgl_posting = $this->mylibrary->tgl_indo($row['divisi_post_tanggal']);
                  ?>

                <tr>
                  <td><?=$tgl_posting?></td>
                  <td><?=$row['divisi_meta_desk']?></td>
                  <td>
                    <?php
                    echo"<a class='btn btn-primary btn-sm' title='Kembalikan' href='".base_url()."aspanel/divisi_restore/$row[divisi_id]' onclick=\"return confirm('Yakin ingin mengembalikan data ini?')\"><i class='fab fa-creative-commons-sa'></i></a>
                    <a class='btn btn-danger btn-sm' title='Permanently Delete' href='".base_url()."aspanel/divisi_delete/$row[divisi_id]' onclick=\"return confirm('Yakin untuk menghapus data ini secara permanen?')\"><i class='fas fa-trash-alt'></i></a>";
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
    </section>
</div>

<?php $this->load->view('backend/bottom')?>
