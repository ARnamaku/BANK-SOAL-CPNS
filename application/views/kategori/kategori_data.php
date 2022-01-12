
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Kategori Mata Kuliah</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Kategori Mata Kuliah</li>
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
                
                <div class="pull-right">
                    <a href="" class="float-right btn btn-primary btn-flat" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-user-plus"></i> Create
                    </a>
                </div>
                <h3 class="card-title">Data Kategori Mata Kuliah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0"> 
              <table id="table1" class="table table-striped">
                    <thead>
                        <tr>
                        <th>no</th>
                        <th>Nama</th>
                        <th>Semester</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $no = 1;
                            foreach($row as $s => $data) {
                        ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$data->nama_matkul?></td>
                                <td><?=$data->semester?></td>
                                <td> 
                                <form action="<?=site_url('kategori/del')?>" method="post">
                                  <a href="<?=site_url('kategori/edit/').$data->id_kategori?>" class="btn btn-primary btn-xs">
                                      <i class="fa fa-pen"></i> Update
                                  </a>
                                  <input type="hidden" name="id_kategori" value="<?=$data->id_kategori?>">
                                  <button onclick="return confirm('Apakah Anda Yakin')" class="btn btn-danger btn-xs">
                                      <i class="fa fa-trash"></i> Hapus
                                  </button>
                                </form>    
                                </td>
                            </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
                <div class="modal fade" id="myModal" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Tambah Kategori Soal</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form action="<?=site_url('kategori/proses')?>" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Nama Mata Kuliah</label>
                                <input type="text"class="form-control"  name="nama_matkul"  placeholder="Masukkan Nama Matkul...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Semester</label>
                                <input type="number"   class="form-control" name="semester" placeholder="Masukkan Semester...">
                            </div>
                        </div>
                     
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit"  class="btn btn-primary" name="add">Tambah Data</button>
                    </div>
                  </div>
                  </form>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
 