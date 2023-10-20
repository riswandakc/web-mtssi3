<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--  <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <?= $title; ?>
        </h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div> -->


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                <?= $title; ?>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>Photo</th>
                            <th>Judul banner</th>
                            <th>status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($galeri as $g): ?>
                            <tr>
                                <td><img src="<?php echo base_url() . '/assets/photo/' . $g->gambar ?>" width="400px"></td>
                                <td>
                                    <?= $g->judul; ?>
                                </td>
                                <td>
                                    <?= $g->status; ?>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-primary"
                                        href="<?= base_url(); ?>admin/C_galeri/Updategaleri/<?= $g->id_galeri; ?>"><i
                                            class=" fas fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger"
                                        href="<?= base_url(); ?>admin/C_galeri/Deletegaleri/<?= $g->id_galeri; ?>"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->