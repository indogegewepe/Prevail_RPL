<?php
require_once "core/init.php";

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("layanan/$id");
$data = json_decode($retrieve, 1);

?>
<form method="post" action="action_edit.php">
    <table border="0" width="500">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="namaLayanan" value="<?php echo $data['namaLayanan'] ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="harga" value="<?php echo $data['harga'] ?>"></td>
        </tr>
        <tr>
            <td>Minimal Pembelian</td>
            <td>:</td>
            <td><input type="number" name="minPembelian" value="<?php echo $data['minPembelian'] ?>"></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" value="SAVE">
            </td>
        </tr>
    </table>
</form>