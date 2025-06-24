<?php
include 'inc/koneksi.php';

header("Content-Type: text/xml");

$query = "SELECT * FROM tbl_wp";
$result = mysqli_query($koneksi, $query);

echo "<?xml version='1.0' encoding='UTF-8'?>\n";
echo "<wp_list>\n";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "  <wajib pajak>\n";
        echo "    <id_wp>" . $row['id_wp'] . "</id_wp>\n";
        echo "    <nama>" . htmlspecialchars($row['nama']) . "</nama>\n";
        echo "    <alamat>" . htmlspecialchars($row['alamat']) . "</alamat>\n";
        echo "    <no_ktp>" . htmlspecialchars($row['no_ktp']) . "</no_ktp>\n";
        echo "    <no_hp>" . $row['no_hp'] . "</no_hp>\n";
    
        echo "  </wp>\n";
    }
} else {
    echo "  <message>Tidak ada data</message>\n";
}

echo "</wp_list>";
?>

