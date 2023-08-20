<!DOCTYPE html>
<html>
<head>
    <title>Data Proxy</title>
</head>
<body>
    <h1>Data Proxy</h1>
    <?php
    // Nama file JSON yang ingin Anda baca
    $jsonFile = 'dataproxy.json';

    // Membaca isi file JSON
    $jsonData = file_get_contents($jsonFile);

    // Mengurai JSON menjadi array PHP
    $dataArray = json_decode($jsonData, true);

    // Memeriksa apakah penguraian JSON berhasil
    if ($dataArray !== null) {
        echo '<table border="1">';
        echo '<tr><th>IP</th><th>Host</th></tr>';
        // Loop melalui array data dan tampilkan informasi untuk setiap entri
        foreach ($dataArray as $entry) {
            $ip = $entry['IP'];
            $host = $entry['HOST'];

            echo "<tr><td>$ip</td><td>$host</td></tr>";
        }
        echo '</table>';
    } else {
        echo "Gagal mengurai JSON.";
    }
    ?>
</body>
</html>
