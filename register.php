<?php
require_once "core/init.php";

if (isset($_POST['submit'])) {
    $db = new firebaseRDB($databaseURL);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $insert = $db->insert("customer", [
        'email' => $email,
        'nama' => $name,
        'password' => $password,
        'username' => $username
    ]);

    echo "Data berhasil ditambahkan";
}
    require_once "view/header.php";

?>

        <div class="col" id="daftarcard">
            <form action="register.php" method="post">
                <h3>
                    <center><b>Daftar</b></center>
                </h3>
                <div class="form-group input-group mb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" aria-label="email" aria-describedby="basic-addon2" required>
                </div>
                <div class=" form-group input-group mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-label="email" aria-describedby="basic-addon2" required>
                </div>
                <div class=" form-group input-group mb-3">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" aria-label="email" aria-describedby="basic-addon2" required>
                </div>
                <div class=" form-group input-group mb-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" aria-label="email" aria-describedby="basic-addon2" required>
                </div>
                <div class="form-group input-group mb-3" id="login-btn">
                    <input type="submit" class="form-control btn btn-success" name="submit" id="submit" placeholder="SUBMIT">
                </div>
                <div>
                    <center>Sudah Punya Akun? <a href="index.php">Login</a></center>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
// require_once "view/footer.php";
?>