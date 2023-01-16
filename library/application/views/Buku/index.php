<div class="container" style="margin-top: 40px;">


    <div class="row">
        <div class="col-md-10 text-center">
            <h3 class="collapse-item">list data buku</h3>
        </div>
        <div class="card-body ml-md-3">
            <div class="row mt-3">
                <div class="col-md-6">
                    <?php if ($this->session->flashdata('flash')) : ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Data Buku </strong> Berhasil <?= $this->session->flashdata('flash'); ?>
                            <!-- <button type="button" data-bs-dismiss="alert" aria-label="Close"></button> -->
                        </div>

                    <?php endif; ?>
                </div>
            </div>
            <a href="<?= base_url(); ?>Buku/tambah" class="btn btn-primary">Tambah Data Buku</a>
            <ul class="list-group">
                <table class="table table-striped mt-2" id="datatablesSimple">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">JUDUL</th>
                            <th scope="col">PENGARANG</th>
                            <th scope="col">PENERBIT</th>
                            <th scope="col">RAK</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($Buku as $bku) : ?>
                            <tr>
                                <td><?= $bku['id']; ?></td>
                                <td><?= $bku['judul']; ?></td>
                                <td><?= $bku['pengarang']; ?></td>
                                <td><?= $bku['penerbit']; ?></td>
                                <td><?= $bku['rak']; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url(); ?>Buku/edit/<?= $bku['id']; ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <a href="<?= base_url(); ?>Buku/hapus/<?= $bku['id']; ?>" class="btn btn-sm btn-danger btn-trash" onclick="return confirm('yakin!!!');">HAPUS</a>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </ul>
        </div>
    </div>
</div>