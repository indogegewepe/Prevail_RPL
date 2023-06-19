<?php
require_once "core/init.php";
// include "functions/user.php";

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$tableName = "temp_cart " . $_SESSION['user'];
if($id != ""){
   $delete = $db->deleteOrder($tableName, $id);
   header("Location:order.php");
}
