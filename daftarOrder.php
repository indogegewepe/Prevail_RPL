<?php
require_once "core/init.php";

require_once "view/headeradmin.php";
?>

<!-- Jarak -->
<section class="dashboard">
  <div class="top">
    <i class="uil uil-bars sidebar-toggle"></i>
  </div>
  <div class="dash-content">
    <header style="font-size: 26px; font-weight: bold; color: blueviolet">
      Daftar Orderan
    </header>
    <div class="row mt-3">
      <div class="col-md-7">
        <!-- div pertama dengan lebar 70% pada layar medium dan besar -->
        <div class="table-responsive">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">Daftar Pesanan</th>
                <th scope="col">Kuantitas</th>
                <th scope="col">Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Brosure</td>
                <td>70</td>
                <td>60000</td>
                <td>
                  <!-- <button type="button" class="btn btn-danger btn-sm px-3">
                        <i class="fas fa-times"></i>
                      </button> -->
                </td>
              </tr>
              <tr>
                <td>Sticker</td>
                <td>60</td>
                <td>40000</td>
                <td>
                  <!-- <button type="button" class="btn btn-danger btn-sm px-3">
                        <i class="fas fa-times"></i>
                      </button> -->
                </td>
              </tr>
              <tr>
                <td>MMT</td>
                <td>50</td>
                <td>30000</td>
                <td>
                  <!-- <button type="button" class="btn btn-danger btn-sm px-3">
                        <i class="fas fa-times"></i>
                      </button> -->
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-4">
        <header style="font-weight: bold">Pembayaran</header>
        <!-- div kedua dengan lebar 30% pada layar medium dan besar -->
        <table class="table table-borderless">
          <form action="">
            <tbody>
              <tr>
                <td id="cekb">
                  <input type="checkbox" />
                </td>
                <td>
                  <label for="ovo">ovo</label>
                </td>
              </tr>
              <tr>
                <td id="cekb">
                  <input type="checkbox" />
                </td>
                <td>
                  <label for="ovo">Gopay</label>
                </td>
              </tr>
              <tr>
                <td id="cekb">
                  <input type="checkbox" />
                </td>
                <td>
                  <label for="ovo">Transfer Bank</label>
                </td>
              </tr>
              <tr>
                <td></td>
                <td style="text-align: right;">
                  <input type="submit" name="bayar" class="btn btn-primary" value="Bayar">
                </td>
              </tr>
            </tbody>
          </form>
        </table>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/script.js"></script>
</body>

</html>