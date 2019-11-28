<!doctype html>
<html lang="en" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/home.css">

    <title>Halaman Login Sisurat</title>
  </head>
  <body class="d-flex flex-column h-100">
    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="#">SISURAT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal3">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" data-toggle="modal" data-target="#myModal2">Hubungi Kami</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End of Navbar -->
    </header>
    <main role="main" class="flex-shrink-0">
      <div class="container">
        <h1 class="mt-5">SISTEM WEBSITE SISURAT</h1>
        <p class="lead">Sistem Informasi Penyuratan Keluar Organisasi Forum OpenSource Teknik Informatika, Bacalah Dokumentasi penggunaan sebelum memakai sistem informasi ini. <code>Versi 1.0</code>.</p>
        <p>Silahkan <code>login</code> terlebih dahulu untuk mengakses Dashboard, apabila tidak memiliki akun silahkan contact administrator pada menu <code>Hubungi Kami</code>.</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">DASHBOARD LOGIN</button>
      </div>
    </main>

    <!-- Modal Button -->
    <div id="myModal" class="modal fade text-center">
      <div class="modal-dialog">
        <div class="col-lg-8 col-sm-8 col-12 main-section">
          <div class="modal-content">
            <div class="col-lg-12 col-sm-12 col-12 user-img">
              <img src="/assets/images/man01.png">
            </div>
            <div class="col-lg-12 col-sm-12 col-12 user-name">
              <h1>LOGIN USER</h1>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="col-lg-12 col-sm-12 col-12 form-input">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="NIM" name="nim">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" nim="password">
                </div>
                <button type="submit" class="btn btn-success">Login</button>
              </form>
            </div>
            <div class="col-lg-12 col-sm-12 col-12 link-part">
                <a href="#" target="">Forgot Password?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Modal BUtton -->

    <!-- Modal Button -->
    <div id="myModal2" class="modal fade text-center">
      <div class="modal-dialog">
        <div class="col-lg-8 col-sm-8 col-12 main-section">
          <div class="modal-content">
            <div class="col-lg-12 col-sm-12 col-12 user-img">
              <img src="/assets/images/man01.png">
            </div>
            <div class="col-lg-12 col-sm-12 col-12 user-name">
              <h4>Hubungi Kami</h4>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="col-lg-12 col-sm-12 col-12 text-left">
              <b>Our Office :</b>
              <p>Gd. J Lantai 3 Sayap kanan, Fakultas Komunikasi dan Informasi, Kampus 2, Universitas Muhammadiyah Surakarta.</p>
              <b>Contact Admin :</b>
              <ul>
                <li>0888 599 4354 ( Whatsapp )</li>
                <li>fostiums@gmail.com ( Email )</li>
              </ul>
            </div>
            <div class="col-lg-12 col-sm-12 col-12 link-part">
              Keep in Touch with us :) 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Modal BUtton -->

    <!-- Modal Button -->
    <div id="myModal3" class="modal fade text-center">
      <div class="modal-dialog">
        <div class="col-lg-8 col-sm-8 col-12 main-section">
          <div class="modal-content">
            <div class="col-lg-12 col-sm-12 col-12 user-img">
              <img src="/assets/images/man01.png">
            </div>
            <div class="col-lg-12 col-sm-12 col-12 user-name">
              <h4>About US</h4>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="col-lg-12 col-sm-12 col-12 text-left">
              <b>About Fosti :</b>
              <p>Fosti adalah sebuah organisasi / ukm mahasiswa Universitas Muhammadiyah Surakarta yang menampung mahasiswa dengan semangat dan jiwa opensource.</p>
              <b>About Sisurat :</b>
              <p>Sisurat adalah sebuat sistem informasi penyuratan keluar yang dibuat untuk generating nomor surat guna mempermudah anggota fosti untuk mengetahui nomor surat yang digunakan.</p>
            </div>
            <div class="col-lg-12 col-sm-12 col-12 link-part">
              Keep in Touch with us :) 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Modal BUtton -->

    <footer class="footer mt-auto py-3">
      <div class="container">
        <span class="text-muted">Forum Open Source Teknik Informatika &copy 2019.</span>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>