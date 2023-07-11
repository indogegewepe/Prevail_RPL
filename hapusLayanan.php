<?php
require_once "core/init.php";

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$tableName = "layanan";
if ($id != "") {
    $delete = $db->delete($tableName, $id);
    header("Location:ubahLayanan.php");
}
