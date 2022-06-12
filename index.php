<?php require "layouts/head.php"; ?>
<body>  
    <?php require "layouts/navbar.php"; ?>
  
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

    <?php require "layouts/footer.php"; ?>
</body>
</html>