<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <?= $title; ?>
        </h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Profil</label>
                    <input type="hidden" name="id_profil" value="<?= $profil['id_profil']; ?>" class="form-control">
                    <input type="text" name="profil" value="<?= $profil['profil']; ?>" class="form-control" readonly>
                    <?= form_error('profil', '<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Photo</label>
                    <input type="file" name="photo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Sejarah / Latar Belakang</label>
                    <textarea class="form-control" id="sejarah" name="sejarah"
                        rows="15"><?= $profil['sejarah']; ?></textarea>
                    <!-- <?= form_error('sejarah', '<div class="text-small text-danger"></div>'); ?> -->
                </div>
                <div class="form-group">
                    <label for="">Sambutan</label>
                    <div class="text-small text-danger">khusus MTS</div>
                    <textarea class="form-control" id="sambutan" name="sambutan"
                        rows="15"><?= $profil['sambutan']; ?></textarea>
                    <!-- <?= form_error('sambutan', '<div class="text-small text-danger"></div>'); ?> -->
                </div>
                <div class="form-group">
                    <label for="">Struktur 1</label><br>
                    <img src="<?php echo base_url() . '/assets/photo/profil/' . $profil['struktur1'] ?>" width="200px"
                        class="mb-2">
                    <input type="file" name="struktur1" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Struktur 2</label><br>
                    <img src="<?php echo base_url() . '/assets/photo/profil/' . $profil['struktur2'] ?>" width="200px"
                        class="mb-2">
                    <input type="file" name="struktur2" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Visi</label>
                    <input type="text" name="visi" value="<?= $profil['visi']; ?>" class="form-control">
                    <!-- <?= form_error('visi', '<div class="text-small text-danger"></div>'); ?> -->
                </div>
                <div class="form-group">
                    <label for="">Misi</label>
                    <textarea class="form-control" id="misi" name="misi" rows="15"> <?= $profil['profil']; ?></textarea>
                    <!-- <?= form_error('misi', '<div class="text-small text-danger"></div>'); ?> -->
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

</div>