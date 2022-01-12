
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
                    <a href="<?=site_url('soal/tambah_soal')?>" class="float-right btn btn-primary btn-flat" >
                        <i class="fa fa-user-plus"></i> Create
                    </a>
                </div>
                <h3 class="card-title">Data Kategori Mata Kuliah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
              <table id="table1" class="table table-striped">
                    <thead>
                        <tr>
                        <th>no</th>
                        <th>Nama Matkul</th>
                        <th>Semester</th>
                        <th>tanggal_upload</th>
                        <th>nama dosen</th>
                        <th>tahun_ujian</th>
                        <th>Jenis Ujian</th>
                        <th>File</th>
                        <th>action</th>
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
                                <td><?=$data->tanggal_upload?></td>
                                <td><?=$data->nama_dosen?></td>
                                <td><?=$data->tahun_ujian?></td>
                                <td><?=$data->jenis?></td>
                                <td><?=$data->file?></td>
                                <td><button class="btn btn-sucess btn-xs">
                                <a href="<?php echo base_url().'soal/download/'.$data->id_soal; ?>" class="fa fa-download"> Download</a>
                                      <!-- <i class="fa fa-download"></i> Download -->
                                  </button></td>
                            </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
          
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
<script type="text/javascript">
   $(document).ready(function() {
    $('table.display').DataTable();
   } );
  </script>