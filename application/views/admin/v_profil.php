<div class="container-fluid">
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div> -->

    <!-- <a class="btn btn-md btn-primary mb-3" href="<?= base_url(); ?>admin/C_profilSekolah/tambahData/"><i
            class="fas fa-plus"></i> Tambah data</a> -->
    <!-- Button trigger modal -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">
                <?= $title; ?>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="50%       " cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th width="10px">No</th>
                            <th>Profil</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($profil as $p): ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= $p['profil']; ?>
                                </td>
                                <td>
                                    <!-- <a class="btn btn-sm btn-warning"
                                        href="<?= base_url(); ?>admin/C_profilSekolah/Detail/<?= $p['id_profil']; ?>"><i
                                            class=" fas fa-eye"></i></a> -->
                                    <a class="btn btn-sm btn-primary"
                                        href="<?= base_url(); ?>admin/C_profilSekolah/Update/<?= $p['id_profil']; ?>"><i
                                            class=" fas fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger"
                                        href="<?= base_url(); ?>admin/C_profilSekolah/Delete/<?= $p['id_profil']; ?>"><i
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