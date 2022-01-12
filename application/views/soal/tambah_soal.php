
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>TAMBAH SOAL</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Tambah Soal</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
             <div class="card-header">
                
                <!-- <div class="pull-right">
                    <a href="<?=site_url('soal/tambah_soal')?>" class="float-right btn btn-primary btn-flat" >
                        <i class="fa fa-user-plus"></i> Create
                    </a>
                </div> -->
                <h3 class="card-title">Isi Data Dengan Lengkap</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
              <?php echo form_open_multipart('soal/process');?>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputnama">Nama Soal</label>
                  <select class="form-control" name="id_kategori">
                    <option value="">--Pilih--</option>
                    <?php foreach ($row as $key => $data) { ?>
                      <option value="<?= $data->id_kategori ?>"><?= $data->nama_paket ?></option>
                    <?php } ?>
                  </select>
                </div>
            
                <input type ="hidden"name="tanggal_upload" value="<?=date('Y-m-d')  ?>" readonly /> 
            
                <input type="hidden" name='iduser' value="<?= $this->fungsi->user_login()->id_user ?>">
              
                <div class="form-group">
                  <label for="exampleInputdosen">Nama Uploader</label>
                  <input type="text" class="form-control" id="exampleInputdosen" name="uploader" placeholder="masukan nama uploader">
                </div>
                <div class="form-group">
                  <label for="exampleInputtahun">Tahun Ujian</label>
                  <input type="text" class="form-control" id="exampleInputtahun" name="tahun" placeholder="masukan tahun ujian">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Kategori Soal</label>
                    <br>
                    <input type="radio" id="TIU" name="jenis" value="TIU">
                    <label for="satu">(TIU)</label>
                    <br><input type="radio" id="TWK" name="jenis" value="TWK"> 
                    <label for="dua">(TWK)</label>
                  </div>
                <div class="form-group">
                  <label for="exampleInputFile">File Soal</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">masukan file soal</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                
                <button class="btn btn-success" name="add" type="submit" name="checkin">Simpan</button>
               
            </div>
            <?php echo form_close();?>
          
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
 