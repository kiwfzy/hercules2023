<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Website Pengaduan Masyarakat</title>
    <link rel="shortcut icon" href="./img/icon.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <!-- Main Styles CSS -->
    <link href="./css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="./js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="./js/bootstrap.js"></script>
    <!-- Animate CSS -->
    <link rel="stylesheet" href="./css/animate.min.css">
</head>

<body>
<div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.11';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

        <div class="shadow">
            <!-- navbar -->
            <nav class="navbar navbar-inverse navbar-fixed form-shadow">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav nav-link">
                            <li class="active"><a href="">HOME</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right nav-link">
                            <li><a href="loginpage.php">LOGIN</a></li>
                            <li><a href="register.php">REGISTER</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <!-- end navbar -->

            <!-- start slider -->
            <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mainCarousel" data-slide-to="1"></li>
                    <li data-target="#mainCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/bgjawa.jpg" alt="...">
                        <div class="carousel-caption welcome">
                            <h2 class="animated bounceInRight">Selamat Datang DI</h2>
                            <h3 class="animated bounceInLeft">Website Pengaduan Masyarakat</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/bggray.jpg" alt="...">
                        <div class="carousel-caption">
                            <h2 class="animated bounceInDown">Pejabat</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/ac.png" alt="...">
                        <div class="carousel-caption">
                            <h2 class="animated bounceInUp">Pengumuman</h2>
                        </div>
                    </div>
                </div>

            </div>
                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-content">
<h3>Cara Membuat atau mendaftarkan Akun</h3>
<hr/>

<p>Anda dapat menyampaikan pengaduan Anda dengan cara:</p>
<p><strong>Membuat AKun</strong></p>
<ul>
    <li>
        Masukan data pribadi dan pengaduan Anda di <a href="register.php">sini</a>
    </li>
    <li>
        Setelah memasukan semua data yang diperlukan Anda akan mendapatkan nomor pengaduan,
        catat nomor ini karena Anda akan membutuhkannya untuk mengetahui status pengaduan Anda.
    </li>
    <li>
        Nomor pengaduan ini juga dikirim ke alamat email Anda.
    </li>
    <li>
        Untuk mengetahui status pengaduan, masukan nomor
        pengaduan Anda pada menu <strong>Lihat Pengaduan</strong>.
    </li>
    
</div>

            </div>
            <!-- end main-content -->

            <!-- Footer -->
            <footer class="footer text-center">
                <div class="row">
                    <div class="col-md-4 mb-5 mb-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <h4 class="text-uppercase mb-4">Kantor</h4>
                            </li>
                        </ul>
                        <p class="mb-0">
                            Jalan Cipeundeuy No 50
                            <br>Bandung, Jawa barat
                        </p>
                        </div>
                        <div class="col-md-4 mb-5 mb-lg-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <h4 class="text-uppercase mb-4">Terima Kasih Sudah Mengunjungi</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <h4 class="text-uppercase mb-4">Kontak</h4>
                                </li>
                            </ul>
                            <p class="mb-0">
                                083821388748 <br>
                                PengaduanRPL@gmail.com <br>
                                PengaduanMasyrakat@gmail.com
                            </p>
                        </div>
                    </div>
                </footer>
                <!-- /footer -->
             
        </div>

</body>
</html>
