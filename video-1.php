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
    <nav class="navbar navbar-expand-lg navbar-light bg-priamry shadow-sm p-3 bg-body rounded sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><b>Ruang Siswa</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" aria-current="page" href="video.php">Video</a>
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

    <!-- Materi Terbaru -->
    <div class="container-light">
        <div class="container">
            <div class="title text-center mb-5">
                <h1>Ciri-Ciri Makhluk Hidup</h1>
            </div>
            <div class="container-video">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/JoGfQNyo3M8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br><br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad neque, aliquam cum voluptate tempora illo fuga necessitatibus voluptatibus vitae animi corporis officiis minus maxime numquam natus repellat asperiores quasi blanditiis.</p>
            <br>
            <p><i class="fa fa-building" aria-hidden="true"></i> Kelas 7</p>
            <p><i class="fa fa-folder" aria-hidden="true"></i> IPA</p>
            <p><i class="fa fa-file-text" aria-hidden="true"></i> Bab: Klasifikasi Makhluk Hidup</p>
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