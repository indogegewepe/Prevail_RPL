<?php
require_once "core/init.php";
require_once "view/SideBarAdmin.php";

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("layanan/$id");
$data = json_decode($retrieve, 1);

?>

<section class="dashboard">
    <div class="dash-content">
        <header style="font-size: 26px; font-weight: bold; color: blueviolet; ">Ubah Layanan</header>
        <form method="post" action="action_edit.php">
            <table border="0"  width="70%">
                <!-- <div class="form-group input-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" aria-label="email" aria-describedby="basic-addon2" required>
                </div> -->
                <tr>
                    <td>Nama</td>
                    <td><input type="text" class="form-control" name="namaLayanan" value="<?php echo $data['namaLayanan'] ?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" class="form-control" name="harga" value="<?php echo $data['harga'] ?>"></td>
                </tr>
                <tr>
                    <td>Minimal Pembelian</td>
                    <td><input type="number" class="form-control" name="minPembelian" value="<?php echo $data['minPembelian'] ?>"></td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</section>