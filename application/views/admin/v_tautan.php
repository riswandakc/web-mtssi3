<div class="container-fluid">
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div> -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-md btn-success mb-3 ml-2" data-toggle="modal" data-target="#exampleModal"><i
            class="fas fa-plus"></i>
        Tambah Tautan/Link
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url(); ?>admin/C_link/tambahTautan" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Judul Link</label>
                            <input type="text" name="judul_link" class="form-control">
                            <?= form_error('judul_link', '<div class="text-small text-danger"></div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Kategori Link</label>
                            <select name="id_kategori" id="" class="custom-select">
                                <option value="">--Pilih kategori--</option>
                                <?php foreach ($kategori as $k): ?>
                                    <option value="<?= $k['id_kategori']; ?>">
                                        <?= $k['kategori']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('kategori', '<div class="text-small text-danger"></div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi Link</label>
                            <input type="text" name="deskripsi" class="form-control">
                            <?= form_error('tanggal', '<div class="text-small text-danger"></div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Link</label>
                            <input type="text" name="link" class="form-control">
                            <?= form_error('link', '<div class="text-small text-danger"></div>'); ?>
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
            <h4 class="m-0 font-weight-bold text-primary">
                <?= $title; ?>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Judul Link</th>
                            <th>Kategori Link</th>
                            <th>Link</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($link as $l): ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= $l['judul_link']; ?>
                                </td>
                                <td>
                                    <?= $l['kategori']; ?>
                                </td>
                                <td>
                                    <?= $l['link']; ?>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-primary"
                                        href="<?= base_url(); ?>admin/C_link/UpdateLink/<?= $l['id_link']; ?>"><i
                                            class=" fas fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger"
                                        href="<?= base_url(); ?>admin/C_link/DeleteLink/<?= $l['id_link']; ?>"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>