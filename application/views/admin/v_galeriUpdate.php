<div class="container-fluid">
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div> -->
    <div class="card shadow">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                <?= $title;?>
            </h4>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Judul Photo</label>
                    <input type="hidden" name="id_galeri" class="form-control">
                    <input type="text" name="judul" class="form-control" value="<?= $galeri['judul'] ?>"> 
                    <?= form_error('judul','<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Photo</label>
                    <input type="text" name="deskripsi" class="form-control" value="<?= $galeri['deskripsi'] ?>">
                    <?= form_error('deskripsi','<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="form-group">   
                    <label for="">gambar</label>
                    <input type="file" name="gambar" class="form-control mb-2" >
                    <img src="<?php echo base_url().'/assets/photo/'.$galeri['gambar'] ?>" width="100px">
                    <?= form_error('gambar','<div class="text-small text-danger"></div>');?>
                </div>
                <div class="form-group">
                    <label for="">status</label>
                        <select name="status" id="" class="custom-select">
                            <option value="<?= $galeri['status'] ?>"> <?= $galeri['status'] ?></option>
                                <option value="aktif"> Aktif </option>
                                <option value="tidak aktif"> Tidak Aktif </option>
                        </select>
                    <?= form_error('status', '<div class="text-small text-danger"></div>'); ?>
                </div>
                <button type="Submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>