<!-- Form untuk membuat data rincian perdin baru -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<!-- Your HTML for displaying the list of Rincian Perdin -->
<!-- Example structure for displaying the data -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul Rincian</th>
            <th>Rincian Biaya</th>
            <th>Jumlah Total</th>
            <th>Keterangan</th>
            <!-- Add/Edit/Delete buttons -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rincianPerdin as $rincian) : ?>
            <tr>
                <td><?= $rincian['id'] ?></td>
                <td><?= $rincian['judul_rincian'] ?></td>
                <td><?= $rincian['rincian_biaya'] ?></td>
                <td><?= $rincian['jumlah_total'] ?></td>
                <td><?= $rincian['keterangan'] ?></td>
                <!-- Add/Edit/Delete buttons -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>