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
$link4 = "https://restapiprevail-default-rtdb.firebaseio.com/temp.json";

// Mengambil data dari setiap link API JSON
$dataApi1 = file_get_contents($link1, false, stream_context_create($Option));
$dataApi2 = file_get_contents($link2, false, stream_context_create($Option));
$dataApi3 = file_get_contents($link3, false, stream_context_create($Option));
$dataApi4 = file_get_contents($link4, false, stream_context_create($Option));

// Mendekode setiap data JSON menjadi array PHP
$data1 = json_decode($dataApi1, true);
$data2 = json_decode($dataApi2, true);
$data3 = json_decode($dataApi3, true);
$data4 = json_decode($dataApi4, true);

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

class firebaseRDB
{
    function __construct($url = null)
    {
        if (isset($url)) {
            $this->url = $url;
        } else {
            throw new Exception("Database URL must be specified");
        }
    }

    public function grab($url, $method, $par = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if (isset($par)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $par);
        }
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 120);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $html = curl_exec($ch);
        return $html;
        curl_close($ch);
    }


    public function insert($table, $data)
    {
        $path = $this->url . "/$table.json";
        $grab = $this->grab($path, "POST", json_encode($data));
        return $grab;
    }

    public function update($table, $uniqueID, $data)
    {
        $path = $this->url . "/$table/$uniqueID.json";
        $grab = $this->grab($path, "PATCH", json_encode($data));
        return $grab;
    }

    public function delete($table, $uniqueID)
    {
        $path = $this->url . "/$table/$uniqueID.json";
        $grab = $this->grab($path, "DELETE");
        return $grab;
    }

    public function retrieve($dbPath, $queryKey=null, $queryType=null, $queryVal =null){
        if(isset($queryType) && isset($queryKey) && isset($queryVal)){
           $queryVal = urlencode($queryVal);
           if($queryType == "EQUAL"){
                 $pars = "orderBy=\"$queryKey\"&equalTo=\"$queryVal\"";
           }elseif($queryType == "LIKE"){
                 $pars = "orderBy=\"$queryKey\"&startAt=\"$queryVal\"";
           }
        }
        $pars = isset($pars) ? "?$pars" : "";
        $path = $this->url."/$dbPath.json$pars";
        $grab = $this->grab($path, "GET");
        return $grab;
     }
}



?>
