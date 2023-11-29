<!-- edit.php -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<h1>Konfirmasi Data Perjalanan Dinas</h1>
<form action="<?= site_url('/laporan/konfirmasi/' . $laporan_perjalanan_dinas['id']) ?>" method="post">
    <p>Nama pelaksana : <?= $laporan_perjalanan_dinas["nama_pelaksana"] ?></p>
    <p>Perjalanan dinas ke : Provinsi <?= $laporan_perjalanan_dinas["provinsi"] ?>, Kab <?= $laporan_perjalanan_dinas["kota"] ?></p>
    <p>Biaya pengeluaran selama dinas : Rp <?= number_format($laporan_perjalanan_dinas["biaya"], 0, ".", ".") ?></p>
    <p>Anggota yang terlibat : <?= ($laporan_perjalanan_dinas["anggota"]) ? $laporan_perjalanan_dinas["anggota"] : "-" ?></p>
    <input type="hidden" name="perdin_id" id="perdin_id" value="<?= $laporan_perjalanan_dinas["perdin_id"] ?>">
    <input type="hidden" name="bagian_dprd_id" id="bagian_dprd_id" value="<?= $laporan_perjalanan_dinas["bagian_dprd_id"] ?>">
    <input type="hidden" name="debet" id="debet" value="<?= $laporan_perjalanan_dinas["biaya"] ?>">
    <input type="hidden" name="keterangan" id="keterangan" value="<?= "Perjalanan dinas ke kab/kota " . $laporan_perjalanan_dinas["kota"] ?>">
    <label for="">Status</label>
    <select name="status" id="status">
        <option value="">Pilih</option>
        <option value="2" <?php if ($laporan_perjalanan_dinas["status"] == 2) {
                                echo "selected";
                            } ?>>Setujui</option>
        <option value="3" <?php if ($laporan_perjalanan_dinas["status"] == 3) {
                                echo "selected";
                            } ?>>Tolak</option>
    </select>
    <button class="btn btn-primary" type="submit">Konfirmasi sebagai pengeluaran</button>
    <br>
    <small class="text-warning">* Cek laporan perjalanan dinas terlebih dahulu sebelum melakukan konfirmasi.</small>
</form>
<?= $this->endSection() ?>