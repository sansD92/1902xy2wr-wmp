<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar Komisaris</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Daftar Komisaris</li>
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
              <h3 class="card-title"><a class="btn btn-success btn-sm" title="Edit Data" href="<?php echo base_url()?>aspanel/komisaris_tambahkan"><i class="fas fa-plus-circle"></i> Tambahkan</a></h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomer</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($record as $row){

                  ?>

                <tr>
                  <td><?=$no++?></td>
                  <td><?=$row['nama_komisaris']?></td>
                  <td><?=$row['jabatan_komisaris']?></td>
                  <td>
                    <?php
                    echo"<a class='btn btn-primary btn-sm' title='Edit Data' href='".base_url()."aspanel/komisaris_update/$row[id_komisaris]'><i class='fas fa-edit'></i></a>
                    <a class='btn btn-danger btn-sm' title='Delete Data' href='".base_url()."aspanel/komisaris_delete/$row[id_komisaris]' onclick=\"return confirm('Yakin ingin menghapus ini secara permanen?')\"><i class='fas fa-trash-alt'></i></a>";
                    ?>
                  </td>
                </tr>
              <?php } ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>Nomer</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
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
