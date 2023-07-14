
<div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('<?php echo base_url().'/assets/assets_front/images/bg-detail.jpg'?>');">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="post-entry text-center">
            <h1 class="mb-4">STRUKTUR ORGANISASI MTS SYARIKAT ISLAM 3</h1>
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
                <img src="" alt="">
                
                <p class="MsoNormal" style="text-indent: 36pt;" align="justify">SMP Negeri 1 Perak berdiri pada tanggal 18 Oktober 1982 di atas tanah seluas 9770 yang bertempat di Jalan Raya Perak, Desa Kalangsemanding, Kec. Perak, Kab. Jombang.</p>

                <p class="MsoNormal" style="text-indent: 36pt;" align="justify">Pada awal berdiri jumlah ruang yang ada, 6 ruang kelas belajar, 1 ruang guru, tata usaha dan kepala sekolah, 1 ruang keterampilan, 1 ruang perpustakaan, 1 ruang laboratorium IPA dan 1 ruang bimbingan konseling, dengan 1 Kepala Sekolah, 24 orang guru, 3 tenaga administrasi, 3 orang penjaga sekolah, dan 144 orang siswa.</p>

                <p class="MsoNormal" style="text-indent: 36pt;" align="justify">Didirikannya SMP Negeri 1 Perak karena melihat kondisi siswa lulusan SD/MI Negeri dan Swasta di sekitarnya banyak yang kesulitan mencari sekolah untuk melanjutkan pendidikan ke jenjang yang lebih tinggi.</p>

                <p class="MsoNormal" style="text-indent: 36pt;" align="justify">SMP Negeri 1 Perak terletak di tempat yang sangat strategis, yaitu dengan jalan utama antar Provinsi dan Stasiun Kereta Api Sembung Perak Jombang. Dari jalan raya menuju lokasi sekolah hanya berjarak  100 meter.</p>

                <p class="MsoNormal" style="text-indent: 36pt;" align="justify">Seiring dengan berjalannya waktu,SMP Negeri 1 Perak mengalami perkembangan yang sangat pesat. Saat ini jumlah ruang yang ada terdiri dari 27 ruang belajar,1 ruang kepala sekolah, 1 ruang wakasek, 1 ruang guru,1 ruang tata usaha, 1 ruang bimbingan konseling, 1 ruang Lab IPA,2 ruang Lab TIK, 1 ruang perpustakaan, 1 ruang ketrampilan, 1 ruang aula, 1 ruang kesenian, 1 ruang sanggar pramuka, 1 ruang OSIS, 1 Mushola, 1 gudang pramuka, 1 gudang alat kesenian, 1 gudang alat olah raga, 2 ruang kantin.</p>
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
					    <a href="<?= base_url(); ?>front/C_home/DetailBerita/<?= $b['id_berita']; ?>">
						    <img src="<?php echo base_url().'/assets/photo/'.$b['gambar'] ?>" alt="Image placeholder" class="me-4 rounded">
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
                        <img src="<?php echo base_url().'/assets/photo/'.$b['gambar'] ?>" alt="Image placeholder" class="me-4 rounded">
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
                      <a href="<?= base_url(); ?>front/C_kategoriBerita/index/<?= $k['id_kategori']; ?>"><?= $k['kategori']; ?></a>
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
