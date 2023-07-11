<?php
require_once "core/init.php";
require_once "view/headeradmin.php";

$date = date_create("Asia/Jakarta");
$db = new firebaseRDB($databaseURL);

if (isset($_POST['submit'])) {
    foreach ($data4 as $key => $value) :
        if ($key == "temp_cart " . $_SESSION['user']) {
            foreach ($value as $row => $row2) :
                $total = $row2["jumlah"] * $row2["harga"];
                $insert = $db->insert("status/status " . $_SESSION['user'], [
                    'namaLayanan' => $row2["namaLayanan"],
                    'harga' => $total,
                    'metode' => $_POST['metod'],
                    'timestamp' => date_format($date, "d-m-Y"),
                    'status' => "pending"
                ]);
            endforeach;
            $db->deleteOrder("", "temp_cart " . $_SESSION['user']);
        }
    endforeach;

    header("Location:status.php");
}
?>

<!-- Jarak -->
<section class="dashboard">
    <div class="dash-content ">
        <div class="row">
            <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Pembayaran</header>
            <div class="col-md-8 p-5">
                <!-- Konten div kiri -->
                <table class="table table-bordered table-hover m-auto mt-5">
                    <thead>
                        <tr class="table-warning table-bordered text-center">
                            <th scope="col">Daftar Pesanan</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data4 as $key => $value) :
                            if ($key == "temp_cart " . $_SESSION['user']) {
                                foreach ($value as $row => $row2) : ?>
                                    <tr>
                                        <td><?= $row2["namaLayanan"] ?></td>
                                        <td>
                                            <p><?= $row2["jumlah"] ?></p>
                                        </td>
                                        <td><?= $row2["jumlah"] * $row2["harga"] ?></td>
                                    </tr>
                        <?php
                                endforeach;
                            }
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 pt-5  text-center">
                <!-- Konten div kanan -->
                <table class="table table-bordered table-hover m-auto mt-5">
                    <thead>
                        <tr class="table-warning table-bordered">
                            <th scope="col-3 " colspan="3">Metode Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="bayar.php" method="post">
                            <tr>
                                <td><input type="radio" id="metod1" name="metod" value="ovo"></input></td>
                                <td><label for="metod1">ovo</label></td>
                            </tr>
                            <tr>
                                <td><input type="radio" id="metod2" name="metod" value="gopay"></input></td>
                                <td><label for="metod2">gopay</label></td>
                            </tr>
                            <tr>
                                <td><input type="radio" id="metod3" name="metod" value="bank"></input></td>
                                <td><label for="metod3">transfer bank</label></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" class="btn btn-primary" name="submit" value="Bayar"></input></td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/script.js"></script>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/script.js"></script>
</body>

</html>