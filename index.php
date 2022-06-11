<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Siswa</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm p-3 bg-body rounded sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><b>Ruang Siswa</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="video.php">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="podcast.php">Podcast</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modul.php">Modul</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang-kami.php">Tentang Kami</a>
                    </li>
                    <li>
                        <a class="btn btn-primary" href="login.php">Mulai Belajar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Ajakan Mendaftar -->
    <div class="container-light">
      <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h1>Sesuaikan Gaya Belajarmu</h1>
                <p>Sukseskan pendidikanmu dengan metode pembelajaran yang tepat</p>
                <a href="register.php" class="btn btn-primary">Daftar Sekarang</a>
            </div>
            <div class="col">
                <img src="https://cdn-icons-png.flaticon.com/512/2641/2641497.png" class="img-fluid">
            </div>
        </div>
      </div>
    </div>

    <!-- Materi Terbaru -->
    <div class="container-content">
      <div class="container">
      <div class="title text-center mb-5">
        <h1>Materi Terbaru</h1>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3 mb-5">
          <div>
            <img src="https://ipa.pelajaran.co.id/wp-content/uploads/2020/07/Ciri-Ciri-Makhluk-Hidup.jpg" class="img-fluid">
          </div>
          <h3>Ciri-Ciri Makhluk Hidup</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
          <p><i class="fa fa-film" aria-hidden="true"></i> Video</p>
          <br>
          <a href="video-1.php" class="btn btn-primary">Detail</a>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 mb-5">
          <div>
            <img src="https://ipa.pelajaran.co.id/wp-content/uploads/2020/07/Ciri-Ciri-Makhluk-Hidup.jpg" class="img-fluid">
          </div>
          <h3>Ciri-Ciri Makhluk Hidup</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
          <p><i class="fa fa-headphones" aria-hidden="true"></i> Podcast</p>
          <br>
          <a href="podcast-1.php" class="btn btn-primary">Detail</a>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 mb-5">
          <div>
            <img src="https://ipa.pelajaran.co.id/wp-content/uploads/2020/07/Ciri-Ciri-Makhluk-Hidup.jpg" class="img-fluid">
          </div>
          <h3>Ciri-Ciri Makhluk Hidup</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
          <p><i class="fa fa-book" aria-hidden="true"></i> Modul</p>
          <br>
          <a href="modul-1.php" class="btn btn-primary">Detail</a>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 mb-5">
          <div>
            <img src="https://ipa.pelajaran.co.id/wp-content/uploads/2020/07/Ciri-Ciri-Makhluk-Hidup.jpg" class="img-fluid">
          </div>
          <h3>Ciri-Ciri Makhluk Hidup</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
          <p><i class="fa fa-film" aria-hidden="true"></i> Video</p>
          <br>
          <a href="video-1.php" class="btn btn-primary">Detail</a>
        </div>
      </div>
      </div>
    </div>

    <!-- Gaya Belajar -->
    <div class="container-light">
      <div class="container">
        <div class="title text-center mb-5">
          <h1>Gaya Belajar</h1>
        </div>
        <div class="row align-items-center">
          <div class="col-2 text-center" style="margin-right: 9%;">
              <div class="gb-img">
                <img src="https://cdn-icons-png.flaticon.com/512/3074/3074767.png" width="50%">
              </div>
              <h5>Video</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="col-2 text-center" style="margin-right: 9%;">
            <div class="gb-img">
              <img src="https://cdn-icons.flaticon.com/png/512/1890/premium/1890688.png?token=exp=1653985188~hmac=f3669ed21afe6bdcd04bfe99f3762c11" width="50%">
            </div>
            <h5>Podcast</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="col-2 text-center">
            <div class="gb-img">
              <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" width="50%">
            </div>
            <h5>Modul</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="container-footer">
      <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4 footer">
                <h5>Ruang Siswa</h5>
                <a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 footer">
              <h5>Materi</h5>
              <a href="video.php">Video</a><br>
              <a href="podcast.php">Podcast</a><br>
              <a href="modul.php">Modul</a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 footer">
              <h5>Lainnya</h5>
              <a href="tentang-kami.php">Tentang Kami</a>
            </div>
        </div>
      </div>
    </footer>    
    <div class="footer-down">
      <div class="container">
        <p><i class="fa fa-copyright"></i> Ruang Siswa 2022. All Rights Reserved. <a href="" style="float: right;">Bantuan</a></p>
      </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>