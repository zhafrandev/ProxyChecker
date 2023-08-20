<!DOCTYPE html>
<html>
<head>
    <title>Data Proxy</title>
</head>
<body>
    <h1>Data Proxy</h1>
    <table border="1">
        <tr>
            <th>IP</th>
            <th>HOST</th>
        </tr>
        <?php
        // Baca isi file JSON
        $json = file_get_contents('dataproxy.json');
        $data = json_decode($json, true);

        // Loop melalui data dan tampilkan dalam tabel
        foreach ($data as $item) {
            echo "<tr><td>" . $item['IP'] . "</td><td>" . $item['HOST'] . "</td></tr>";
        }
        ?>
    </table>
</body>
</html>
