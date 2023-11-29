<!-- edit.php -->

<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Edit Data Bagian DPRD</h6>
                        </div>
                    </div>
                    <div class="card-body px-4 py-2">
                        <a class="btn btn-sm bg-gradient-success mb-3" href="<?= site_url('bagian_dprd') ?>">Kembali</a>
                        <form action="<?= site_url('bagian_dprd/edit/' . $bagian['id']) ?>" method="post">
                            <div class="mb-3">
                                <label for="nama_bagian" class="form-label">Nama Bagian:</label>
                                <input type="text" class="form-control" name="nama_bagian" id="nama_bagian" value="<?= $bagian['nama_bagian'] ?>">
                            </div>
                            <!-- <div class="mb-3">
                                <label for="sisa_anggaran" class="form-label">Sisa Anggaran:</label>
                                <input type="text" class="form-control" name="sisa_anggaran" id="sisa_anggaran" placeholder="Masukkan Sisa Anggaran" required>
                            </div> -->
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
