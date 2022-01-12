<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Soal</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mb-2" href="<?= base_url('soal/tambah'); ?>">Tambah Data</a>
            <div mb-2>
                <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                <?php if ($this->session->flashdata('message')) :
                    echo $this->session->flashdata('message');
                endif; ?>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="tableSoal">
                            <thead>
                                <tr class="table-success">
                                <th></th>
                                <th>action</th>
                                <th>Mata Kuliah</th>
                                <th>Semester</th>
                                <th>Tanggal upload</th>
                                <th>Dosen Pengampu</th>
                                <th>Tahun</th>
                                <th>Kategori</th>
                                <th>File</th>
                                <th>download</th>
                                </tr>
                            </thead>

                    <tbody>
                        <?php foreach($data_soal as $row) : ?>
                            <tr>
                                <td>
                                    <a href="<?= site_url('soal/edit/' . $row->id) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </a>
                                    <th>
                                    <a href="javascript:void(0);" data="<?= $row->id ?>" class="btn btn-danger btn-sm item-delete"><i class="fa fa-trash"></i> </a>
                                </td>
                                <td><?=$row->matkul?></td>
                                <td><?=$row->semester?></td>
                                <td><?=$row->tgl_upload?></td>
                                <td><?=$row->dosen?></td>
                                <td><?=$row->thn_ujian?></td>
                                <td><?=$row->kategori?></td>
                                <td><?=$row->file_soal?></td>
                                <td><button class="btn btn-primary btn-xs">
                                      <a href="<?= site_url($row->id) ?>" class="fa fa-download"></a> Download</button></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
          <!-- Modal dialog hapus data-->
<div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>

<script>
    //menampilkan data ketabel dengan plugin datatables
    $('#tableSoal').DataTable();

    //menampilkan modal dialog saat tombol hapus ditekan
    $('#tableSoal').on('click', '.item-delete', function() {
        //ambil data dari atribute data 
        var id = $(this).attr('data');
        $('#myModalDelete').modal('show');
        //ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete 
        //pada controller soal
        $('#btdelete').unbind().click(function() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>soal/delete/',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#myModalDelete').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>
