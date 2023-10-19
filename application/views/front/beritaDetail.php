<div class="site-cover site-cover-sm same-height overlay single-page"
  style="background-image: url('<?php echo base_url() . '/assets/assets_front/images/bg-detail.jpg' ?>');">
  <div class="container">
    <div class="row same-height justify-content-center">
      <div class="col-md-6">
        <div class="post-entry text-center">
          <h1 class="mb-4">
            <?= $berita['judul']; ?>
          </h1>
          <div class="post-meta align-items-center text-center">
            <!-- <figure class="author-figure mb-0 me-3 d-inline-block"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure> -->
            <span class="d-inline-block mt-1">Penulis :
              <?= $berita['penulis']; ?>
            </span>
            <span>&nbsp;-&nbsp;
              <?= $berita['tanggal']; ?>
            </span>
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
          <div class="row my-4">
            <div class="col-md-12 mb-4">
              <center>
                <img src="<?php echo base_url() . '/assets/photo/' . $berita['gambar'] ?>" alt="Image placeholder"
                  class="img-fluid rounded">
              </center>
            </div>
            <!-- <div class="col-md-6 mb-4">
                <img src="images/img_2_horizontal.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <div class="col-md-6 mb-4">
                <img src="images/img_3_horizontal.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div> -->
          </div>
          <p class="text-justify" style="text-align:justify;"></p>
          <?= $berita['isi_berita']; ?>
          </p>
        </div>
        <div class="pt-5">
          <p style="text-align:justify;"></p>Categories:
          <?= $berita['kategori_berita']; ?>
          </p>
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


<!-- Start posts-entry -->
<!--  <section class="section posts-entry posts-entry-sm bg-light">
    <div class="container">
      <div class="row mb-4">
        <div class="col-12 text-uppercase text-black">More Blog Posts</div>
      </div>
      <div class="row">
        <?php foreach ($berita as $b): ?>
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="single.html" class="img-link">
              <img src="images/img_1_horizontal.jpg" alt="Image" class="img-fluid">
            </a>
            <span class="date">Apr. 14th, 2022</span>
            <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p><a href="#" class="read-more">Continue Reading</a></p>
          </div>
        </div>
        <?php endforeach; ?>
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="single.html" class="img-link">
              <img src="images/img_2_horizontal.jpg" alt="Image" class="img-fluid">
            </a>
            <span class="date">Apr. 14th, 2022</span>
            <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p><a href="#" class="read-more">Continue Reading</a></p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="single.html" class="img-link">
              <img src="images/img_3_horizontal.jpg" alt="Image" class="img-fluid">
            </a>
            <span class="date">Apr. 14th, 2022</span>
            <h2><a href="single.html">UK sees highest inflation in 30 years</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p><a href="#" class="read-more">Continue Reading</a></p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="single.html" class="img-link">
              <img src="images/img_4_horizontal.jpg" alt="Image" class="img-fluid">
            </a>
            <span class="date">Apr. 14th, 2022</span>
            <h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p><a href="#" class="read-more">Continue Reading</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
   --><!-- End posts-entry -->