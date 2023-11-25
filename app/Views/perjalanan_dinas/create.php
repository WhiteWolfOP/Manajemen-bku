<!-- create.php -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<h1>Tambah Data Perjalanan Dinas</h1>
<form action="<?= site_url('/perjalanan_dinas/create') ?>" method="post">
    <label for="pelaksana_id">Pilih Pelaksana:</label>
    <select name="pelaksana_id" required>
        <?php foreach ($namaPelaksana as $pelaksana) : ?>
            <option value="<?= $pelaksana['id'] ?>"><?= $pelaksana['nama_pelaksana'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <label for="bagian_dprd_id">Komisi:</label>
    <select name="bagian_dprd_id" required>
        <?php foreach ($bagian as $bgn) : ?>
            <option value="<?= $bgn['id'] ?>"><?= $bgn['nama_bagian'] ?></option>
        <?php endforeach; ?>
    </select>
    <label for="bbm_id">Pilih BBM:</label>
    <select name="bbm_id" required>
        <?php foreach ($bbm as $item) : ?>
            <option value="<?= $item['id'] ?>"><?= $item['kota'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <label for="biaya">Biaya:</label>
    <input type="text" name="biaya"><br>
    <label for="anggota">Anggota:</label>
    <textarea name="anggota" id="anggota" cols="30" rows="10"></textarea>
    <!-- Other fields -->
    <button type="submit">Simpan</button>
</form>
<?= $this->endSection() ?>