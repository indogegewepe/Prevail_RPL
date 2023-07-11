<?php
require_once "core/init.php";

$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];
$update = $db->update("layanan", $id, [
    "namaLayanan"     => $_POST['namaLayanan'],
    "minPembelian" => $_POST['minPembelian'],
    "harga"      => $_POST['harga']
]);

return header("Location:ubahLayanan.php");
