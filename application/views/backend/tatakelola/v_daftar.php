<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>aspanel/home">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url()?>aspanel/tatakelola">Daftar Tata Kelola</a></li>
            <li class="breadcrumb-item active"><?php echo $post->tatakelola_cat_judul ?></li>
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
            <h3 class="card-title">
            <h1><?php echo $post->tatakelola_cat_judul ?></h1>

            <p style="text-align:justify"><?php echo $post->tatakelola_cat_desk ?></p>
            <a class="btn btn-success btn-sm" title="Tambah" href="<?php echo base_url()?>aspanel/tatakelola_tambahkan/<?php echo $post->tatakelola_cat_id ?>"><i class="fas fa-plus-circle"></i> Tata Kelola</a></h3>
            <a class="btn btn-outline-info btn-sm" title="Kembali" href="<?php echo base_url()?>aspanel/tatakelola_kategori"><i class="fab fa-creative-commons-sa"></i> Kembali</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Judul</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($tatakelola_detail as $row){
                  ?>
                <tr>
                  <td><?=$row['tatakelola_judul']?></td>
                  <td>
                    <?php
                    echo"
                    <a class='btn btn-primary btn-sm' title='Edit Data' href='".base_url()."aspanel/tatakelola_update/$row[tatakelola_id]'><i class='fas fa-edit'></i></a>
                    <a class='btn btn-danger btn-sm' title='Delete Data' href='".base_url()."aspanel/products_delete/$row[tatakelola_id]' onclick=\"return confirm('Are you sure want to delete this data?')\"><i class='fas fa-trash-alt'></i></a>";
                    ?>
                  </td>
                </tr>
              <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Judul</th>
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
