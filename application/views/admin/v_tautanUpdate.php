<div class="container-fluid">
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div> -->
    <div class="card shadow">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                <?= $title; ?>
            </h4>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Judul Link</label>
                    <input type="hidden" name="id_link" class="form-control" value="<?= $link['id_link']; ?>">
                    <input type="text" name="judul_link" class="form-control" value="<?= $link['judul_link']; ?>">
                    <?= form_error('judul_link', '<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Kategori Link</label>
                    <select name="id_kategori" id="" class="custom-select">
                        <option value="<?= $link['id_kategori']; ?>">
                            <?= $link['kategori']; ?>
                        </option>
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
                    <input type="text" name="deskripsi" class="form-control" value="<?= $link['deskripsi']; ?>">
                    <?= form_error('tanggal', '<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="link" class="form-control" value="<?= $link['link']; ?>">
                    <?= form_error('link', '<div class="text-small text-danger"></div>'); ?>
                </div>
                <button type="Submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>