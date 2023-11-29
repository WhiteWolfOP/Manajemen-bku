<!-- Views untuk mengedit data bbm -->
<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Tambah Data BBM dan Kota</h6>
                        </div>
                    </div>
                    <div class="card-body px-4 py-2">
                        <a class="btn btn-sm bg-gradient-success mb-3" href="<?= site_url('bbm') ?>">Kembali</a>
                        <form action="<?= site_url('bbm/update/' . $bbmData['id']) ?>" method="post">
                            <div class="mb-3">
                                <label for="provinsi" class="form-label">Provinsi:</label>
                                <input type="text" class="form-control" name="provinsi" id="provinsi" value="<?= $bbmData['provinsi'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">Kota:</label>
                                <input type="text" class="form-control" name="kota" id="kota" value="<?= $bbmData['kota'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="harga_bbm" class="form-label">Harga BBM:</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" class="form-control" name="harga_bbm" id="harga_bbm" value="<?= $bbmData['harga_bbm'] ?>">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
