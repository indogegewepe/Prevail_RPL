<?php
require_once "core/init.php";
require_once "view/SideBarAdmin.php";

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}

if (isset($_POST['submit'])) {
    $db = new firebaseRDB($databaseURL);

    $insert = $db->insert("layanan", [
        'namaLayanan' => $_POST['namaLayanan'],
        'harga' => $_POST['hargaLayanan'],
        'minPembelian' => $_POST['minPembelian']
    ]);
    return header('Location: ubahLayanan.php');
}

?>

<section class="dashboard">
    <div class="dash-content">
        <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Daftar Pemesanan</header>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Layanan</button>
        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambah" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tambah">Tambah Layanan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="tambah" action="" method="post">
                        <div class="modal-body">
                            <div class="form-group input-group mb-3">
                                <input type="text" class="form-control" name="namaLayanan" id="namaLayanan" placeholder="Nama Layanan" required>
                            </div>
                            <div class="form-group input-group mb-3">
                                <input type="number" class="form-control" name="hargaLayanan" id="hargaLayanan" placeholder="Harga Layanan" required>
                            </div>
                            <div class="form-group input-group mb-3">
                                <input type="number" class="form-control" name="minPembelian" id="minPembelian" placeholder="Minimal Pembelian" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button name="submit" class="btn btn-primary" type="submit">Simpan</button>
                            <!-- <button type="button" class="btn btn-primary">checkout</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-hover mt-5 p-5">
            <thead class="text-center">
                <tr class="table-warning table-bordered">
                    <!-- <th scope="col" style="width: 30%;">Foto</th> -->
                    <th scope="col" style="width: 20%;">Nama</th>
                    <th scope="col" style="width: 20%;">Harga</th>
                    <th scope="col" style="width: 20%;">Minimal</th>
                    <th scope="col" style="width: 15%;" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data1 as $key => $row) : ?>
                    <tr>
                        <td><?= $row["namaLayanan"] ?></td>
                        <td>
                            <p>Rp. <?= $row["harga"] ?></p>
                        </td>
                        <td>
                            <p> <?= $row["minPembelian"] ?> pcs</p>
                        </td>
                        <td>
                            <center><a href="editLayanan.php?id=<?= $key ?>" class="btn btn-primary"><i class="fa fa-pen" style="color: white;"></i></a></center>
                        </td>
                        <td>
                            <center><a href="hapusLayanan.php?id=<?= $key ?>" class="btn btn-danger"><i class="fa fa-trash" style="color: white;"></i></a></center>
                        </td>
                    </tr>
                <?php
                endforeach; ?>
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

</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/script.js"></script>
</body>

</html>