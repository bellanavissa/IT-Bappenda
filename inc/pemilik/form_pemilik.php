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
                        <input type="text" name="alamat" class="form-control" id="alamat">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_ktp" class="col-sm-2 col-form-label">No. Ktp</label>
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
                            <a href="view_pemilik.php" button type="submit" class="btn btn-danger" name="submit" >Batal</button></a>
                        </div>
                    </div>
                    </form>
<!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>