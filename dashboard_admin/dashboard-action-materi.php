<?php 
//Materi
    require_once "../config.php";

    $judul = $_POST["inputMateri"];
    $kelas = $_POST["inputKelas"];
    $mapel = $_POST["inputMapel"];
    // var_dump($_FILES["inputFile"][]); die;
    $file = $_FILES['inputFile']['name'];
    $deskripsi = $_POST["inputDeskripsi"];
    
    $folder = "assets/file/";
    $filename = $_FILES["inputFile"]["name"];
    $filename = strtolower($filename);
    $filename = str_replace(' ', '-', $filename);
    $file_loc = $_FILES["inputFile"]["tmp_name"];
    move_uploaded_file($file_loc,$folder.$filename);
    // var_dump($filename); die;
    $query = "INSERT INTO materi VALUES('', '$judul', '$kelas', '$mapel', '$filename', '$deskripsi')";

    // mysqli_query($db, $query);


    if(mysqli_query($db, $query)){
        
        header("Location: index.php?dashboard=video");
    }else{
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
?>