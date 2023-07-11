<?php
require_once "core/init.php";

require_once "view/headeradmin.php";

if (isset($_POST['submit'])) {
    $db = new firebaseRDB($databaseURL);
    $testimoni = $_POST['testimoni'];

    $insert = $db->insert("testimoni", [
        'kalimat' => $testimoni,
        'nama' => $_SESSION['user'],
        'tanggal' => date('Y-m-d H:i:s')
    ]);
}
?>

<!-- Jarak -->
<section class="dashboard">
    <div class="dash-content">
        <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Riwayat Pemesanan</header>
        <table class="table table-bordered table-hover mt-5 p-5">
            <thead class="text-center">
                <tr class="table-warning table-bordered">
                    <th scope="col" style="width: 30%;">Jenis Barang</th>
                    <th scope="col" style="width: 20%;">Harga</th>
                    <th scope="col" style="width: 20%;">Metode Pembayaran</th>
                    <th scope="col" style="width: 15%;">Status</th>
                    <th scope="col" style="width: 15%;">Testimoni</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data5 as $key => $value) :
                    if ($key == "status " . $_SESSION['user']) {
                        foreach ($value as $row => $row2) : ?>
                            <tr>
                                <td><?= $row2["namaLayanan"] ?></td>
                                <td>
                                    <p><?= $row2["harga"] ?></p>
                                </td>
                                <td><?= $row2["metode"] ?></td>
                                <td class=status><?= $row2["status"] ?></td>
                                <td><button type="button" class="btn btn-primary mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">Testimoni</button></td>
                            </tr>
                <?php
                        endforeach;
                    }
                endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="history.php" method="post">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">Mengisi Testimoni</h1>
                    </div>
                    <div class="modal-body container-fluid">
                        <textarea class="form-control" name="testimoni" id="#testi" cols="30" rows="10"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-success" name="submit" id="submit" placeholder="Kirim">
                        <!-- <button type="button" class="btn btn-primary" id="submit">Kirim</button> -->
                    </div>
                </form>
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