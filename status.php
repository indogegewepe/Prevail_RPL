<?php
require_once "core/init.php";
require_once "view/headeradmin.php";

?>

        <!-- Jarak -->
        <section class="dashboard">
            <div class="dash-content">
                <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Status Pemesanan</header>
                <table class="table table-hover w-50 m-auto mt-5">
                    <thead>
                        <tr class="table table-light">
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Metode Pembayaran</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Brosur</th>
                            <td>Rp.100000</td>
                            <td>Ovo</td>
                            <td><div class="status">working</div></td>
                        </tr>
                        <tr>
                            <th scope="row">Kalender</th>
                            <td>Rp.200000</td>
                            <td>Ovo</td>
                            <td><div class="status">working</div></td>
                        </tr>
                        <tr>
                            <th scope="row">Kartu Nama</th>
                            <td>Rp.75000</td>
                            <td>Ovo</td>
                            <td><div class="status">working</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="../js/script.js"></script>
    </body>
</html>