<?php 
require "config.php";
if( isset($_POST["nama"])){
    
        $username = strtolower(stripslashes($_POST["nama"]));
        $email = $_POST["email"];
        $password = mysqli_real_escape_string($db, $_POST["password"]);
        $password2 = mysqli_real_escape_string($db, $_POST["password2"]);
        // var_dump($username); die;
        if($password !== $password2){
            echo "  <script>
                        alert('Konfirmasi Password tidak sesuai');
                    </script>";
           
        }else{
            //enkripsi password
            $password = password_hash($password, PASSWORD_DEFAULT);
            // var_dump($password); die;
            
            mysqli_query($db, "INSERT INTO users VALUES ('', '$username', '$email', '$password')");
            
            if(mysqli_affected_rows($db)){
                // echo "<script>
                //         alert('user baru berhasil ditambahkan!');
                //       </script>";
                
                session_start();
                
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $password;
                header("Location: akun/beranda.php");
            }else{
                echo "gagal";
            }
        
        }
   
         echo mysqli_error($db);
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Siswa</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
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
                    <li class="nav-item active">
                        <a href="login.php" class="nav-link active" current page="true">Mulai Belajar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Register -->
    <div class="flex items-center justify-center" style="margin: 50px 0;">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
            <center>
                <h1 class="block text-grey-darker text-sm font-bold" style="margin-top: 10px; margin-bottom: 40px; font-size: 30px;">Daftar</h1>
            </center>
            <form action="register.php" method="post" >
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="nama">
                        Nama Lengkap
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="nama" type="text" name="nama" placeholder="John Doe">
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" type="email" name="email" placeholder="john@gmail.com">
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-2" name="password" id="password" type="password" placeholder="******">
                </div>
                <div class="mb-6">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                        Konfirmasi Password
                    </label>
                    <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-2" name="password2" id="password2" type="password" placeholder="******">
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-primary hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" type="submit">
                        Daftar
                    </button>
                    <a href="login.php">
                        <u>Masuk</u>
                    </a>
                </div>
            </form>
        </div>
    </div>
    

    <!-- Footer -->
    <!-- <footer class="container-footer">
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
    </div> -->


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>