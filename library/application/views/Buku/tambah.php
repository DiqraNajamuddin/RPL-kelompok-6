<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container" style="margin-top: 25px;">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        Tambah Data buku
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="number" name="id" class="form-control" id="id">
                                <small class="form-text text-danger"><?= form_error('id'); ?></small>
                            </div>

                            <div class="form-group mt-3">
                                <label>JUDUL</label>
                                <input type="text" name="judul" class="form-control" id="judul">
                                <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                            </div>
                            <div class="form-group mt-3">
                                <label>PENGARANG</label>
                                <input type="text" name="pengarang" class="form-control" id="pengarang">
                                <small class="form-text text-danger"><?= form_error('pengarang'); ?></small>
                            </div>

                            <div class="form-group mt-3">
                                <label>PENERBIT</label>
                                <input type="date" class="form-control" name="penerbit" rows="4" id="penerbit"></input>
                                <small class="form-text text-danger"><?= form_error('penerbit'); ?></small>
                            </div>
                            <div class="form-group mt-3">
                                <label>RAK</label>
                                <input type="text" name="rak" class="form-control" id="rak">
                                <small class="form-text text-danger"><?= form_error('rak'); ?></small>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2" style="float: right;">Tambah Data Buku</button>
                        </form>


                    </div>
                </div>

            </div>
        </div>

    </div>

</body>

</html>