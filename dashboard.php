<?php
require_once "core/init.php";

require_once "view/headeradmin.php";

if (!isset($_SESSION['user'])) {
  header('Location: login.php');
}

$db = new firebaseRDB($databaseURL);
$data = $db->retrieve("layanan");
$data = json_decode($data, 1);

?>

<section class="dashboard">

  <div class="dash-content">
    <div class="overview">
      <div class="title">
        <i class="uil uil-tachometer-fast-alt"></i>
        <span class="text">Layanan</span>
      </div>

      <div class="row boxes m-2">
        <?php if(is_array($data)){
                foreach($data as $id => $layanan):
                  $color = dechex(rand(0xDDDDDD, 0xFFFFFF));
        ?>
                  <div class="box box1 card col-sm-6" style="background-color: #<?php echo $color; ?>;">
                    <div class="card-body">
                      <center>
                        <i class="fa fa-newspaper"></i>
                        <a href="#"><span class="text card-title"><?= $layanan['namaLayanan'] ?></span></a>
                        <span class="text2 card-text">Rp. <?= $layanan['harga'] ?> / <?= $layanan['minPembelian'] ?> pcs</span>
                      </center>
                    </div>
                  </div>
                <?php endforeach; 
              }?>
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