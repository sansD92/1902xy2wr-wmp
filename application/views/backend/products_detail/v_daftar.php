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
            <li class="breadcrumb-item active"><a href="<?php echo base_url()?>aspanel/products">Daftar Produk</a></li>
            <li class="breadcrumb-item active"><?php echo $produk->nama_produk ?></li>
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
            <h1><?php echo $produk->nama_produk ?></h1>
            <p><img class="img-fluid mb-3" src="<?php echo base_url()?>assets/frontend/produk/<?php echo $produk->foto_produk ?>" alt="Gambar"><div class="row"></p>
            <div class="row">
              <div class="col-12">
                <p>Bidang : <?php echo $produk->bidang_produk ?></p>
                <p>Website : <?php echo $produk->website ?> </p>
              </div>
              <div class="col-6">
                <p>Whatsapp : <?php echo $produk->whatsapp ?> </p>
                <p>Instagram : <?php echo $produk->instagram ?> </p>
                <p>Facebook : <?php echo $produk->facebook ?> </p>
              </div>
              <div class="col-6">
                <p>Shopee : <?php echo $produk->shopee ?> </p>
                <p>Tokopedia : <?php echo $produk->tokopedia ?> </p>
                <p>Bukalapak : <?php echo $produk->bukalapak ?> </p>
              </div>
            </div>
            <p style="text-align:justify"><?php echo $produk->deskripsi_produk ?></p>
            <a class="btn btn-success btn-sm" title="Tambah" href="<?php echo base_url()?>aspanel/products_detail_tambahkan/<?php echo $produk->id_produk ?>"><i class="fas fa-plus-circle"></i> Produk Perusahaan</a></h3>
            <a class="btn btn-outline-info btn-sm" title="Kembali" href="<?php echo base_url()?>aspanel/products"><i class="fab fa-creative-commons-sa"></i> Kembali</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Produk</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($produk_detail as $row){

                  ?>

                <tr>
                  <td><img class="img-fluid mb-3" src="<?php echo base_url()?>assets/frontend/produk/<?php echo $row['foto_produk_detail'] ?>" alt="Gambar"><div class="row"><?=$row['nama_produk_detail']?></td>
                  <td>
                    <?php
                    echo"
                    <a class='btn btn-primary btn-sm' title='Edit Data' href='".base_url()."aspanel/products_detail_update/$row[id_produk_detail]'><i class='fas fa-edit'></i></a>
                    <a class='btn btn-danger btn-sm' title='Delete Data' href='".base_url()."aspanel/products_detail_delete/$row[id_produk_detail]' onclick=\"return confirm('Are you sure want to delete this data?')\"><i class='fas fa-trash-alt'></i></a>";
                    ?>
                  </td>
                </tr>
              <?php } ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Produk</th>
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
