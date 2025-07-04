<?php
include "inc/koneksi.php";

if (isset($_POST['submit'])) {

    $nopol = mysqli_real_escape_string($koneksi, $_POST['nopol']);
    $merk = mysqli_real_escape_string($koneksi, $_POST['merk']);
    $tipe = mysqli_real_escape_string($koneksi, $_POST['tipe']);
    $silinder = mysqli_real_escape_string($koneksi, $_POST['silinder']);
    $warna_kb = mysqli_real_escape_string($koneksi, $_POST['warna_kb']);
    $no_bpkb = mysqli_real_escape_string($koneksi, $_POST['no_bpkb']);
    $no_rangka = mysqli_real_escape_string($koneksi, $_POST['no_rangka']);
    $no_mesin = mysqli_real_escape_string($koneksi, $_POST['no_mesin']);
    $bahan_bakar = mysqli_real_escape_string($koneksi, $_POST['bahan_bakar']);
    $warna_tnkb = mysqli_real_escape_string($koneksi, $_POST['warna_tnkb']);

    // Query untuk tambah data
    $sql = "INSERT INTO tbl_knd (nopol, merk, tipe, silinder, warna_kb, no_bpkb, no_rangka, no_mesin, bahan_bakar, warna_tnkb) 
    VALUES ('$nopol', '$merk', '$tipe', '$silinder','$warna_kb', '$no_bpkb', '$no_rangka', '$no_mesin', '$bahan_bakar', '$warna_tnkb' )";

    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = '?page=kendaraan';
            </script>
        ";
    } else {
        echo "<script>
                alert('data gagal ditambahkan');
                document.location.href = '?page=kendaraan';
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
                <h1 class="text-3xl font-bold text-gray-800">TAMBAH KENDARAAN</h1>
                <p class="text-gray-600">Badan Pendapatan Daerah - BAPPENDA</p>
            </div>
          
            <div class="container">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="nopol" class="col-sm-2 col-form-label">Plat Nomor Kendaraan</label>
                        <div class="col-sm-10">
                            <input type="text" name="nopol" class="form-control col-sm-11" id="nopol">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="merk" class="col-sm-2 col-form-label">Merk Kendaraan</label>
                        <div class="col-sm-10">
                            <input type="text" name="merk" class="form-control col-sm-11" id="merk">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tipe" class="col-sm-2 col-form-label">Tipe Kendaraan</label>
                        <div class="col-sm-10">
                            <input type="text" name="tipe" class="form-control col-sm-11" id="tipe">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="silinder" class="col-sm-2 col-form-label">Silinder</label>
                        <div class="col-sm-10">
                            <input type="text" name="silinder" class="form-control col-sm-11" id="silinder">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="warna_kb" class="col-sm-2 col-form-label">Warna Kendaraan</label>
                        <div class="col-sm-10">
                            <input type="text" name="warna_kb" class="form-control col-sm-11" id="warna_kb">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_bpkb" class="col-sm-2 col-form-label">No. BPKB</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_bpkb" class="form-control col-sm-11" id="no_bpkb">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_rangka" class="col-sm-2 col-form-label">No. Rangka</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_rangka" class="form-control col-sm-11" id="no_rangka">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_mesin" class="col-sm-2 col-form-label">No. Mesin</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_mesin" class="form-control col-sm-11" id="no_mesin">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="bahan_bakar" class="col-sm-2 col-form-label">Bahan Bakar</label>
                        <div class="col-sm-10">
                            <select id="bahan_bakar" name="bahan_bakar" required
                                class="form-control col-sm-11">
                                <option value="">Pilih Bahan Bakar</option>
                                <option value="Bensin">Bensin</option>
                                <option value="Solar">Solar</option>
                                <option value="Listrik">Listrik</option>
                                <option value="Hibrida">Hibrida</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="warna_tnkb" class="col-sm-2 col-form-label">Warna TNBK</label>
                        <div class="col-sm-10">
                            <input type="text" name="warna_tnkb" class="form-control col-sm-11" id="warna_tnkb">
                        </div>
                    </div>


                    <div class="mb-3 row mt-4">
                        <div class="col">
                            <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
                            <a href="?page=kendaraan" button type="submit" class="btn btn-danger" name="submit">Batal</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>