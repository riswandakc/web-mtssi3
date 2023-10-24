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
                    <input type="text" name="profil" class="form-control">
                    <?= form_error('profil', '<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Photo</label>
                    <input type="file" name="photo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Sejarah</label>
                    <textarea class="form-control" id="sejarah" name="sejarah" rows="15"></textarea>
                    <!-- <?= form_error('sejarah', '<div class="text-small text-danger"></div>'); ?> -->
                </div>
                <div class="form-group">
                    <label for="">Sambutan</label>
                    <div class="text-small text-danger">khusus MTS</div>
                    <textarea class="form-control" id="sambutan" name="sambutan" rows="15"></textarea>
                    <!-- <?= form_error('sambutan', '<div class="text-small text-danger"></div>'); ?> -->
                </div>
                <div class="form-group">
                    <label for="">Struktur 1</label>
                    <input type="file" name="struktur1" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Struktur 2</label>
                    <input type="file" name="struktur2" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Visi</label>
                    <input type="text" name="visi" class="form-control">
                    <!-- <?= form_error('visi', '<div class="text-small text-danger"></div>'); ?> -->
                </div>
                <div class="form-group">
                    <label for="">Misi</label>
                    <textarea class="form-control" id="misi" name="misi" rows="15"></textarea>
                    <!-- <?= form_error('misi', '<div class="text-small text-danger"></div>'); ?> -->
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

</div>