<?php 
//Video
    require_once "../config.php";

    //https://www.w3schools.com/php/php_mysql_insert.asp

    $judul = $_POST["inputMateri"];
    $kelas = $_POST["inputKelas"];
    $mapel = $_POST["inputMapel"];
    $link= mysqli_real_escape_string($db, $_POST["inputFile"]);
    $deskripsi = $_POST["inputDeskripsi"];
    
    // var_dump($_POST); die;
    $query = "INSERT INTO video VALUES('', '$kelas', '$mapel', '$link', '$deskripsi', '$judul')";


    if(mysqli_query($db, $query)){
    
        header("Location: index.php?dashboard=video");
    }else{
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
?>