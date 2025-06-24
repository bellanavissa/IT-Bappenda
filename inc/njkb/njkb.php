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
   <title>SILONA</title>
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
            <h2>DATA NILAI JUAL KENDARAAN BERMOTOR (NJKB)</h2>
         </div>
         <div class="">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Daftar NJKB</h2>
                     <a href="?page=njkb&action=tambah" type="submit" name="tambah" class="btn btn-success mt-3"><i class="fa fa-pencil" aria-hidden="true"></i> Tambah</a>
                  </div>
               </div>

               <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                              <label class="form-label">Jenis Kendaraan</label>
                              <select class="form-control" name="tjenis_kdr">
                                  <option>Pilih</option>
                                  <option value="Bus">Bus</option>
                                  <option value="Motor">Motor</option>
                                  <option value="Jeep">Jeep</option>
                                  <option value="Mikrobus">Mikrobus</option>
                                  <option value="Motor">Motor</option>
                                  <option value="Sedan">Sedan</option>
                                  <option value="Truck">Truck</option>
                                </select>
                            <div class="mb-3">
                              <label class="form-label">Merk Kendaraan</label>
                              <input type="text" class="form-control" name="tmerk" id="tmerk" placeholder="Isi Merk Kendaraan">
                            </div>
                            
                            <div class="mb-3">
                              <label class="form-label">Tahun Pembuatan</label>
						       <input type="number" class="form-control" id="tahun" name="tahun" 
						               min="1900" max="2100" 
						               value="<?php echo date('Y'); ?>">

                               <input type="number" class="form-control" id="tahun_now" name="tahun_now" 
                                       min="1900" max="2100" 
                                       value="<?php echo date('Y'); ?>" hidden>


                            </div>
                            <div class="mb-3">
                              <label class="form-label">Usia Kendaraan (Tahun)</label>
                              <input type="number" class="form-control" name="tusia" id="tusia" placeholder="Usia Kendaraan">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Tipe Kendaraan</label>
                              <input type="text" class="form-control" name="ttipe" placeholder="Isi Tipe Kendaraan">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Nilai Jual</label>
                              <input type="number" class="form-control" name="tnilai_jual" id="tnilai_jual" placeholder="Isi Nilai Jual">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">NJKB</label>
                              <input type="text" class="form-control" name="njkb" id="njkb" placeholder="Nominal Otomatis">
                            </div>

                            <div class="mb-3">
                              <button type="submit" name="btambah" class="btn btn-primary">Tambah</button>
                              <button type="reset" class="btn btn-danger">Batal</button>
                            </div>
                        </form>

                        <?php 

                        $tjenis_kdr = @$_POST['tjenis_kdr'];
                        $tmerk = @$_POST['tmerk'];
                        $tahun = @$_POST['tahun'];
                        $ttipe = @$_POST['ttipe'];
                        $tnilai_jual = @$_POST['tnilai_jual'];
                        $njkb = @$_POST['njkb'];


                        $btambah = @$_POST['btambah'];

                        if(isset($btambah)){

                            if ($tjenis_kdr == "" || $tmerk == "" || $tahun == "" || $ttipe == "" || $tnilai_jual == "" || $njkb == "") {
                            ?><script>alert('Inputan tidak boleh kosong!')</script><?php
                          } else {
                                mysqli_query($koneksi,"INSERT INTO tb_njkb (jenis, merk, tahun, tipe, nilai_jual, njkb) 
                                VALUES ('$tjenis_kdr', '$tmerk', '$tahun', '$ttipe', '$tnilai_jual', '$njkb')") or die(mysqli_error());

                                ?><script type="text/javascript">alert('Data Berhasil ditambahkan!');
                                window.location.href="?page=njkb";</script>";<?php
                           
                             }
                        }

                         ?>


                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Nilai Jual Kendaraan Bermotor (NJKB)</h6>
    </div>
    <div class="card-body">
        
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Jenis Kendaraan</th>
                        <th>Merk Kendaraan</th>
                        <th>Tahun</th>
                        <th>Tipe</th>
                        <th>Nilai Jual</th>
                        <th>NJKB</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                	$no=1;
                	$sql = mysqli_query($koneksi,"SELECT * FROM tb_njkb") or die(mysql_error());
                	while ($data = mysqli_fetch_array ($sql)) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['jenis']  ?></td>
                        <td><?php echo $data['merk']  ?></td>
                        <td><?php echo $data['tahun']  ?></td>
                        <td><?php echo $data['tipe']  ?></td>
                        <td><?php echo $data['nilai_jual'] ?></td>
                        <td><?php echo $data['njkb'] ?></td>
                        <td><a href="?page=njkb&action=ubah" class="btn btn-success">Ubah</a>
                            <a href="?page=njkb&action=hapus" class="btn btn-warning">Hapus</td>

                    </tr>
                </tbody>

                <?php 
                	}
                 ?>
            </table>

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
   <script src="js/custom.js">
		
   </script>

</body>
</html>
<script type="text/javascript">
 $("#tahun,#tnilai_jual,#tusia").keyup(function(){   
   var a = parseFloat($("#tahun").val());
   var b = parseFloat($("#tahun_now").val());
   var c = b-a;
   var d = parseFloat($("#tnilai_jual").val());
   $("#tusia").val(c);

   if ( c > 5) {
    var njkb = d - (d*2.5/100);
   } else {
    var njkb = d ;
   }
   $("#njkb").val(njkb);

}); 
</script>
