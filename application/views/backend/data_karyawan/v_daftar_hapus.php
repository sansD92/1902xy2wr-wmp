<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sampah Data Karyawan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url()?>aspanel/data_karyawan">Daftar Karyawan</a></li>
            <li class="breadcrumb-item active">Sampah Data Karyawan</li>
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
              <h3 class="card-title"><a class="btn btn-success btn-sm" title="Kembali" href="<?php echo base_url()?>aspanel/data_karyawan">Kembali</a></h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Karyawan</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($record as $row){

                  ?>

                <tr>
                  <td><?=$row['nama']?></td>
                  <td><?=$row['user_level_nama']?></td>
                  <td>
                    <?php
                    echo"<a class='btn btn-primary btn-sm' title='Kembalikan' href='".base_url()."aspanel/data_karyawan_restore/$row[id_user]'><i class='fab fa-creative-commons-sa'></i></a>
                    <a class='btn btn-danger btn-sm' title='Hapus Permanen' href='".base_url()."aspanel/data_karyawan_delete/$row[id_user]' onclick=\"return confirm('Yakin ingin menghapus permanen data karyawan ini?')\"><i class='fas fa-trash-alt'></i></a>";
                    ?>
                  </td>
                </tr>
              <?php } ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Karyawan</th>
                  <th>Level</th>
                  <th>Aksi</th>
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
