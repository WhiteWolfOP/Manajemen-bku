<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<form id="rincianPerdinForm" action="<?= site_url('/rincian_perdin/create') ?>" method="post">
    <!-- Form lainnya -->
    <label for="uang_harian">Uang Harian:</label>
    <input type="text" name="uang_harian" id="uang_harian"><br>

    <label for="transportasi">Transportasi:</label>
    <input type="text" name="transportasi" id="transportasi"><br>

    <label for="uang_representasi">Uang Representasi:</label>
    <input type="text" name="uang_representasi" id="uang_representasi"><br>

    <label for="akomodasi">Akomodasi:</label>
    <input type="text" name="akomodasi" id="akomodasi"><br>

    <label for="tol">Tol:</label>
    <input type="text" name="tol" id="tol"><br>

    <label for="jumlah_hari">Jumlah Hari Perjalanan:</label>
    <input type="number" name="jumlah_hari" id="jumlah_hari"><br>

    <label for="jumlah_total">Jumlah Total:</label>
    <input type="text" name="jumlah_total" id="jumlah_total" readonly><br>

    <button type="button" onclick="hitungTotal()">Hitung Total</button>
    <button type="submit">Simpan</button>
</form>

<script>
    function hitungTotal() {
        const uangHarian = parseFloat(document.getElementById('uang_harian').value) || 0;
        const transportasi = parseFloat(document.getElementById('transportasi').value) || 0;
        const uangRepresentasi = parseFloat(document.getElementById('uang_representasi').value) || 0;
        const akomodasi = parseFloat(document.getElementById('akomodasi').value) || 0;
        const tol = parseFloat(document.getElementById('tol').value) || 0;
        const jumlahHari = parseInt(document.getElementById('jumlah_hari').value) || 0;

        const jumlahTotal = uangHarian + transportasi + uangRepresentasi + akomodasi + tol;
        const totalPerjalanan = jumlahTotal * jumlahHari;

        document.getElementById('jumlah_total').value = totalPerjalanan.toFixed(2);
    }
</script>
<?= $this->endSection() ?>