<?php
require_once "core/init.php";
require_once "view/headeradmin.php";

$date = date_create("Asia/Jakarta");

if (isset($_POST['submit'])) {
  $db = new firebaseRDB($databaseURL);
  $namaLayanan = $_POST['namaLayanan'];
  $jumlah = $_POST['jumlah'];
  $uploadDokumen = $_SESSION['user'] . "_" . date_format($date, "H:i:s, d-m-Y");
  $nama = $_SESSION['user'];

  $insert = $db->insert("temp/temp_cart " . $_SESSION['user'], [
    'namaLayanan' => $namaLayanan,
    'jumlah' => $jumlah,
    'uploadDokumen' => $uploadDokumen,
    'nama' => $nama,
    'timestamp' => date_format($date, "H:i:s, d-m-Y")
  ]);
}

?>

<!-- Jarak -->
<section class="dashboard">
  <div class="dash-content">
    <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Order Here</header>
    <form action="order.php" method="post">
      <div class="form first">
        <div class="details personal">
          <div class="fields">

            <div class="input-field">
              <label>Jenis Layanan</label>
              <select name="namaLayanan" class="form-select" id="jenis_layanan" required>
                <?php foreach ($data1 as $row) : ?>
                  <option value="<?= $row['namaLayanan'] ?>" id="namaLayanan"><?= $row['namaLayanan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="input-field">
              <label>Jumlah</label>
              <input type="number" placeholder="Masukkan Jumlah" name="jumlah" required />
            </div>

            <div class="input-field" id="khas">
              <label id="status"></label>
              <progress style="margin-bottom: 6px;" class="progress-bar" id="progressBar" value="0" max="100"></progress>
              <input style="width: -webkit-fill-available;" type="file" id="photo" onchange="uploadImage()" accept="image/jpeg, image/png" name="uploadDokumen" />
            </div>
          </div>
        </div>


        <!-- Button trigger modal -->
        <div class="form-group input-group mb-3" id="login-btn">
          <input type="submit" class="form-control btn btn-success" name="submit" id="upload" placeholder="SUBMIT">
        </div>

        <!-- <input type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Keranjang
        </input> -->

      </div>
    </form>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Checkout Barang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-hover w-50 m-auto mt-5">
          <thead>
            <tr class="table table-light">
              <th scope="col">Produk</th>
              <th scope="col">Harga Satuan</th>
              <th scope="col">Kuantitas</th>
              <th scope="col">Total Harga</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>

            <?php for ($i = 0; $i < 3; $i++) : ?>
              <tr>
                <th scope="row">Brosur</th>
                <td>Rp.6000</td>
                <td>
                  <center>
                    <p>6</p>
                  </center>
                </td>
                <td>Rp.30000</td>
                <td><button class="btn btn-danger">hapus</button></td>
              </tr>
            <?php endfor ?>

          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">pesan lagi</button>
        <button type="button" class="btn btn-primary">checkout</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>

<script>
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBTjX7S3OoZtgeQYr5NMKjC0qWr4VtmZTg",
    authDomain: "restapiprevail.firebaseapp.com",
    databaseURL: "https://restapiprevail-default-rtdb.firebaseio.com",
    projectId: "restapiprevail",
    storageBucket: "restapiprevail.appspot.com",
    messagingSenderId: "73324380164",
    appId: "1:73324380164:web:c3ceeefb7bf110db9fb551",
    measurementId: "G-Q1XYB95T84"
  };

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  console.log(firebase);

  function uploadImage() {
    const ref = firebase.storage().ref("dokumen_pelanggan/<?= $_SESSION['user'] ?>");
    const file = document.querySelector("#photo").files[0];
    const name = "<?= $_SESSION['user'] . "_" . date_format($date, "H:i:s, d-m-Y")?>";
    const metadata = {
      contentType: "image/jpeg"
    };
    const task = ref.child(name).put(file, metadata);
    task
      .then(function(snapshot) {
        document.getElementById("progressBar").style.display = "none";
        document.getElementById("status").innerHTML = "Uploaded";
        var url = snapshot.ref.getDownloadURL();
      });

    task.on('state_changed', function(snapshot) {
      // Observe state change events such as progress, pause, and resume
      // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
      var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
      document.getElementById("progressBar").value = Math.round(progress);
      // document.getElementById("loaded_n_total").innerHTML = Math.round(progress) + "% uploaded...please wait ";
      switch (snapshot.state) {
        case firebase.storage.TaskState.PAUSED: // or 'paused'
          console.log('Upload is paused');
          break;
        case firebase.storage.TaskState.RUNNING: // or 'running'
          console.log('Upload is running');
          break;
      }
    }, function(error) {
      // Handle unsuccessful uploads
    }, function() {
      // Handle successful uploads on complete
      // For instance, get the download URL: https://firebasestorage.googleapis.com/...
    });
  }

  const errorMsgElement = document.querySelector('span#errorMsg');
</script>

</body>

</html>