<?php
include "inc/koneksi.php";
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
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- site css -->
   <link rel="stylesheet" href="style.css" />
   <!-- responsive css -->
   <link rel="stylesheet" href="css/responsive.css" />
   <!-- color css -->
   <link rel="stylesheet" href="css/colors.css" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="css/bootstrap-select.css" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="css/perfect-scrollbar.css" />
   <!-- custom css -->
   <link rel="stylesheet" href="css/custom.css" />
   <!-- calendar file css -->
   <link rel="stylesheet" href="js/semantic.min.css" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="page_title">
         <h2>DATA KENDARAAN</h2>
      </div>
      <div class="">
         <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
               <div class="heading1 margin_0">
                  <h2>Tabel Daftar Kendaraan</h2>
                  <a href="?page=kendaraan&action=tambah" type="submit" class="btn btn-success mt-3"><i class="fa fa-pencil" aria-hidden="true"></i> Tambah</a>
               </div>
            </div>

            <div class="table_section padding_infor_info">
               <div class="table-responsive-sm">
                  <table class="table table-hover">
                     <tr>
                        <th>No.</th>
                        <th>No. Plat</th>
                        <th>Merk Kendaraan</th>
                        <th>Tipe Kendaraan</th>
                        <th>Silinder</th>
                        <th>Warna Kendaraan</th>
                        <th>No. BPKB</th>
                        <th>No. Rangka</th>
                        <th>No. Mesin</th>
                        <th>Bahan Bakar</th>
                        <th>Warna TNKB</th>
                        <th>Aksi</th>
                     </tr>
                     <?php
                     $no = 1;
                     $query = "SELECT * FROM tbl_knd";
                     $sql = mysqli_query($koneksi, $query) or die(mysqli_error());
                     while ($data = mysqli_fetch_array($sql)) {
                     ?>
                        <tr>
                           <td><?php echo $no++; ?></td>
                           <td><?php echo $data['nopol']; ?></td>
                           <td><?php echo $data['merk']; ?></td>
                           <td><?php echo $data['tipe']; ?></td>
                           <td><?php echo $data['silinder']; ?></td>
                           <td><?php echo $data['warna_kb']; ?></td>
                           <td><?php echo $data['no_bpkb']; ?></td>
                           <td><?php echo $data['no_rangka']; ?></td>
                           <td><?php echo $data['no_mesin']; ?></td>
                           <td><?php echo $data['bahan_bakar']; ?></td>
                           <td><?php echo $data['warna_tnkb']; ?></td>
                           <td><a href="?page=kendaraan&action=ubah&id_knd=<?php echo $data['id_knd']; ?>"
                                 type="submit" class="btn btn-sm btn-primary" name="ubah"><i class="fa fa-edit"></i></a>
                              <a onclick="return confirm('Yakin akan menghapus data ini?')"
                                 href="?page=kendaraan&action=hapus&id_knd=<?php echo $data['id_knd'] ?>"
                                 type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                           </td>

                        </tr>
                     <?php
                     }
                     ?>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>

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