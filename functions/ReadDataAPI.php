<?php

$Option = array(
    "ssl" =>array(
        "verify_peer" => false,
        "verify_peer_name"=>false,
    ),
);

$databaseURL = "https://restapiprevail-default-rtdb.firebaseio.com";

// Tiga link API JSON
$link1 = "https://restapiprevail-default-rtdb.firebaseio.com/layanan.json";
$link2 = "https://restapiprevail-default-rtdb.firebaseio.com/testimoni.json";
$link3 = "https://restapiprevail-default-rtdb.firebaseio.com/customer.json";

// Mengambil data dari setiap link API JSON
$dataApi1 = file_get_contents($link1, false, stream_context_create($Option));
$dataApi2 = file_get_contents($link2, false, stream_context_create($Option));
$dataApi3 = file_get_contents($link3, false, stream_context_create($Option));

// Mendekode setiap data JSON menjadi array PHP
$data1 = json_decode($dataApi1, true);
$data2 = json_decode($dataApi2, true);
$data3 = json_decode($dataApi3, true);

// // Menampilkan setiap data dalam format yang mudah dibaca
// echo "<h3>Data Layanan</h3>";
// echo "<pre>";
// print_r($data1);
// echo "</pre>";

// echo "<h3>Data Testimoni</h3>";
// echo "<pre>";
// print_r($data2);
// echo "</pre>";

// echo "<h3>Data Customer</h3>";
// echo "<pre>";
// print_r($data3);
// echo "</pre>";
?>
