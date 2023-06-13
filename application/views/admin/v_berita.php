<div class="container-fluid">
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div> -->

    <a class="btn btn-md btn-primary mb-3" href="<?= base_url(); ?>admin/C_berita/tambahData/"><i class="fas fa-plus"></i> Tambah data</a>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-md btn-success mb-3 ml-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
        Tambah Kategori Berita
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url(); ?>admin/C_berita/tambahKategoriBerita" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama Kategori Berita</label>
                            <input type="text" name="kategori" class="form-control">
                            <?= form_error('kategori','<div class="text-small text-danger"></div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan Kategori Berita</label>
                            <input type="text" name="keterangan" class="form-control">
                            <?= form_error('keterangan','<div class="text-small text-danger"></div>'); ?>
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
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach ($berita as $b ): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b['judul']; ?></td>
                            <td><?= $b['penulis']; ?></td>
                            <td><?= $b['tanggal']; ?></td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="<?= base_url(); ?>admin/C_berita/DetailBerita/<?= $b['id_berita']; ?>"><i class=" fas fa-eye"></i></a>
                                <a class="btn btn-sm btn-primary" href="<?= base_url(); ?>admin/C_berita/UpdateBerita/<?= $b['id_berita']; ?>"><i class=" fas fa-edit"></i></a>
                                <a class="btn btn-sm btn-danger" href="<?= base_url(); ?>admin/C_berita/DeleteBerita/<?= $b['id_berita']; ?>"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>