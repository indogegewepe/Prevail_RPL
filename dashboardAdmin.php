<?php
require_once "core/init.php";

require_once "view/SideBarAdmin.php";

if (!isset($_SESSION['user'])) {
  header('Location: login.php');
}

?>

<section class="dashboard">

  <div class="dash-content">
    <div class="overview">
      <div class="title">
        <i class="uil uil-tachometer-fast-alt"></i>
        <span class="text">Dashboard</span>
      </div>

      <div class="row boxes m-2">
        <div class="box box1 card col-sm-6" style="background-color: #11e6db; color: white;">
          <div class="card-body">
            <center>
              <a href="#">Pendapatan Total</span></a>
              <i class="fa fa-dollar" style="color: white;"></i><br>
              <h2 href="#">Rp.2.000.000</h2></a>
              <span class="text2 card-text"></span>
            </center>
          </div>
        </div>
        <div class="box box1 card col-sm-6" style="background-color: #d4a523; color: white;">
          <div class="card-body">
            <center>
              <a href="#">Pendapatan Per Bulan</span></a>
              <i class="fa fa-book" style="color: white;"></i><br>
              <h2 href="#">Rp.2.000.000</h2></a>
              <span class="text2 card-text"></span>
            </center>
          </div>
        </div>
        <div class="box box1 card col-sm-6" style="background-color: #e611b1; color: white;">
          <div class="card-body">
            <center>
              <a href="#">Layanan</span></a>
              <i class="fa fa-archive" style="color: white;"></i><br>
              <h2 href="#"><?php
                            $x = 0;
                            foreach ($data1 as $row) :
                              $x++;
                            endforeach;
                            echo $x; ?></h2>
              <span class="text2 card-text"></span>
            </center>
          </div>
        </div>
        <div class="box box1 card col-sm-6" style="background-color: #e61111; color: white;">
          <div class="card-body">
            <center>
              <a href="#">Customer</span></a>
              <i class="fa fa-user" style="color: white;"></i><br>
              <h2 href="#"><?php
                            $x = 1;
                            foreach ($data3 as $row) :
                              $x++;
                            endforeach;
                            echo $x; ?>
              </h2>
              <span class="text2 card-text"></span>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="view/js/script.js"></script>
</body>
<?php
// require_once "view/footer.php";
?>

<script src="view/js/script.js"></script>
</body>

</html>