<?php

// cek data login
function cek_data($username, $password)
{
    global $data3;

    foreach ($data3 as $row) :
        if ($row["username"] == $username && $row["password"] == $password) {
            $_SESSION['user'] = $username;
            if($row["cat"]="admin") return header('Location: dashboardAdmin.php');
            return header('Location: dashboard.php');
        }
    endforeach;
}
