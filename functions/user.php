<?php
// cek data login
require_once "core/init.php";

function register_user($name, $email, $username, $password)
{
    global $conn;
    
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $username = mysqli_real_escape_string($conn, $username);

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO customer VALUES ('0','$name','$email','$username','$password')";

    if (mysqli_query($conn, $query)) {
        return true;
    } else {
        return false;
    }
};

// function register_cek_email($email)
// {
//     global $conn;
//     $email = mysqli_real_escape_string($conn, $email);

//     $query = "SELECT * FROM customer WHERE email = '$email'";

//     if ( $result = mysqli_query($conn, $query) ){
//         if (mysqli_num_rows($result) == 0) return true;
//         else return false;
//     }
// };
function cek_data($username, $password){
    $databaseURL = "https://restapiprevail-default-rtdb.firebaseio.com";
    $db = new firebaseRDB($databaseURL);
    $data = $db->retrieve("customer");
    $data = json_decode($data, 1);
    // global $conn;
    // $username = mysqli_real_escape_string($conn, $username);
    // $password = mysqli_real_escape_string($conn, $password);

    // $query = "SELECT password FROM customer WHERE username = '$username'";

    // $result = mysqli_query($conn, $query);
    // $hash = mysqli_fetch_assoc($result)['password'];

    // if (password_verify($password, $hash)){
    //     $_SESSION['user'] = $username;
    //     header('Location: dashboard.php');
    // }else{
    //     die("Password verification failed");
    // }

    // $query = "SELECT * FROM customer WHERE username = '$username'";

    // if ( $result = mysqli_query($conn, $query) ){
    //     if (mysqli_num_rows($result) == 0) return true;
    //     else return false;
    // }
    // global $data3;

    if(is_array($data)){
        foreach($data as $id => $customer):
            if ( $customer["username"] == $username && $customer["password"] == $password){
                $_SESSION['user'] = $username;
                return header('Location: dashboard.php');
            }
        endforeach;
    }
}

function login_cek_email($username){
    global $conn;
    $username = mysqli_real_escape_string($conn, $username);

    $query = "SELECT email FROM customer WHERE username = '$username'";

    if ($result = mysqli_query($conn, $query)) {
        if (mysqli_num_rows($result) != 0) return true;
    } else { 
        return false;
    }
};