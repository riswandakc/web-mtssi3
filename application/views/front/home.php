

	<!-- Start retroy layout blog posts -->
	<section class="section bg-light" style="padding-bottom: 1rem; padding-top: 0.5rem;">
		<div class="container">
			<div class="banner-web mb-2" >
				<a href="">
					<img src="<?= base_url(); ?>assets/assets_front/images/banner-web.png" alt="" width="100%">
				</a>
			</div>
			<div class="row align-items-stretch retro-layout">
				<!-- start carousel berita left -->
				<div class="col-lg-7">
					<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?php echo base_url().'/assets/assets_front/images/hero_1.jpg' ?>" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
									<h5>First slide label</h5>
									<p>Some representative placeholder content for the first slide.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="<?php echo base_url().'/assets/assets_front/images/hero_2.jpg' ?>" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
									<h5>Second slide label</h5>
									<p>Some representative placeholder content for the second slide.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="<?php echo base_url().'/assets/assets_front/images/hero_3.jpg' ?>" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
									<h5>Third slide label</h5>
									<p>Some representative placeholder content for the third slide.</p>
								</div>
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
				<!-- end carousel berita left -->
				<!-- start carousel galeri right -->
				<div class="col-md-5">
					
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						<!-- <div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div> -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?php echo base_url().'/assets/assets_front/images/img_3_horizontal.jpg' ?>" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?php echo base_url().'/assets/assets_front/images/img_3_horizontal.jpg' ?>" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?php echo base_url().'/assets/assets_front/images/img_3_horizontal.jpg' ?>" class="d-block w-100" alt="...">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>

				</div>
				<!-- end carousel galeri right -->
			</div>
		</div>
	</section>
	<!-- End retroy layout blog posts -->
	
	<!-- Start posts-entry -->
	<section class="section posts-entry" style="padding-top:2rem; padding-bottom: 0rem;">
		<div class="container">
			<!-- <div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Business</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div> -->
			<div class="row g-3">
			  <div class="col-md-8">
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h4 class="">Artikel Terbaru</h4>
							</div>
							<div class="card-body">
								<div class="widget">
									<div class="post-entry-footer">
										<ul>
											<?php foreach ($berita as $b): ?>
											<li>
												<a href="<?= base_url(); ?>front/C_home/DetailBerita/<?= $b['id_berita']; ?>">
													<img src="<?php echo base_url().'/assets/photo/'.$b['gambar'] ?>" alt="Image placeholder" class="me-4 rounded" width="60px;">
													<div class="text">
														<h6 style="color : black;"><?= $b['judul']; ?></h6>
														<div class="post-meta">
															<span class="mr-2"><?= $b['kategori']; ?></span><br>
															<span class="mr-2"><?= $b['tanggal']; ?></span>
														</div>
													</div>
												</a>
											</li>
											<?php endforeach; ?>
										</ul>
									</div>
									
								</div> <!-- /.widget -->
		
							</div>
							<div class="card-footer" style="height: 57px">
							<?= $this->pagination->create_links(); ?>
							</div>
						</div>
					</div> <!-- /.col-lg-4 -->
					<div class="col-md-6">
						<div class="sejarah mb-2">
							<a href="http://">
								<img src="<?= base_url(); ?>assets/assets_front/images/sejarah.png" alt="" width="100%">
							</a>
						</div>
						<div class="card mb-2" style="height: 300px">
							<div class="card-header">
								<h5 class="">Informasi</h5>
							</div>
							<div class="card-body" style="height: 100%; overflow:auto;">
								<div class="widget">
									<div class="post-entry-footer">
										<ul>
										  <?php foreach ($informasi as $i): ?>
											<li>
												<a href="<?= base_url(); ?>front/C_home/DetailBerita/<?= $i['id_berita']; ?>">
													<img src="<?php echo base_url().'/assets/photo/'.$i['gambar'] ?>" alt="Image placeholder" class="me-4 rounded" width="80px;">
													<div class="text">
														<h7 style="color : black;"><?= $i['judul']; ?></h7>
														<div class="post-meta">
															<span class="mr-2"><?= $i['tanggal']; ?></span>
														</div>
													</div>
												</a>
											</li>
										  <?php endforeach; ?>
										</ul>
									</div>
								</div> <!-- /.widget -->
							</div>
						</div>
						<div class="card mb-1" style="height: 300px">
							<div class="card-header">
								<h5 class="">Video</h5>
							</div>
							<div class="card-body" style="height: 100%; overflow:auto;">
								<div class="widget">
									<div class="post-entry-footer">
										<ul>
										  <?php foreach ($video as $v): ?>
											<li>
												<a href="<?= base_url(); ?>front/C_home/DetailBerita/<?= $v['id_berita']; ?>">
													<img src="<?php echo base_url().'/assets/photo/'.$v['gambar'] ?>" alt="Image placeholder" class="me-4 rounded" width="300px;">
													<div class="text">
														<h7 style="color : black;"><?= $v['judul']; ?></h7>
														<div class="post-meta">
															<span class="mr-2"><?= $v['tanggal']; ?></span>
														</div>
													</div>
												</a>
											</li>
										  <?php endforeach; ?>
										</ul>
									</div>
								</div> <!-- /.widget -->
							</div>
						</div>
						<div class="card mb-1" style="height: 300px">
							<div class="card-header">
								<h5 class="">Panduan</h5>
							</div>
							<div class="card-body" style="height: 100%; overflow:auto;">
								<div class="widget">
									<div class="post-entry-footer">
										<ul>
										  <?php foreach ($panduan as $p): ?>
											<li>
												<a href="<?= base_url(); ?>front/C_home/DetailBerita/<?= $p['id_berita']; ?>">
													<img src="<?php echo base_url().'/assets/photo/'.$p['gambar'] ?>" alt="Image placeholder" class="me-4 rounded" width="300px;">
													<div class="text">
														<h6 style="color : black;"><?= $p['judul']; ?></h6>
														<div class="post-meta">
															<span class="mr-2"><?= $p['tanggal']; ?></span>
														</div>
													</div>
												</a>
											</li>
										  <?php endforeach; ?>
										</ul>
									</div>
								</div> <!-- /.widget -->
							</div>
						</div>
					</div>
					<div class="mt-4">
						<img src="<?= base_url(); ?>assets/assets_front/images/benner-hab-2.png" alt="" width="100%">
					</div>
					<div class="mb-2">
						<a href="http://"> 
							<img src="<?= base_url(); ?>assets/assets_front/images/benner-ki-kd.png" alt="" width="100%">
						</a>
					</div>
				</div>
			  </div>
			  <div class="col-md-4">
				<!-- <div class="col-md-4"> -->
					<div class="card mb-1">
						<div class="card-header text-white bg-success">
							<h5 class="fw-bold" style="text-align: center;">ORGANISASI SISWA MTS.SI3</h5>
						</div>
						<div class="card-body" style="padding : 0.5rem 0.5rem">
						  <center>
							<a href="http://"> 
								<img src="<?= base_url(); ?>assets/assets_front/images/SEPMI_3.jpg" alt="">
							</a>
						  </center>
						</div>
						<div class="card-footer bg-success"></div>
					</div>
					<div class="card mb-1">
						<div class="card-header text-white bg-success">
							<h5 class="fw-bold" style="text-align: center;">SIMPATIKA</h5>
						</div>
						<div class="card-body" style="padding : 0.5rem 0.5rem">
						  <center>
							<a href="http://"> 
								<img src="<?= base_url(); ?>assets/assets_front/images/simpatika.jpg" alt="" width="100%"><!-- 250px -->
							</a>
						  </center>
						</div>
						<div class="card-footer bg-success"></div>
					</div>
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
					<div class="card mb-1"  style="height: 250px">
						<div class="card-header text-white bg-success">
							<h5 class="fw-bold" style="text-align: center;">WEB LINK</h5>
						</div>
						<div class="card-body" style="padding: 0.5rem 0.5rem; height: 100%; overflow:auto;">
							<ul style="margin: 0rem; padding-left: 0rem;">
								<?php foreach ($kategori as $k): ?>
									<li class="list-unstyled">
										<a href=""><?= $k['kategori']; ?></a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="card-footer bg-success"></div>
					</div>
				<!-- </div> --> <!-- /.col-md-4 -->
			  </div>
			</div>
		</div>
	</section>
	<!-- End posts-entry -->

	<!-- Start posts-entry -->
	<section class="section posts-entry posts-entry-sm bg-light" style="padding-top: 0.5rem;">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!-- <div class="mb-2">
						<a href="http://"> 
							<img src="<?= base_url(); ?>assets/assets_front/images/benner-ki-kd.png" alt="" width="100%">
						</a>
					</div> -->
					<div class="card">
						<h6 class="card-header">
							Aktifitas Sekolah
						</h6>
						<div class="card-body">

						</div>
					</div>
				</div>
				<div class="col-md-4">

				</div>
			</div>
		</div>
	</section>
	<!-- End posts-entry -->

	<!-- Start posts-entry -->
	<!-- <section class="section posts-entry posts-entry-sm bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="<?= base_url(); ?>assets/assets_front/images/img_1_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="<?= base_url(); ?>assets/assets_front/images/img_2_horizontal.jpg" alt="Image" class="img-fluid">
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
							<img src="<?= base_url(); ?>assets/assets_front/images/img_3_horizontal.jpg" alt="Image" class="img-fluid">
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
							<img src="<?= base_url(); ?>assets/assets_front/images/img_4_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End posts-entry -->

	<!-- Start posts-entry -->
	<!-- <section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Culture</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>
			<div class="row g-3">
				<div class="col-md-9 order-md-2">
					<div class="row g-3">
						<div class="col-md-6">
							<div class="blog-entry">
								<a href="single.html" class="img-link">
									<img src="<?= base_url(); ?>assets/assets_front/images/img_1_sq.jpg" alt="Image" class="img-fluid">
								</a>
								<span class="date">Apr. 14th, 2022</span>
								<h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
								<p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="blog-entry">
								<a href="single.html" class="img-link">
									<img src="<?= base_url(); ?>assets/assets_front/images/img_2_sq.jpg" alt="Image" class="img-fluid">
								</a>
								<span class="date">Apr. 14th, 2022</span>
								<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
								<p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="list-unstyled blog-entry-sm">
						<li>
							<span class="date">Apr. 14th, 2022</span>
							<h3><a href="single.html">Don’t assume your user data in the cloud is safe</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</li>

						<li>
							<span class="date">Apr. 14th, 2022</span>
							<h3><a href="single.html">Meta unveils fees on metaverse sales</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</li>

						<li>
							<span class="date">Apr. 14th, 2022</span>
							<h3><a href="single.html">UK sees highest inflation in 30 years</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
 -->
	<!-- <section class="section">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Politics</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>

			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="<?= base_url(); ?>assets/assets_front/images/img_7_horizontal.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
							<div class="post-meta align-items-center text-left clearfix">
								<figure class="author-figure mb-0 me-3 float-start"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>
								<span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
								<span>&nbsp;-&nbsp; July 19, 2019</span>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="<?= base_url(); ?>assets/assets_front/images/img_6_horizontal.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
							<div class="post-meta align-items-center text-left clearfix">
								<figure class="author-figure mb-0 me-3 float-start"><img src="images/person_2.jpg" alt="Image" class="img-fluid"></figure>
								<span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
								<span>&nbsp;-&nbsp; July 19, 2019</span>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="<?= base_url(); ?>assets/assets_front/images/img_5_horizontal.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
							<div class="post-meta align-items-center text-left clearfix">
								<figure class="author-figure mb-0 me-3 float-start"><img src="images/person_3.jpg" alt="Image" class="img-fluid"></figure>
								<span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
								<span>&nbsp;-&nbsp; July 19, 2019</span>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>


				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="<?= base_url(); ?>assets/assets_front/images/img_4_horizontal.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
							<div class="post-meta align-items-center text-left clearfix">
								<figure class="author-figure mb-0 me-3 float-start"><img src="images/person_4.jpg" alt="Image" class="img-fluid"></figure>
								<span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
								<span>&nbsp;-&nbsp; July 19, 2019</span>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="<?= base_url(); ?>assets/assets_front/images/img_3_horizontal.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
							<div class="post-meta align-items-center text-left clearfix">
								<figure class="author-figure mb-0 me-3 float-start"><img src="images/person_5.jpg" alt="Image" class="img-fluid"></figure>
								<span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
								<span>&nbsp;-&nbsp; July 19, 2019</span>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="<?= base_url(); ?>assets/assets_front/images/img_2_horizontal.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
							<div class="post-meta align-items-center text-left clearfix">
								<figure class="author-figure mb-0 me-3 float-start"><img src="images/person_4.jpg" alt="Image" class="img-fluid"></figure>
								<span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
								<span>&nbsp;-&nbsp; July 19, 2019</span>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>


				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="<?= base_url(); ?>assets/assets_front/images/img_1_horizontal.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
							<div class="post-meta align-items-center text-left clearfix">
								<figure class="author-figure mb-0 me-3 float-start"><img src="images/person_3.jpg" alt="Image" class="img-fluid"></figure>
								<span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
								<span>&nbsp;-&nbsp; July 19, 2019</span>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="<?= base_url(); ?>assets/assets_front/images/img_4_horizontal.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							
							

							<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
							<div class="post-meta align-items-center text-left clearfix">
								<figure class="author-figure mb-0 me-3 float-start"><img src="images/person_2.jpg" alt="Image" class="img-fluid"></figure>
								<span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
								<span>&nbsp;-&nbsp; July 19, 2019</span>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="<?= base_url(); ?>assets/assets_front/images/img_3_horizontal.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							
							

							<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
							<div class="post-meta align-items-center text-left clearfix">
								<figure class="author-figure mb-0 me-3 float-start"><img src="images/person_5.jpg" alt="Image" class="img-fluid"></figure>
								<span class="d-inline-block mt-1">By <a href="#">David Anderson</a></span>
								<span>&nbsp;-&nbsp; July 19, 2019</span>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="#" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
 -->
	<!-- <div class="section bg-light">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Travel</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>

			<div class="row align-items-stretch retro-layout-alt">

				<div class="col-md-5 order-md-2">
					<a href="single.html" class="hentry img-1 h-100 gradient">
						<div class="featured-img" style="background-image: url('images/img_2_vertical.jpg');"></div>
						<div class="text">
							<span>February 12, 2019</span>
							<h2>Meta unveils fees on metaverse sales</h2>
						</div>
					</a>
				</div>

				<div class="col-md-7">

					<a href="single.html" class="hentry img-2 v-height mb30 gradient">
						<div class="featured-img" style="background-image: url('images/img_1_horizontal.jpg');"></div>
						<div class="text text-sm">
							<span>February 12, 2019</span>
							<h2>AI can now kill those annoying cookie pop-ups</h2>
						</div>
					</a>

					<div class="two-col d-block d-md-flex justify-content-between">
						<a href="single.html" class="hentry v-height img-2 gradient">
							<div class="featured-img" style="background-image: url('images/img_2_sq.jpg');"></div>
							<div class="text text-sm">
								<span>February 12, 2019</span>
								<h2>Don’t assume your user data in the cloud is safe</h2>
							</div>
						</a>
						<a href="single.html" class="hentry v-height img-2 ms-auto float-end gradient">
							<div class="featured-img" style="background-image: url('images/img_3_sq.jpg');"></div>
							<div class="text text-sm">
								<span>February 12, 2019</span>
								<h2>Startup vs corporate: What job suits you best?</h2>
							</div>
						</a>
					</div>  

				</div>
			</div>

		</div>
	</div>
 -->
