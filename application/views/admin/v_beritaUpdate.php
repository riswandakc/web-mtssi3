<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="card">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url().'/assets/photo/'.$berita['gambar'] ?>" class="card-img-top">
                        <!-- <div class="form-group mt-3">
                            <input type="file" name="gambar" class="form-control" value="<?= $berita['gambar']; ?>">
                        </div> -->
                    </div>
                    <div class="col-md-8">
                        <table class="table table-borderless table-stripped">
                            <tr>
                                <th><label for="">Judul</label></th>
                                <td>
                                    <input type="hidden" name="id_berita" class="form-control" value="<?= $berita['id_berita']; ?>">
                                    <input type="text" name="judul" class="form-control" value="<?= $berita['judul']; ?>">
                                    <?= form_error('judul','<div class="text-small text-danger"></div>'); ?>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="">Tanggal diupdate</label></th>
                                <td>
                                    <input type="date" name="tanggal" class="form-control" value="<?= $berita['tanggal']; ?>">
                                    <?= form_error('tanggal','<div class="text-small text-danger"></div>'); ?>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="">Penulis</label></th>
                                <td>
                                    <input type="text" name="penulis" class="form-control" value="<?= $berita['penulis']; ?>">
                                    <?= form_error('penulis','<div class="text-small text-danger"></div>'); ?>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="">Kategori</label></th>
                                <td>
                                    <select name="id_kategori" id="" class="custom-select">
                                        <option value="<?= $berita['kategori']; ?>"><?= $berita['kategori']; ?></option>
                                        <?php foreach ($kategori as $k): ?>
                                            <option value="<?= $k['id_kategori']; ?>"> <?= $k['kategori']; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kategori', '<div class="text-small text-danger"></div>'); ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <table class="table table-borderless table-stripped">
                    <tr>
                        <th><label for="isi_berita">Isi Berita</label></th>
                    </tr>
                    <tr>
                        <td>
                            <textarea class="form-control" id="isi_berita" name="isi_berita" rows="10"><?= $berita['isi_berita']; ?></textarea>
                        </td>
                    </tr>
                </table>
                <a href="<?= base_url(); ?>admin/C_Berita/index" class="btn btn-primary">kembali</a>
                <button class="btn btn-success" type="submit">Update Berita</button>
            </div>
        </form>
    </div>
</div>