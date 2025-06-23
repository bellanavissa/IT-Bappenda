<?php
require 'koneksi.php';

// Jika form disubmit
if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $no_ktp = mysqli_real_escape_string($conn, $_POST['no_ktp']);
    $no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);

    // Query untuk insert data
    $sql = "INSERT INTO tbl_wp VALUES ('$nama','$alamat','$no_ktp','$no_hp')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}


?>

<!DOCTYPE html>
<html lang="en">

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
</head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="page_title" align="">
            <h2>TAMBAH DATA KARYAWAN</h2>
         </div>

         <div class="col-md-12">
               <div class="white_shd full margin_bottom_30">
                  <div class="full graph_head">
                     <div class="heading1 margin_0">
                        <h2>Form Tambah Karyawan</h2>
                     </div>
                  </div>
                           <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Pemilik</label>
                                <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="nama" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                <input type="text" name="alamat_jl" class="form-control" id="alamat_jl">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_ktp" class="col-sm-2 col-form-label">No. KTP</label>
                                <div class="col-sm-10">
                                <input type="text" name="no_ktp" class="form-control" id="no_ktp" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_hp" class="col-sm-2 col-form-label">No. HP</label>
                                <div class="col-sm-10">
                                <input type="text" name="no_hp" class="form-control" id="no_hp" >
                                </div>
                            </div>
                        
                            
                            <div class="mb-3 row mt-4">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
                                    <a href="pemilik.php" button type="submit" class="btn btn-danger" name="submit" >Batal</button></a>
                                </div>
                            </div>
                            </form>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <!-- jQuery -->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/popper.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="asset/js/animate.js"></script>
      <!-- select country -->
      <script src="asset/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="asset/js/custom.js"></script>
   </body>
</html>