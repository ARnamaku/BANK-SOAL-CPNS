
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>User</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">User</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
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
                            <label>No Hp</label>
                            <input type="text" name="no_hp" value="<?=set_value('no_hp')?>" class="form-control <?=form_error('no_hp') ? 'is-invalid' : null ?>" placeholder="Enter ...">
                            <?=form_error('no_hp')?>
                    </div>
                    <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control <?=form_error('level') ? 'is-invalid' : null ?>">
                                <option value="">-- pilih --</option>
                                <option value="1" <?set_value('level') == 1 ? "selected" : null ?>> Admin</option>
                                <option value="2" <?set_value('level') == 2 ? "selected" : null ?>> User</option>
                               
                            </select>
                            <?=form_error('level')?>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->


</section>
<!-- /.content -->
 