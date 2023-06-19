<?php
require_once "core/init.php";
require_once "view/headeradmin.php";
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
                        <form action="#">
                            <tr>
                                <td><input type="radio" id="metod1" name="metod" value="ovo"></input></td>
                                <td><label for="ovo">ovo</label></td>
                            </tr>
                            <tr>
                                <td><input type="radio" id="metod2" name="metod" value="gopay"></input></td>
                                <td><label for="ovo">gopay</label></td>
                            </tr>
                            <tr>
                                <td><input type="radio" id="metod3" name="metod" value="bank"></input></td>
                                <td><label for="ovo">transfer bank</label></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="#" class="btn btn-primary">Bayar</input></td>
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