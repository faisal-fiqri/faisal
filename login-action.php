<?php
    // Memanggil file koneksi
    require "config.php";

    //Mengambil data dari halaman Login
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Memanggil username dan password dari database
    $query = mysqli_query($db, "SELECT email, password, admin FROM users WHERE email = '$email'");
    $hasil = mysqli_num_rows($query);

    //  var_dump($hasil); die;

    //Validasi Login
    if ($hasil > 0) {
        $row = mysqli_fetch_assoc($query);
        // var_dump($row);
        if($row["admin"] == 1){
            header("Location:dashboard_admin/index.php?dashboard=home");
        }else{
            if(password_verify($password, $row["password"])){
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $password;
                // echo 'berhasil';
                header("Location: afterLogin/beranda.php");
            }
        }
        
        
    } else {
        echo "  <script> 
                    alert('Email atau Password salah')
                </script>";
        header("Location: login.php");
    }


   

?>