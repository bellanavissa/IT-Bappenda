<?php
require 'inc/koneksi.php';

if (isset($_POST['submit'])) {

    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $no_ktp = mysqli_real_escape_string($koneksi, $_POST['no_ktp']);
    $no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
    
    // Query untuk insert data
    $sql = "INSERT INTO tbl_wp (nama, alamat, no_ktp, no_hp) VALUES ('$nama', '$alamat', '$no_ktp', '$no_hp')";

    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = '?page=pemilik';
            </script>
        ";
    } else {
        echo "<script>
                alert('data gagal ditambahkan');
                document.location.href = '?page=pemilik';
            </script>" . $sql . "<br>" . mysqli_error($koneksi);
        "
           
        ";
    }

    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>IT BAPPENDA</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="asset/images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="asset/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="asset/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="asset/css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="asset/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="asset/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="asset/css/custom.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-4xl bg-white rounded-lg overflow-hidden form-container p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">TAMBAH PEMILIK</h1>
                <p class="text-gray-600">Badan Pendapatan Daerah - BAPPENDA</p>
            </div>

                <div class="col-sm-4">
                    <!-- <form action="" method="post">
                      <input type="text" name="keyword" size="38" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
                      <button type="submit" name="cari_spesifikasi_rumah">Cari</button>
                      </form> -->
                      
                    </div>
                    <div class="container">
                    <form action="" method="post" enctype="multipart/form-data">
                   
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Pemilik</label>
                        <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="nama" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control" id="alamat" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_ktp" class="col-sm-2 col-form-label">No. Ktp</label>
                        <div class="col-sm-10">
                        <input type="text" name="no_ktp" class="form-control" id="no_ktp" required>
                        </div>
                    </div>
                   <div class="mb-3 row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No. HP</label>
                        <div class="col-sm-10">
                        <input type="text" name="no_hp" class="form-control" id="no_hp" required>
                        </div>
                    </div>
                <div class="mb-3 row mt-4">
                    <div class="col">
                        <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
                        <a href="?page=pemilik" button type="submit" class="btn btn-danger" name="submit">Batal</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
