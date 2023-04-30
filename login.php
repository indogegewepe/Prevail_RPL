<?php
require_once "core/init.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty(trim($password)) && !empty(trim($username))) {
        if (login_cek_email($username)) {
            cek_data($username, $password);
        } else {
            echo "Email belum terdaftar";
        }
    } else {
        echo "Sorry it can't be empty";
    }
}

require_once "view/header.php";
?>

<div class="col" id="logincard">
    <form action="login.php" method="post">
        <h3>
            <center><b>Login</b></center>
        </h3>
        <div class="form-group input-group mb-3">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
        </div>
        <div class="form-group input-group mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
        <div class="form-group input-group" id="login-btn">
            <input type="submit" class="form-control btn-info" name="submit" id="submit" placeholder="SUBMIT">
        </div>
        <div>
            <center>Belum Punya Akun? <a href="register.php">Daftar</a></center>
        </div>
    </form>
</div>
</div>
</div>
<?php
// require_once "view/footer.php";
?>