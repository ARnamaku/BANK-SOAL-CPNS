<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BANK SOAL TIF UAD</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>BANK SOAL TIF </a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Daftar Akun</p>

      <form role="form" action="" method="post">
                <div class="card-body">
                    <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" value="<?=set_value('nama')?>" class="form-control  <?=form_error('nama') ? 'is-invalid' : null ?>" placeholder="Enter ...">
                            <?=form_error('nama')?>
                        </div>
                    <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" value="<?=set_value('user')?>" class="form-control  <?=form_error('user') ? 'is-invalid' : null ?>" placeholder="Enter ...">
                            <?=form_error('user')?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" value="<?=set_value('password')?>" class="form-control  <?=form_error('password') ? 'is-invalid' : null ?>" id="exampleInputPassword1" placeholder="Password">
                        <?=form_error('password')?>
                    </div>
                    <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirmpassword" value="<?=set_value('confirmpassword')?>" class="form-control <?=form_error('confirmpassword') ? 'is-invalid' : null ?>" placeholder="Enter ...">
                            <?=form_error('confirmpassword')?>
                    </div>
                    <div class="form-group">
                            <input type="hidden" name="no_hp" value="0" <?=set_value('no_hp')?> class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                            <input type="hidden" name="level" value="2" <?=set_value('level')?> class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

      <p>Sudah punya akun ? silahkan <a href="<?=site_url('auth/login')?>" class="text-center">login</a> </p>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
