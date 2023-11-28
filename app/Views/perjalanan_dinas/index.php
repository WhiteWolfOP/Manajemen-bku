<!-- Views untuk menampilkan data perjalanan dinas -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Perjalanan Dinas</h3>
          </div>
          <div class="card-body">
            <a href="<?= site_url('/perjalanan_dinas/create') ?>">Tambah Data</a>
            <table id="table1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Pelaksana</th>
                  <th>Provinsi</th>
                  <th>Kota</th>
                  <th>Biaya</th>
                  <!-- Tambahkan kolom lain jika diperlukan -->
                </tr>
              </thead>
              <?php foreach ($perjalanan as $perjalananDinas) : ?>
                <tbody>
                  <tr>
                    <td><?= $perjalananDinas['nama_pelaksana'] ?></td>
                    <td><?= $perjalananDinas['provinsi'] ?></td>
                    <td><?= $perjalananDinas['kota'] ?></td>
                    <td><?= 'Rp.' . number_format($perjalananDinas['biaya'], 0, ',', '.') ?></td>
                    <td>
                      <a href="" class="btn btn-primary">Upload Laporan <i class="fa fa-edit"></i></a>
                      <!-- <a href="<?= site_url('/perjalanan_dinas/konfirmasi/' . $perjalananDinas["id"]) ?>" class="btn btn-info">Konfirmasi <i class="fa fa-edit"></i></a> -->
                    </td>
                    <!-- Tambahkan data lainnya sesuai kebutuhan -->
                  </tr>
                </tbody>
              <?php endforeach; ?>
            </table>
            <?= $this->endSection() ?>