<?php
require 'inc/koneksi.php';

    $id_knd = $_GET['id_knd'];
    // var_dump($nopol);
    // die();
    $query = mysqli_query($koneksi, "SELECT * FROM tbl_knd WHERE id_knd = '$id_knd'");
    $row = mysqli_fetch_assoc($query);

    if (isset($_POST['submit'])) {

    $id_knd = mysqli_real_escape_string($koneksi, $_POST['id_knd']);
    // $nopol = mysqli_real_escape_string($koneksi, $_POST['nopol']);
    // $merk = mysqli_real_escape_string($koneksi, $_POST['merk']);
    // $tipe = mysqli_real_escape_string($koneksi, $_POST['tipe']);
    // $silinder = mysqli_real_escape_string($koneksi, $_POST['silinder']);
    $warna_kb = mysqli_real_escape_string($koneksi, $_POST['warna_kb']);
    // $no_bpkb = mysqli_real_escape_string($koneksi, $_POST['no_bpkb']);
    $no_rangka = mysqli_real_escape_string($koneksi, $_POST['no_rangka']);
    $no_mesin = mysqli_real_escape_string($koneksi, $_POST['no_mesin']);
    $bahan_bakar = mysqli_real_escape_string($koneksi, $_POST['bahan_bakar']);
    $warna_tnkb = mysqli_real_escape_string($koneksi, $_POST['warna_tnkb']);
    
    // Query untuk update data
    $sql = "UPDATE tbl_knd SET 
                -- nopol = '$nopol',
                -- merk = '$merk',
                -- tipe = '$tipe',
                -- silinder = '$silinder',
                warna_kb = '$warna_kb',
                -- no_bpkb = '$no_bpkb',
                no_rangka = '$no_rangka',
                no_mesin = '$no_mesin',
                bahan_bakar = '$bahan_bakar',
                warna_tnkb = '$warna_tnkb'
            WHERE id_knd = $id_knd
            ";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('data berhasil di ubah');
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
                <h1 class="text-3xl font-bold text-gray-800">UBAH DATA PEMILIK</h1>
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
                    <input type="hidden" name="id_knd" value="<?= $row["id_knd"]; ?>">
                   
                    <div class="mb-3 row">
                        <label for="nopol" class="col-sm-2 col-form-label">Plat Nomor Kendaraan</label>
                        <div class="col-sm-10">
                            <input type="text" name="nopol" class="form-control" id="nopol" value="<?= $row["nopol"]; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="merk" class="col-sm-2 col-form-label">Merk Kendaraan</label>
                        <div class="col-sm-10">
                            <input type="text" name="merk" class="form-control" id="merk" value="<?= $row["merk"]; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tipe" class="col-sm-2 col-form-label">Tipe Kendaraan</label>
                        <div class="col-sm-10">
                            <input type="text" name="tipe" class="form-control" id="tipe" value="<?= $row["tipe"]; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="silinder" class="col-sm-2 col-form-label">Silinder</label>
                        <div class="col-sm-10">
                            <input type="text" name="silinder" class="form-control" id="silinder" value="<?= $row["silinder"]; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="warna_kb" class="col-sm-2 col-form-label">Warna Kendaraan</label>
                        <div class="col-sm-10">
                            <input type="text" name="warna_kb" class="form-control" id="warna_kb" value="<?= $row["warna_kb"]; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_bpkb" class="col-sm-2 col-form-label">No. BPKB</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_bpkb" class="form-control" id="no_bpkb" value="<?= $row["no_bpkb"]; ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_rangka" class="col-sm-2 col-form-label">No. Rangka</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_rangka" class="form-control" id="no_rangka" value="<?= $row["no_rangka"]; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_mesin" class="col-sm-2 col-form-label">No. Mesin</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_mesin" class="form-control" id="no_mesin" value="<?= $row["no_mesin"]; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="bahan_bakar" class="col-sm-2 col-form-label">Bahan Bakar</label>
                        <div class="col-sm-10">
                            <select id="bahan_bakar" name="bahan_bakar" required class="form-control">
                            <option value="Bensin" <?= ($row["bahan_bakar"] == "Bensin") ? 'selected' : ''; ?>>Bensin</option>
                            <option value="Solar" <?= ($row["bahan_bakar"] == "Solar") ? 'selected' : ''; ?>>Solar</option>
                            <option value="Listrik" <?= ($row["bahan_bakar"] == "Listrik") ? 'selected' : ''; ?>>Listrik</option>
                            <option value="Hibrida" <?= ($row["bahan_bakar"] == "Hibrida") ? 'selected' : ''; ?>>Hibrida</option>
                            <option value="Lainnya" <?= ($row["bahan_bakar"] == "Lainnya") ? 'selected' : ''; ?>>Lainnya</option>
                        </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="warna_tnkb" class="col-sm-2 col-form-label">Warna TNKB</label>
                        <div class="col-sm-10">
                            <input type="text" name="warna_tnkb" class="form-control" id="warna_tnkb" value="<?= $row["warna_tnkb"]; ?>">
                        </div>
                    </div>


                    <div class="mb-3 row mt-4">
                        <div class="col">
                            <button type="submit" class="btn btn-primary" name="submit">Ubah Data</button>
                            <a href="?page=kendaraan" button type="submit" class="btn btn-danger" name="submit">Batal</button></a>
                        </div>
                    </div>
       
            </form>
        </div>
    </div>
</body>

</html>
