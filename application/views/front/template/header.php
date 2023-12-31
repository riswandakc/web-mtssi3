<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="<?= base_url(); ?>assets/assets_front/fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/assets_front/fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/assets_front/css/tiny-slider.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/assets_front/css/aos.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/assets_front/css/glightbox.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/assets_front/css/style.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/assets_front/css/flatpickr.min.css">
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/img/favicon.png" type="image/x-icon">

	<!-- bootstrap datatables -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

	<title>
		<?= $title; ?>
	</title>
	<style>
		.a {
			text-decoration: none !important;

		}
	</style>
</head>

<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav" style=" background-color:  #198754;">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-1 align-center">
							<a href="index.html" class="logo m-0 float-start m-1">
								<img src="<?= base_url(); ?>assets/img/logo.png"" alt="" width=" 70px">
								<!-- <h5>MTs SI 3</h5> -->
							</a>
						</div>
						<div class="col-10 text-center">
							<!-- <form action="#" class="search-form d-inline-block d-lg-none">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form> -->

							<ul
								class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto font-weight-bold">
								<li class=""><a href="<?= base_url(); ?>C_home">Home</a></li>
								<li class="has-children">
									<a href="#">Profile</a>
									<ul class="dropdown">
										<li><a href="<?= base_url(); ?>front/C_profil/sambutan">Sambutan Kepala
												Madrasah</a></li>
										<li><a href="<?= base_url(); ?>front/C_profil/LatarBelakang">Latar Belakang
												Pendirian</a></li>
										<li><a href="<?= base_url(); ?>front/C_profil/strukturMD">Struktur Organisasi
												Madrasah</a></li>
										<li><a href="<?= base_url(); ?>front/C_profil/strukturLembaga">Struktur Lembaga
												Penyelenggara / Yayasan</a></li>
										<li><a href="<?= base_url(); ?>front/C_profil/VisiMisi">Visi Misi Madrasah</a>
										</li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#">PTK</a>
									<ul class="dropdown">
										<li><a href="<?= base_url(); ?>front/C_ptk">Pendidik</a></li>
										<li><a href="#">Aktifitas PTK</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#">Peserta Didik</a>
									<ul class="dropdown">
										<li><a href="<?= base_url(); ?>front/C_aktifitas">Aktifitas Peserta Didik</a>
										</li>
										<li><a href="#">Absensi</a></li>
										<li><a href="#">Database PTK</a></li>
										<li><a href="#">Biaya Pendidikan</a></li>
										<li><a href="#">Alumni</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#">MPSII</a>
									<ul class="dropdown">
										<li><a href="#">Sejarah</a></li>
										<li><a href="<?= base_url(); ?>front/C_profil/strukturMpsii">Struktur
												Pengurus</a></li>
										<li><a href="<?= base_url(); ?>front/C_kategoriBerita/mpsii">Informasi
												kegiatan</a>
										</li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#">SEPMI</a>
									<ul class="dropdown">
										<li><a href="#">Sejarah</a></li>
										<li><a href="<?= base_url(); ?>front/C_profil/strukturSepmi">Struktur
												Pengurus</a></li>
										<li><a href="<?= base_url(); ?>front/C_kategoriBerita/sepmi">Informasi
												kegiatan</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#">Pembelajaran</a>
									<ul class="dropdown">
										<li><a href="#">Buku Elektronik</a></li>
										<li><a href="#">Video Edukasi</a></li>
									</ul>
								</li>
								<li class="has-children">
									<a href="#">Evaluasi</a>
									<ul class="dropdown">
										<li><a href="#">CBT/SBT</a></li>
										<li><a href="#">Hasil Evaluasi</a></li>
										<li><a href="#">Raport Digital</a></li>
									</ul>
								</li>
								<li><a href="category.html">Regulasi</a></li>
								<li><a href="category.html">Download</a></li>
							</ul>
						</div>
						<div class="col-1 text-end">
							<a href="#"
								class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>
							<a href="<?= base_url(); ?>admin/C_login" class="btn btn-outline-warning"
								target="_blank">Login</a>
							<!-- <form action="#" class="search-form d-none d-lg-inline-block">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>