<div class="site-cover site-cover-sm same-height overlay single-page"
  style="background-image: url('<?php echo base_url() . '/assets/assets_front/images/bg-detail.jpg' ?>');">
  <div class="container">
    <div class="row same-height justify-content-center">
      <div class="col-md-6">
        <div class="post-entry text-center">
          <h1 class="mb-4">SAMBUTAN KEPALA MTS SYARIKAT ISLAM 3</h1>
          <div class="post-meta align-items-center text-center">
            <!-- <figure class="author-figure mb-0 me-3 d-inline-block"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure> -->
            <!-- <span class="d-inline-block mt-1">Penulis : <?= $berita['penulis']; ?></span>
              <span>&nbsp;-&nbsp; <?= $berita['tanggal']; ?></span> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="section">
  <div class="container">

    <div class="row blog-entries element-animate">
      <div class="col-md-12 col-lg-8 main-content">
        <div class="post-content-body text-justify">

          <div class="mg-card-box padding-20">
            <?php foreach ($profilMts as $p): ?>
              <center>
                <p><img decoding="async" class="alignnone wp-image-1315"
                    src="<?php echo base_url() . '/assets/photo/profil/' . $p['photo'] ?>" alt="" width="234"
                    height="248" />
                </p>
              </center>
              <p style="text-align: justify;">
                <?= $p['sambutan']; ?>
              </p>
              <!-- <p style="text-align: justify;">Assalamualaikum Warahmatullah Wabarakatuh</p>
              <p style="text-align: justify;">Kami mengucapkan selamat datang di Website kami Sekolah Menengah Kejuruan
                Negeri (SMKN) 1 Cimahi yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa masyarakat
                guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah
                kami.</p>
              <p style="text-align: justify;">Kami selaku pimpinan sekolah mengucapkan terima kasih kepada tim pembuat
                Website ini yang telah berusaha untuk dapat lebih memperkenalkan segala perihal yang dimiliki oleh
                sekolah. Dan tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada
                seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi
                kemajuan Website ini lebih lanjut.</p>
              <p style="text-align: justify;">Saya berharap Website ini dapat dijadikan sarana interaksi yang positif baik
                antar warga sekolah maupun masyarakat pada umumnya sehingga sehingga informasi dapat tersampaikan dengan
                baik. Semoga Allah SWT memberikan kekuatan bagi kita semua untuk mencerdaskan anak-anak bangsa.</p>
              <p style="text-align: justify;">Wassalamualikum Wr.Wb.</p>
              <p>Kepala SMK Negeri 1 Cimahi</p>
              <p>&nbsp;</p>
              <p><strong>Agus Priyatmono Nugroho, S.Pd., M.Si.</strong></p> -->
            <?php endforeach; ?>
          </div>

        </div>
      </div>

      <!-- END main-content -->

      <div class="col-md-12 col-lg-4 sidebar">
        <!-- sidebar box -->
        <div class="sidebar-box">
          <h3 class="heading">Posting terbaru</h3>
          <div class="post-entry-sidebar">
            <ul>
              <?php foreach ($beritalist as $b): ?>
                <li>
                  <a href="<?= base_url(); ?>C_home/DetailBerita/<?= $b['id_berita']; ?>">
                    <img src="<?php echo base_url() . '/assets/photo/' . $b['gambar'] ?>" alt="Image placeholder"
                      class="me-4 rounded">
                    <div class="text">
                      <h4 style="color : black;">
                        <?= $b['judul']; ?>
                      </h4>
                      <div class="post-meta">
                        <span class="mr-2">
                          <?= $b['tanggal']; ?>
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <!-- END sidebar-box -->
        <!-- <div class="sidebar-box">
            <div class="card mb-1" style="height: 250px">
              <div class="card-header text-white bg-success">
                <h5 class="fw-bold" style="text-align: center;">KATEGORI</h5>
              </div>
              <div class="card-body" style="padding: 0.5rem 0.5rem; height: 100%; overflow:auto;">
                <ul>
                  <?php foreach ($beritalist as $b): ?>
                    <li>
                      <a href="<?= base_url(); ?>front/C_home/DetailBerita/<?= $b['id_berita']; ?>">
                        <img src="<?php echo base_url() . '/assets/photo/' . $b['gambar'] ?>" alt="Image placeholder" class="me-4 rounded">
                        <div class="text">
                          <h4 style="color : black;"><?= $b['judul']; ?></h4>
                          <div class="post-meta">
                            <span class="mr-2"><?= $b['tanggal']; ?></span>
                          </div>
                        </div>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="card-footer bg-success"></div>
            </div>
          </div> -->
        <!-- END sidebar-box -->

        <div class="sidebar-box">
          <div class="card mb-1" style="height: 250px">
            <div class="card-header text-white bg-success">
              <h5 class="fw-bold" style="text-align: center;">KATEGORI</h5>
            </div>
            <div class="card-body" style="padding: 0.5rem 0.5rem; height: 100%; overflow:auto;">
              <ul style="margin: 0rem; padding-left: 0rem;">
                <?php foreach ($kategori as $k): ?>
                  <li class="list-unstyled">
                    <a href="<?= base_url(); ?>front/C_kategoriBerita/index/<?= $k['id_kategori']; ?>">
                      <?= $k['kategori']; ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="card-footer bg-success"></div>
          </div>
        </div>
        <!-- END sidebar-box -->

        <!-- <div class="sidebar-box">
            <h3 class="heading">Tags</h3>
            <ul class="tags">
              <li><a href="#">Travel</a></li>
              <li><a href="#">Adventure</a></li>
              <li><a href="#">Food</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Freelancing</a></li>
              <li><a href="#">Travel</a></li>
              <li><a href="#">Adventure</a></li>
              <li><a href="#">Food</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Freelancing</a></li>
            </ul>
          </div>
        </div> -->
        <!-- END sidebar -->

      </div>
    </div>
</section>