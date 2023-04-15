<?php
require_once "core/init.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (register_cek_email($email)) {
        if (!empty(trim($name)) && !empty(trim($password)) && !empty(trim($email)) && !empty(trim($username))) {
            if (register_user($name, $email, $username, $password)) {
                echo "Successfully registered";
            } else {
                echo "Something went wrong";
            }
        } else {
            echo "Sorry it can't be empty";
        }
    } else {
        echo "email sudah terdaftar";
    }
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