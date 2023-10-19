<div class="site-cover site-cover-sm same-height overlay single-page"
    style="background-image: url('<?php echo base_url() . '/assets/assets_front/images/bg-detail.jpg' ?>');">
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-6">
                <div class="post-entry text-center">
                    <h1 class="mb-4">
                        Data Tenaga Pendidik MTS Syarikat Islam 3
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="row blog-entries element-animate">
            <div class="col-md-12 col-lg-12 main-content">
                <div class="post-content-body text-justify">
                    <div class="row my-4">
                        <div class="col-md-12 mb-4">
                            <center>
                                <!-- <img src="<?php echo base_url() . '/assets/photo/' . $berita['gambar'] ?>"
                                    alt="Image placeholder" class="img-fluid rounded"> -->
                            </center>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Foto</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Posisi</th>
                                            <th class="text-center">Pendidikan terakhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tendik as $t): ?>
                                            <tr class="">
                                                <td width="40">
                                                    <?= $no++; ?>
                                                </td>
                                                <td class="text-center" width="70px"><img
                                                        src="<?php echo base_url() . '/assets/photo/tendik/' . $t['foto'] ?>"
                                                        width="100px"></td>
                                                <td>
                                                    <?= $t['nama']; ?>
                                                </td>
                                                <td>
                                                    <?= $t['posisi']; ?>
                                                </td>
                                                <td>
                                                    <?= $t['pendidikan']; ?>
                                                </td>
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
</section>