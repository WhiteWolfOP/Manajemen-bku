<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Kirim Anggaran</h6>
                        </div>
                    </div>
                    <div class="card-body px-4 py-3">
                        <a class="btn btn-sm bg-gradient-success mb-3" href="<?= site_url('pengiriman_uang') ?>">Kembali</a>
                        <form action="<?= site_url('pengiriman_uang/create') ?>" method="post">
                        <div class="col-md-6">
                                <label for="bagian_dprd_id">Pilih Bagian:</label>
                                <select name="bagian_dprd_id" required>
                                    <?php foreach ($bagianDprd as $bagian): ?>
                                        <option value="<?= $bagian['id'] ?>"><?= $bagian['nama_bagian'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="jumlah_uang">Jumlah Uang:</label>
                                <input type="text" name="jumlah_uang"><br>
                            </div>
                            <div class="col-md-6">
                                <label for="tanggal_pengiriman">Tanggal Pengiriman:</label>
                                <input type="date" name="tanggal_pengiriman"><br>
                            </div>
                            <div class="col-md-6">
                                <label for="keterangan">Keterangan:</label>
                                <textarea name="keterangan"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
