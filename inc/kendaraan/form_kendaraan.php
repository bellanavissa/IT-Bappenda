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
   <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
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
      <div class="inner_container">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div class="sidebar_blog_1">
               <div class="sidebar-header">
                  <div class="logo_section">
                     <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                  </div>
               </div>
               <div class="sidebar_user_info">
                  <div class="icon_setting"></div>
                  <div class="user_profle_side">
                     <div class="user_img"><img class="img-responsive" src="asset/images/layout_img/user_img.jpg" alt="#" /></div>
                     <div class="user_info">
                        <h6>John David</h6>
                        <p><span class="online_animation"></span> Online</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="sidebar_blog_2">
               <h4>General</h4>
               <ul class="list-unstyled components">
                  <li class="active">
                     <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     <ul class="collapse list-unstyled" id="dashboard">
                        <li>
                           <a href="dashboard.html">> <span>Default Dashboard</span></a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                     <ul class="collapse list-unstyled" id="element">
                        <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                        <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                        <li><a href="icons.html">> <span>Icons</span></a></li>
                        <li><a href="invoice.html">> <span>Invoice</span></a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                     <ul class="collapse list-unstyled" id="apps">
                        <li><a href="email.html">> <span>Email</span></a></li>
                        <li><a href="calendar.html">> <span>Calendar</span></a></li>
                        <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                     </ul>
                  </li>
                  <li class="active">
                     <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                     <ul class="collapse list-unstyled" id="additional_page">
                        <li>
                           <a href="profile.html">> <span>Profile</span></a>
                        </li>
                        <li>
                           <a href="project.html">> <span>Projects</span></a>
                        </li>
                        <li>
                           <a href="login.html">> <span>Login</span></a>
                        </li>
                        <li>
                           <a href="404_error.html">> <span>404 Error</span></a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">
            <!-- topbar -->
            <div class="topbar">
               <nav class="navbar navbar-expand navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                     <div class="logo_section">
                        <a href="index.html"><img class="img-responsive" src="asset/images/logo/logo.png" alt="#" /></a>
                     </div>
                     <div class="right_topbar">
                        <div class="icon_info">
                           <ul class="user_profile_dd">
                              <li>
                                 <a class="dropdown-toggle" data-toggle="dropdown"><img class="asset/img-responsive rounded-circle" src="asset/images/layout_img/user_img.jpg" alt="#" /><span class="name_user">John David</span></a>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="profile.html">My Profile</a>
                                    <a class="dropdown-item" href="settings.html">Settings</a>
                                    <a class="dropdown-item" href="help.html">Help</a>
                                    <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
            <!-- end topbar -->
            <!-- dashboard inner -->
            <head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>Formulir Pendataan Kendaraan</title>
               <script src="https://cdn.tailwindcss.com"></script>
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
               <style>
                  .form-container {
                     box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
                     transition: all 0.3s ease;
                  }

                  .form-container:hover {
                     box-shadow: 0 20px 50px -10px rgba(0, 0, 0, 0.15);
                  }

                  .input-field:focus {
                     border-color: #3b82f6;
                     box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
                  }

                  .btn-submit {
                     background-image: linear-gradient(to right, #3b82f6, #6366f1);
                     transition: all 0.3s ease;
                  }

                  .btn-submit:hover {
                     background-image: linear-gradient(to right, #2563eb, #4f46e5);
                     transform: translateY(-2px);
                  }
               </style>
            </head>
            <div class="midde_cont">
               <div class="container-fluid">
                  <div class="row column_title">
                     <div class="col-md-12">
                        <div class="page_title">
                           <h2>Formulir Tambah Kendaraan</h2>
                        </div>

                        <div class="min-h-screen flex items-center justify-center p-4">
                           <div class="w-full max-w-4xl bg-white rounded-lg overflow-hidden form-container p-8">
                              <div class="text-center mb-8">
                                 <div class="flex justify-center mb-4">
                                    <i class="fas fa-car text-5xl text-blue-500"></i>
                                 </div>
                                 <h1 class="text-3xl font-bold text-gray-800">FORMULIR TAMBAH KENDARAAN</h1>
                                 <p class="text-gray-600">Badan Pendapatan Daerah - BAPPENDA</p>
                              </div>

                              <form method="post" action="" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                 <!-- Kolom Pertama -->
                                 <div class="space-y-4">
                                    <div>
                                       <label for="no_plat" class="block text-sm font-medium text-gray-700 mb-1">Nomor Plat Kendaraan <span class="text-red-500">*</span></label>
                                       <input type="text" id="no_plat" name="no_plat" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                                          placeholder="Contoh: B 1234 ABC">
                                    </div>

                                    <div>
                                       <label for="merk" class="block text-sm font-medium text-gray-700 mb-1">Merk Kendaraan <span class="text-red-500">*</span></label>
                                       <input type="text" id="merk" name="merk" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                                          placeholder="Contoh: Toyota">
                                    </div>

                                    <div>
                                       <label for="tipe" class="block text-sm font-medium text-gray-700 mb-1">Tipe Kendaraan <span class="text-red-500">*</span></label>
                                       <input type="text" id="type" name="type" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                                          placeholder="Contoh: Avanza">
                                    </div>

                                    <div>
                                       <label for="silinder" class="block text-sm font-medium text-gray-700 mb-1">Silinder (cc) <span class="text-red-500">*</span></label>
                                       <input type="number" id="silinder" name="silinder" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                                          placeholder="Contoh: 1500">
                                    </div>

                                    <div>
                                       <label for="warna" class="block text-sm font-medium text-gray-700 mb-1">Warna <span class="text-red-500">*</span></label>
                                       <input type="text" id="warna_kb" name="warna_kb" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                                          placeholder="Contoh: Hitam">
                                    </div>
                                 </div>

                                 <!-- Kolom Kedua -->
                                 <div class="space-y-4">
                                    <div>
                                       <label for="no_bpkb" class="block text-sm font-medium text-gray-700 mb-1">Nomor BPKB <span class="text-red-500">*</span></label>
                                       <input type="text" id="no_bpkb" name="no_bpkb" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                                          placeholder="Masukkan nomor BPKB">
                                    </div>

                                    <div>
                                       <label for="no_rangka" class="block text-sm font-medium text-gray-700 mb-1">Nomor Rangka <span class="text-red-500">*</span></label>
                                       <input type="text" id="no_rangka" name="no_rangka" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                                          placeholder="Masukkan nomor rangka">
                                    </div>

                                    <div>
                                       <label for="no_mesin" class="block text-sm font-medium text-gray-700 mb-1">Nomor Mesin <span class="text-red-500">*</span></label>
                                       <input type="text" id="no_mesin" name="no_mesin" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                                          placeholder="Masukkan nomor mesin">
                                    </div>

                                    <div>
                                       <label for="bahan_bakar" class="block text-sm font-medium text-gray-700 mb-1">Jenis Bahan Bakar <span class="text-red-500">*</span></label>
                                       <select id="bahan_bakar" name="bahan_bakar" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none">
                                          <option value="">Pilih Bahan Bakar</option>
                                          <option value="Bensin">Bensin</option>
                                          <option value="Solar">Solar</option>
                                          <option value="Listrik">Listrik</option>
                                          <option value="Hibrida">Hibrida</option>
                                          <option value="Lainnya">Lainnya</option>
                                       </select>
                                    </div>

                                    <div>
                                       <label for="warna_tnbk" class="block text-sm font-medium text-gray-700 mb-1">Warna TNBK <span class="text-red-500">*</span></label>
                                       <input type="text" id="warna_tnbk" name="warna_tnbk" required
                                          class="w-full px-4 py-2 border border-gray-300 rounded-md input-field focus:outline-none"
                                          placeholder="Contoh: Putih">
                                    </div>
                                 </div>

                                 <div class="md:col-span pt-4">
                                    <button type="submit" class="w-full py-3 px-4 btn-submit text-white font-bold rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                       <i class="fas fa-save mr-2"></i> Simpan Data Kendaraan
                                    </button>
                                 </div>
                                 <div class="md:col-span pt-4">
                                    <button type="submit" class="w-full py-3 px-4 btn-submit text-white font-bold rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                       <i class="fas fa-save mr-2"></i> Batal
                                    </button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            <div>
               <!-- footer -->
               <div class="container-fluid">
                  <div class="footer">
                     <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                        Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                     </p>
                  </div>
               </div>
            </div>
            <!-- end dashboard inner -->
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
   <!-- owl carousel -->
   <script src="asset/js/owl.carousel.js"></script>
   <!-- chart js -->
   <script src="asset/js/Chart.min.js"></script>
   <script src="asset/js/Chart.bundle.min.js"></script>
   <script src="asset/js/utils.js"></script>
   <script src="asset/js/analyser.js"></script>
   <!-- nice scrollbar -->
   <script src="asset/js/perfect-scrollbar.min.js"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="asset/js/custom.js"></script>
   <script src="asset/js/chart_custom_style1.js"></script>
</body>

</html>