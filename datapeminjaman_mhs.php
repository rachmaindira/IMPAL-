<!doctype html>
<html lang="en">

  <head>
    <title>Webpus.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <style type="text/css">
      form {
          width:500px;
          margin:50px auto;
      }
      .search {
          padding:8px 15px;
          background:rgba(50, 50, 50, 0.2);
          border:0px solid #dbdbdb;
      }
      .button {
          position:relative;
          padding:6px 15px;
          left:-8px;
          border:2px solid #53bd84;
          background-color:#53bd84;
          color:#fafafa;
      }
      .button:hover  {
          background-color:#fafafa;
          color:#207cca;
      }
    </style>
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container mb-3">
          <div class="d-flex align-items-center">
            <div class="site-logo mr-auto">
              <a href="index.html">WEBPUS<span class="text-primary">.</span></a>
            </div>
            <div class="site-quick-contact d-none d-lg-flex ml-auto ">
              
            </div>
          </div>
        </div>


        <div class="container">
          <div class="menu-wrap d-flex align-items-center">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>

              <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto ">
                  <li class="active"><a href="index_mhs.html" class="nav-link">Home</a></li>
                  <li><a href="katalog_mhs.php" class="nav-link">Katalog Buku</a></li>
                  <li><a href="datapeminjaman_mhs.php" class="nav-link">Riwayat Peminjaman Buku</a></li>
                  <li><a href="about_mhs.php" class="nav-link">About Us</a></li>
                  <li><a href="galeri_mhs.php" class="nav-link">Galerry</a></li>
                  <li><a href="logout.php" class="nav-link">Log Out</a></li>
                </ul>
              </nav>
              
              <div class="top-social ml-auto">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
              </div>
          </div>
        </div>

       

      </header>

    

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-5 mt-5 pt-5">
              <h1 class="mb-3">HALAMAN DATA BUKU</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


     <div class="container">
                <div class="row ">
                    <div class="col-xs-24 col-sm-12 col-md-24" style="text-align: center;">
                        <div class="header-text">
                        <h2 > Riwayat Peminjaman </h4>
                            <form method="GET" action="">
                              <input class="search" type="text" placeholder="Cari..." required> 
                              <input class="button" type="submit" value="Cari">   
                            </form>
                             </div>
                                <?php
                                  include "koneksi.php";
                                  $query = mysqli_query($koneksi,"SELECT * FROM peminjaman ;");
                                ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                      <th>Nama Lengkap</th>
                                      <th>Nim</th>
                                      <th>Judul Buku</th> 
                                      <th>Tanggal Peminjaman</th>
                                      <th>Status</th>
                                      <th>Tanggal Pengembalian</th>
                                    </thead>

                                    <tbody>
                                      
                                      <tr>
                                        <?php if(mysqli_num_rows($query)>0){ ?>
                                        <?php
                                          $no = 1;
                                          while($data = mysqli_fetch_array($query)){
                                        ?>
                                        <tbody>
                                        <tr>
                                            <td><?php echo $data["nama_lengkap"];?></td>
                                            <td><?php echo $data["nim"];?></td>
                                            <td><?php echo $data["judul_buku"];?></td>
                                            <td><?php echo $data["tanggal_peminjaman"];?></td>
                                            <td><?php echo $data["status"];?></td>
                                            <td><?php echo $data["tanggal_kembali"];?></td>
                                        </tr>
                                        </tbody>
                                        <?php $no++; } ?>
                                        <?php } ?>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        
      </div>
    </div>

    

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

