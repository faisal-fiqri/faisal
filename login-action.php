<?php
    // Memanggil file koneksi
    //include "koneksi.php";

    //Deklarasi Variabel
    $emailLogin = "andhika@gmail.com";
    $passwordLogin = "Andhika123";
    $admin ="admin@mail.com";
    $pwadmin="admin";
    //Memulai Session
    session_start();

    //Mengambil data dari halaman Login
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Memanggil username dan password dari database
    /* $query = mysqli_query($koneksi, "SELECT username, password FROM user WHERE username = '$username' AND password = '$password'");
    $hasil = mysqli_num_rows($query);*/

    //Validasi Login
    /* if ($hasil > 0) {
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;

        header("Location: afterLogin/beranda.php");
    } else {
        header("Location: login.php");
    }*/

    //Validasi Login
    if ($email == $emailLogin && $password == $passwordLogin) {
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;

        header("Location: akun/beranda.php");
    } else if($email == $admin && $password == $pwadmin) {
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        header("Location:dashboard_admin/index.php?dashboard=home");
    }
        else{
        header("Location: login.php");
    }

?>