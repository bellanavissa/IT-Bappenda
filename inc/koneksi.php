<?php 
//error_reporting(0);
$host = "localhost";
$user = "root";
$pass = "";
$database = "it_bappenda";

$koneksi = mysqli_connect($host,$user,$pass,$database) ;

if ($koneksi ==  false) {
	
		$host2 = "202.46.154.45";
		$user2 = "202.46.154.45";
		$pass2 = "minum";
		$database2 = "it_bappedan";


		$koneksi = mysqli_connect($host2,$user2,$pass2,$database2);

		if ($koneksi == false) {
			echo "anda gagal terhubung ke database online";
		} else {
			echo"berhasil koneksi online offline";
		}
	
} else {
    echo "berhasil koneksi offline";
}


 ?>