?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Edit Data Anggaran</h6>
                        </div>
                    </div>
                    <div class="card-body px-4 py-2">
                        <a class="btn btn-sm bg-gradient-success mb-3" href="<?= site_url('pengiriman_uang') ?>">Kembali</a>
                        <form action="<?= site_url('pengiriman_uang/edit/' . $pengiriman['id']) ?>" method="post">
                            <div class="mb-3">
                                <label for="pengiriman_uang" class="form-label">Anggaran:</label>
                                <input type="text" class="form-control" name="pengiriman_uang" id="pengiriman_uang" value="<?= $pengiriman['pengiriman_uang'] ?>">
                            </div>
                            <div class="mb-3">
                            <label for="bagian_dprd_id">Pilih Bagian:</label>
                                <select name="bagian_dprd_id" required>
                                    <?php foreach ($bagianDprd as $bagian): ?>
                                        <option value="<?= $bagian['id'] ?>" <?= ($bagian['id'] == $pengiriman['bagian_dprd_id']) ? 'selected' : '' ?>><?= $bagian['nama_bagian'] ?></option>
                                    <?php endforeach; ?>
                                </select>
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