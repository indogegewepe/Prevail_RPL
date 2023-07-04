<?php
    require_once "core/init.php";

    require_once "view/SideBarAdmin.php";

    if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    }

?>

<section class="dashboard">
    <div class="dash-content">
        <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Daftar Transaksi</header>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Data Transaksi</button>
        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambah" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambah">Tambah Layanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group input-group mb-3">
                        <input type="text" class="form-control" name="namaLayanan" id="namaLayanan" placeholder="Nama Layanan" required>
                    </div>
                    <div class="form-group input-group mb-3">
                        <input type="number" class="form-control" name="hargaLayanan" id="hargaLayanan" placeholder="Harga Layanan" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="bayar.php" class="btn btn-primary">Simpan</a>
                    <!-- <button type="button" class="btn btn-primary">checkout</button> -->
                </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-hover mt-5 p-5">
            <thead class="text-center">
                <tr class="table-warning table-bordered">
                    <!-- <th scope="col" style="width: 30%;">Foto</th> -->
                    <th scope="col" style="width: 20%;">User</th>
                    <th scope="col" style="width: 20%;">Pesanan</th>
                    <th scope="col" style="width: 20%;">Total Bayar</th>
                    <th scope="col" style="width: 20%;">Tanggal</th>
                    <th scope="col" style="width: 20%;">Status</th>
                    <th scope="col" style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <tr nowrap>
                        <th scope="row">Udil</th>
                        <td>Brosur 50pcs</td>
                        <td>Rp.100000</td>
                        <td>3/1/2023</td>
                        <td>Menunggu</td>
                        <td><center><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ubah"><i class="fa fa-pen" style="color: white;" ></i></button></center></td>
                    </tr>
                <?php endfor ?>
            </tbody>
        </table>
    </div>
        <div class="modal fade" id="ubah" tabindex="-1" aria-labelledby="ubah" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ubah">Ubah Layanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group input-group mb-3">
                        <input type="text" class="form-control" name="namaLayanan" id="namaLayanan" placeholder="Nama Layanan" required>
                    </div>
                    <div class="form-group input-group mb-3">
                        <input type="number" class="form-control" name="hargaLayanan" id="hargaLayanan" placeholder="Harga Layanan" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="bayar.php" class="btn btn-primary">Simpan</a>
                    <!-- <button type="button" class="btn btn-primary">checkout</button> -->
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="hapus" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="hapus">Ubah Layanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group input-group mb-3">
                        <img src="./view/gambar/delete.png" style="width: 100px; height: 100px; display: block; margin-left: auto; margin-right: auto;">
                    </div>
                    <div class="form-group input-group mb-3">
                        <p style="display: block; margin-left: auto; margin-right: auto;">Apakah Anda yakin akan menghapus data ini ?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <center>
                        <button class="btn btn-danger">Ya</button>
                        <button class="btn btn-primary">Tidak</button>
                    </center> 
                    <!-- <a href="bayar.php" class="btn btn-primary">Simpan</a> -->
                    <!-- <button type="button" class="btn btn-primary">checkout</button> -->
                </div>
            </div>
        </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/script.js"></script>
</body>

</html>