    <div class="section search-result-wrap">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">Category: <!-- <?= $judul['kategori']; ?> --></div>
				</div>
			</div>
			<div class="row posts-entry">
				<div class="col-lg-8">
				  <?php foreach ($beritaBykategori as $b): ?>
					<div class="row blog-entry blog-entry-search-item mb-3">
						<div class="col-md-5">
							<a href="single.html" class="img-link me-4">
								<img src="<?php echo base_url().'/assets/photo/'.$b->gambar ?>" alt="Image" class="img-fluid" width="300px">
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

					<div class="row text-start pt-5 border-top">
						<div class="col-md-12">
							<div class="custom-pagination">
								<span>1</span>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<span>...</span>
								<a href="#">15</a>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-4 sidebar">
					
					<div class="sidebar-box search-form-wrap mb-4">
						<form action="#" class="sidebar-search-form">
							<span class="bi-search"></span>
							<input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
						</form>
					</div>
					<!-- END sidebar-box -->
					<div class="sidebar-box" style="height:400px">
						<h3 class="heading">Popular Posts</h3>
						<div class="post-entry-sidebar" style="height:100%; overflow:auto;">
							<ul>
								<?php foreach ($beritalist as $b): ?>
								  <li>
										<a href="<?= base_url(); ?>front/C_home/DetailBerita/<?= $b['id_berita']; ?>">
											<img src="<?php echo base_url().'/assets/photo/'.$b['gambar'] ?>" alt="Image placeholder" class="me-4 rounded">
											<div class="text">
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
					</div>
						<!-- END sidebar-box -->

					<div class="sidebar-box" style="height: 250px">
						<h3 class="heading">Categories</h3>
						<div class="list-kategori" style="height:100%; overflow:auto;">
							<ul style="margin: 0rem; padding-left: 0rem;">
								<?php foreach ($kategori as $k): ?>
									<li class="list-unstyled">
										<a href=""><?= $k['kategori']; ?></a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
					<!-- END sidebar-box -->

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
					</div>

				</div>
			</div>
		</div>
	</div>