
<?php
    $host2 = "202.46.154.45";
    $user2 = "202.46.154.45";
    $pass2 = "minum";
    $database2 = "it_bappenda";

    $koneksi = mysqli_connect($host2,$user2,$pass2,$database2);

header("Content-Type: text/xml");

$query = "SELECT * FROM tbl_wp";
$result = mysqli_query($koneksi, $query);

echo "<?xml version='1.0' encoding='UTF-8'?>\n";
echo "<wp_list>\n";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "  <wajib_pajak>\n";
        echo "    <id_wp>" . $row['id_wp'] . "</id_wp>\n";
        echo "    <nama>" . htmlspecialchars($row['nama']) . "</nama>\n";
        echo "    <alamat>" . htmlspecialchars($row['alamat']) . "</alamat>\n";
        echo "    <no_ktp>" . htmlspecialchars($row['no_ktp']) . "</no_ktp>\n";
        echo "    <no_hp>" . htmlspecialchars($row['no_hp']) . "</no_hp>\n";
        echo "  </wajib_pajak>\n";
    }
} else {
    echo "  <message>Tidak ada data</message>\n";
}

echo "</wp_list>";
?>
