    <div class="section search-result-wrap">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">Category: <!-- <?= $judul['kategori']; ?> --></div>
				</div>
			</div>
			<div class="row posts-entry">
				<div class="col-lg-8">
				  <div class="container" style="height:900px; width:100%;">
				  	<div class="container-post" style="padding: 0.5rem 0.5rem; width:100%; height: 100%; overflow:auto;">
						<?php foreach ($beritaBykategori as $b): ?>
							<div class="row blog-entry blog-entry-search-item mb-3">
								<div class="col-md-5">
									<a href="single.html" class="img-link me-4">
										<img src="<?php echo base_url().'/assets/photo/'.$b->gambar ?>" alt="Image" class="img-fluid" width="260px">
									</a>
								</div>
								<div class="col-md-7">
									<span class="date"><?= $b->tanggal; ?> &bullet; <a href="#"><?= $b->kategori; ?></a></span>
									<h4><a href="<?= base_url(); ?>front/C_home/DetailBerita/<?= $b->id_berita; ?>"><?= $b->judul; ?></a></h4>
									<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p> -->
									<p><a href="<?= base_url(); ?>front/C_home/DetailBerita/<?= $b->id_berita; ?>" class="btn btn-sm btn-outline-primary">Read More</a></p>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				  </div>
				</div>

				<div class="col-lg-4">
					<div class="sidebar-box search-form-wrap mb-4">
						<form action="#" class="sidebar-search-form">
							<span class="bi-search"></span>
							<input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
						</form>
					</div>
					<!-- END sidebar-box -->
					
						<div class="card" style="height:450px">
							<div class="card-header text-white bg-success">
								<h4 class="fw-bold" style="text-align: center;">Artikel Terbaru</h4>
							</div>
							<div class="card-body" style="padding: 0.5rem 0.5rem; height: 100%; overflow:auto;">
								<div class="widget">
									<div class="post-entry-footer">
										<ul>
											<?php foreach ($beritalist as $b): ?>
											<li>
												<a href="<?= base_url(); ?>front/C_home/DetailBerita/<?= $b['id_berita']; ?>">
													<img src="<?php echo base_url().'/assets/photo/'.$b['gambar'] ?>" alt="Image placeholder" class="me-4 rounded" width="50px;" >
													<div class="text" style="margin: 10px;">
														<h6 style="color : black;"><?= $b['judul']; ?></h6>
														<div class="post-meta">
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
							<div class="card-footer bg-success"></div>
						</div>
					
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
<!-- 
					<div class="sidebar-box">
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
					</div> -->

				</div>
			</div>
		</div>
	</div>