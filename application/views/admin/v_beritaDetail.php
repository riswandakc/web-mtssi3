<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url().'/assets/photo/'.$berita['gambar'] ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <th>Judul</th>
                            <td><?= $berita['judul']; ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal dibuat</th>
                            <td><?= $berita['tanggal']; ?></td>
                        </tr>
                        <tr>
                            <th>Penulis</th>
                            <td><?= $berita['penulis']; ?></td>
                        </tr>
                        <tr>
                            <th>Kategori Berita</th>
                            <td><?= $berita['kategori_berita']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <table class="table table-borderless table-stripped">
                <tr>
                    <th>Isi Konten</th>
                </tr>
                <tr>
                    <td><?= $berita['isi_berita']; ?></td>
                </tr>
            </table>
            <a href="<?= base_url(); ?>admin/C_Berita/index" class="btn btn-primary">kembali</a>
            <a class="btn btn-warning" href="<?= base_url(); ?>admin/C_berita/UpdateBerita/<?= $berita['id_berita']; ?>"><i class=" fas fa-edit"></i> Edit</a>
        </div>
    </div>
</div>