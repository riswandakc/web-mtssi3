<div class="container-fluid">
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div> -->

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-md btn-success mb-3 ml-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
        Upload Photo
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url(); ?>admin/C_galeri/tambahData" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Judul Photo</label>
                            <input type="text" name="judul" class="form-control">
                            <?= form_error('judul','<div class="text-small text-danger"></div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi Photo</label>
                            <input type="text" name="deskripsi" class="form-control">
                            <?= form_error('deskripsi','<div class="text-small text-danger"></div>'); ?>
                        </div>
                        <div class="form-group">   
                            <label for="">gambar</label>
                            <input type="file" name="gambar" class="form-control">
                            <?= form_error('gambar','<div class="text-small text-danger"></div>');?>
                        </div>
                        <div class="form-group">
                            <label for="">status</label>
                                <select name="status" id="" class="custom-select">
                                    <option value="">--Pilih status--</option>
                                        <option value="aktif"> Aktif </option>
                                        <option value="tidak aktif"> Tidak Aktif </option>
                                </select>
                            <?= form_error('status', '<div class="text-small text-danger"></div>'); ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary"><?= $title; ?></h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Photo</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach ($galeri as $g ): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><img src="<?php echo base_url().'/assets/photo/'.$g->gambar ?>" width="100px"></td>
                            <td><?= $g->judul; ?></td>
                            <td><?= $g->deskripsi; ?></td>
                            <td><?= $g->status; ?></td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="<?= base_url(); ?>admin/C_galeri/Updategaleri/<?= $g->id_galeri; ?>"><i class=" fas fa-edit"></i></a>
                                <a class="btn btn-sm btn-danger" href="<?= base_url(); ?>admin/C_galeri/Deletegaleri/<?= $g->id_galeri; ?>"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>