<?php

// Nama file JSON yang ingin Anda baca
$jsonFile = 'dataproxy.json';

// Membaca isi file JSON
$jsonData = file_get_contents($jsonFile);

// Mengurai JSON menjadi array PHP
$dataArray = json_decode($jsonData, true);

// Memeriksa apakah penguraian JSON berhasil
if ($dataArray !== null) {
    // Loop melalui array data dan tampilkan informasi untuk setiap entri
    foreach ($dataArray as $entry) {
        $ip = $entry['IP'];
        $host = $entry['HOST'];

        echo "IP: $ip<br>";
        echo "Host: $host<br>";
        echo "<br>";
    }
} else {
    echo "Gagal mengurai JSON.";
}

?>
