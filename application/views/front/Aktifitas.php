<div class="site-cover site-cover-sm same-height overlay single-page"
  style="background-image: url('<?php echo base_url() . '/assets/assets_front/images/kegiatan-siswa.jpg' ?>');">
  <div class="container">
    <div class="row same-height justify-content-center">
      <div class="col-md-6">
        <div class="post-entry text-center">
          <br><br><br>
          <h3 class="mb-4">
            <?= $title2; ?>
          </h3><br><br><br>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section search-result-wrap">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="heading">Daftar Kegiatan Siswa:</div>
      </div>
      <div class="container" style="padding: 0px;">
        <ul class="image-gallery"
          style="display:flex; flex-wrap: wrap; justify-content: center; gap: 10px; list-style: none; padding: 0px;">
          <?php foreach ($galeri as $g): ?>
            <li style="flex-basis: 270px;">
              <img src="<?php echo base_url() . '/assets/photo/' . $g->gambar ?>" alt=""
                style="object-fit: cover; max-width: 100%; height: auto; vertical-align: middle; border-radius: 5px;" />
              <div class="overlay">
                <center><span>
                    <?= $g->judul; ?>
                  </span></center>
              </div>
            </li>
            <!-- other items here -->
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>