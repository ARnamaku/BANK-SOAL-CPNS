
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Kategori Mata Kuliah</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Kategori</li>
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
                <h3 class="card-title">Kategori</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  action="<?=site_url('kategori/proses')?>" method="post">
            <?php foreach($ka as $s => $row) {?>  
                <div class="card-body">
                    <div class="form-group">
                            <label>Nama Mata Kuliah</label>
                            <input type="text" name="nama_matkul" value="<?= $row->nama_matkul; ?>" class="form-control" placeholder="Enter ...">
                            <input type="text" name="id_kategori" value="<?= $row->id_kategori; ?>" class="form-control" placeholder="Enter ...">
                        </div>
                    <div class="form-group">
                            <label>Semester</label>
                            <input type="number"  class="form-control" name="semester" value="<?= $row->semester; ?>" placeholder="Enter ...">
                       
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                </div>
                <?php } ?>
            </form>
        </div>
        <!-- /.card -->


</section>
<!-- /.content -->
 