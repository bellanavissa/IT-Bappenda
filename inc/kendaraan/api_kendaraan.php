<?php
include "inc/koneksi.php";

// Set header untuk XML
header("Content-Type: text/xml");

// Ambil data kendaraan dari database
$query = "SELECT * FROM tbl_knd";
$result = mysqli_query($koneksi, $query);

// Mulai XML
$xml = new SimpleXMLElement('<?xml version="1.0"?><kendaraans></kendaraans>');

// Tambahkan data kendaraan ke XML
while ($data = mysqli_fetch_assoc($result)) {
    $kendaraan = $xml->addChild('kendaraan');
    $kendaraan->addChild('nopol', $data['nopol']);
    $kendaraan->addChild('merk', $data['merk']);
    $kendaraan->addChild('tipe', $data['tipe']);
    $kendaraan->addChild('silinder', $data['silinder']);
    $kendaraan->addChild('warna_kb', $data['warna_kb']);
    $kendaraan->addChild('no_bpkb', $data['no_bpkb']);
    $kendaraan->addChild('no_rangka', $data['no_rangka']);
    $kendaraan->addChild('no_mesin', $data['no_mesin']);
    $kendaraan->addChild('bahan_bakar', $data['bahan_bakar']);
    $kendaraan->addChild('warna_tnkb', $data['warna_tnkb']);
}

// Tampilkan XML
echo $xml->asXML();

// Tutup koneksi
mysqli_close($koneksi);
?>

