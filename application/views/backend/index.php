<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="Arkansys" name="author">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WMP PANEL | Log In</title>
  	<?php $this->load->view('backend/metapanel')?>
</head>
<body class="hold-transition login-page">
<div class="login-box">

  <!-- /.login-logo -->
  <div class="card">

    <div class="card-body login-card-body">
      <div class="login-logo">
          <a href="<?php base_url ()?>login"><img src="<?php echo base_url()?>assets/frontend/wmp_p.png" class="brand-image" width="50"></a>
      </div>
      <p class="login-box-msg">WMP PANEL</p>
    <center><?php echo $this->session->flashdata('user_registered'); ?>
    <?php echo $this->session->flashdata('login_failed'); ?>
    <?php echo $this->session->flashdata('user_loggedout'); ?>
  </center>
      <?php echo form_open('login'); ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
          </div>
          <!-- /.col -->


          <!-- /.col -->
        </div>
      </form>
      <?php echo form_close(); ?>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<?php $this->load->view('backend/js')?>


</body>
</html>
