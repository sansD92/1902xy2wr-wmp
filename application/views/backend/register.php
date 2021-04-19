<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>aSPanel | Registrasi</title>
  <?php $this->load->view('backend/metapanel')?>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>aS</b>Panel Admin
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Daftar Sekarang!</p>

      <?php echo form_open('register'); ?>

          <input type="text" class="form-control" name="username" placeholder="Username" required>
          <small><?php echo form_error('username'); ?></small><br>

          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <small><?php echo form_error('email'); ?></small><br>


          <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
          <small><?php echo form_error('nama'); ?></small><br>


          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <small><?php echo form_error('password'); ?></small><br>


          <input type="password" class="form-control" name="password2" placeholder="Konfirmasi password">
          <small><?php echo form_error('password2'); ?></small><br>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
          <div class="col-8">
            <a href="login" class="text-center">Sudah punya akun, Masuk!</a>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close(); ?>


    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<?php $this->load->view('backend/js')?>
</body>
</html>
