<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="card" style="width: 70%">
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Judul Berita</label>
                    <input type="text" name="judul" class="form-control">
                    <?= form_error('judul','<div class="text-small text-danger"></div>'); ?>
                </div>
                
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                    <?= form_error('tanggal','<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Penulis</label>
                    <input type="text" name="penulis" class="form-control">
                    <?= form_error('penulis','<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                        <select name="id_kategori" id="" class="custom-select">
                            <option value="">--Pilih kategori--</option>
                            <?php foreach ($kategori as $k): ?>
                                <option value="<?= $k['id_kategori']; ?>"> <?= $k['kategori']; ?> </option>
                            <?php endforeach; ?>
                        </select>
                    <?= form_error('kategori', '<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="form-group">
                    <label for="isi_berita">Isi Berita</label>
                        <textarea class="form-control" id="isi_berita" name="isi_berita" rows="20"></textarea>
                    <?= form_error('isi_berita','<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Photo</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <a href="<?= base_url(); ?>admin/C_Berita/index" class="btn btn-primary">kembali</a>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

</div>