<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Tambah Data Pelaksana</h6>
                        </div>
                    </div>
                    <div class="card-body px-4 py-3">
                        <a class="btn btn-sm bg-gradient-success mb-3" href="<?= site_url('nama_pelaksana') ?>">Kembali</a>
                        <form action="<?= site_url('/nama_pelaksana/create') ?>" method="post">
                        <div class="col-md-6">
                                <label for="user_id" class="form-label">Pilih User ID:</label>
                                <select name="user_id" required class="form-select">
                                    <?php foreach ($usersWithUserRole as $user) : ?>
                                        <option value="<?= $user['id'] ?>"><?= $user['username'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="nama_pelaksana" class="form-label">Nama Pelaksana:</label>
                                <input type="text" name="nama_pelaksana" required class="form-control" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col-md-6">
                                <label for="nik_nip" class="form-label">NIK/NIP:</label>
                                <input type="text" name="nik_nip" required class="form-control" placeholder="Masukkan NIK/NIP">
                            </div>
                            <div class="col-md-6">
                                <label for="jabatan" class="form-label">Jabatan:</label>
                                <input type="text" name="jabatan" required class="form-control" placeholder="Masukkan Jabatan">
                            </div>
                            <div class="col-md-6">
                                <label for="status_pegawai" class="form-label">Status:</label>
                                <select name="status_pegawai" required class="form-select">
                                    <option value="pns">PNS</option>
                                    <option value="dewan">Dewan</option>
                                    <option value="thl">THL</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="no_telp" class="form-label">No.Telepon:</label>
                                <input type="tel" name="no_telp" required class="form-control" placeholder="Masukkan No.Telepon">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" required class="form-control" placeholder="Masukkan Email">
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