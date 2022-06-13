<?php

if ($_GET["dashboard"] == "user"){
?>

<!-- Tabel User -->
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Data User</li>
        </ol>
        <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>FIELD 1</th>
                        <th>FIELD 2</th>
                        <th>FIELD 3</th>
                        <th>FIELD 4</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>FIELD 1</th>
                        <th>FIELD 2</th>
                        <th>FIELD 3</th>
                        <th>FIELD 4</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>RECORD 1</td>
                        <td>RECORD 2</td>
                        <td>RECORD 3</td>
                        <td>
                        <!-- Tombol Aksi -->
                        <a href="formedit.php?kode_barang=" class="btn btn-primary">Edit</a>
                        <a href="delete.php?kode_barang=" class="btn btn-danger">Hapus</a>
                        <!-- Tombol Aksi -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<!-- End Tabel User -->

<?php
}else if($_GET["dashboard"] == "materi"){
?>

<!-- Tabel Materi -->
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Materi</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Materi</li>
        </ol>
        <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <!-- DataTable Example -->
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>FIELD 1</th>
                        <th>FIELD 2</th>
                        <th>FIELD 3</th>
                        <th>FIELD 4</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>FIELD 1</th>
                        <th>FIELD 2</th>
                        <th>FIELD 3</th>
                        <th>FIELD 4</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>RECORD 1</td>
                        <td>RECORD 2</td>
                        <td>RECORD 3</td>
                        <td>
                       <!-- Tombol Aksi -->
                        <a href="formedit.php?kode_barang=" class="btn btn-primary">Edit</a>
                        <a href="delete.php?kode_barang=" class="btn btn-danger">Hapus</a>
                        <!-- Tombol Aksi -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<!-- End Tabel Materi  -->

<?php
}else if($_GET["dashboard"]=="video"){
?>

<!-- Tabel Video  -->
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Video</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Video</li>
        </ol>
        <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <!-- DataTable Example -->
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>FIELD 1</th>
                        <th>FIELD 2</th>
                        <th>FIELD 3</th>
                        <th>FIELD 4</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>FIELD 1</th>
                        <th>FIELD 2</th>
                        <th>FIELD 3</th>
                        <th>FIELD 4</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>RECORD 1</td>
                        <td>RECORD 2</td>
                        <td>RECORD 3</td>
                        <td>
                        <!-- Tombol Aksi -->
                        <a href="formedit.php?kode_barang=" class="btn btn-primary">Edit</a>
                        <a href="delete.php?kode_barang=" class="btn btn-danger">Hapus</a>
                        <!-- Tombol Aksi -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<!-- End Tabel Video -->

<?php
}else if($_GET["dashboard"]=="inp_user"){
?>

<!-- Form Input User -->
<div class="container">
    <div class="row justify-content-center">
        <div class="fluid">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header bg-dark"><h3 class="text-center font-weight-light my-4 text-light">User Baru</h3></div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                    <label for="inputFirstName">First name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                    <label for="inputLastName">Last name</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                            <label for="inputEmail">Email address</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                    <label for="inputPassword">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <button class="btn btn-success btn-block" type="submit">
                            <!-- <div class="d-grid"><a class="btn btn-success btn-block" href="login.html"> -->
                            Upload Data
                            <!-- </a></div> -->
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Form Input User -->

<?php
}else if($_GET["dashboard"]=="inp_materi"){
?>

<!-- Form Input Materi -->
<div class="container">
    <div class="row justify-content-center">
        <div class="fluid">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header bg-dark"><h3 class="text-center font-weight-light my-4 text-light">Upload Materi</h3></div>
                <div class="card-body">
                    <form action="dashboard-action-materi.php" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                            <label for="inputMateri">Judul Materi</label>
                            <input class="form-control" id="inputMateri" type="text" name="inputMateri" placeholder="Masukkan Judul Materi" required />
                        </div>
                        <div class="form-group">
                            <label for="inputKelas">Nama Kelas</label>
                            <select name="inputKelas" class="form-control" id="inputKelas" required>
                                <option value="" disabled selected hidden>Klik untuk memilih kelas</option>
                                <option value="7">Kelas 7</option>                    
                                <option value="8">Kelas 8</option>                    
                                <option value="9">Kelas 9</option>      
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Mata Pelajaran</label>
                            <select name="inputMapel" class="form-control" id="inputMapel" required>
                                <option value="" disabled selected hidden>Klik untuk memilih Mata Pelajaran</option>
                                <option value="IPA">IPA</option>                    
                                <option value="IPS">IPS</option>                    
                                <option value="Matematika">Matematika</option>      
                                <option value="B.Indonesia">Bahasa Indonesia</option>                    
                                <option value="B.Inggris">Bahasa Inggris</option>                    
                                <option value="SBK">Seni Budaya dan Keterampilan</option>      
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputBAB">Nama BAB</label>
                            <input class="form-control" id="inputBAB" type="text" name="inputBAB" placeholder="Masukkan Nama BAB" required/>
                        </div>
                        <div class="form-group">
                            <label for="inputFile">Upload Berkas</label>
                            <input class="form-control" id="inputFile" type="file" name="inputFile" placeholder="Masukkan File" required />
                        </div>
                        <div class="form-group">
                            <label for="inputCover">Upload Cover</label>
                            <input class="form-control" id="inputCover" type="file" name="inputCover" placeholder="Masukkan Cover File" required />
                        </div>
                        <div class="form-group">
                            <label for="inputDeskripsi">Deskripsi</label>
                            <textarea class="form-control" id="inputDeskripsi" name="inputDeskripsi" rows="3" required></textarea>
                        </div>
                        <div class="mt-4 mb-0">
                            <button class="btn btn-success btn-block" type="submit">
                            <!-- <div class="d-grid"><a class="btn btn-success btn-block" href="login.html"> -->
                            Upload Data
                            <!-- </a></div> -->
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Form Input Materi -->


<?php
}else if($_GET["dashboard"]=="inp_video"){
?>

<!-- Form Input Video -->
<div class="container">
    <div class="row justify-content-center">
        <div class="fluid">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header bg-dark"><h3 class="text-center font-weight-light my-4 text-light">Upload Video</h3></div>
                <div class="card-body">
                    <form action="dashboard-action-video.php" method="post">
                        <div class="form-group">
                            <label for="inputVideo">Judul Video</label>
                            <input class="form-control" id="inputVideo" type="text" name="inputVideo" placeholder="Masukkan Judul Video" required/>
                        </div>
                        <div class="form-group">
                            <label for="inputKelas">Nama Kelas</label>
                            <select name="inputKelas" class="form-control" id="inputKelas">
                                <option value="" disabled selected hidden>Klik untuk memilih kelas</option>
                                <option value="7">Kelas 7</option>                    
                                <option value="8">Kelas 8</option>                    
                                <option value="9">Kelas 9</option>      
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputMapel">Mata Pelajaran</label>
                            <select name="inputMapel" class="form-control" id="inputMapel" required>
                                <option value="" disabled selected hidden>Klik untuk memilih Mata Pelajaran</option>
                                <option value="IPA">IPA</option>                    
                                <option value="IPS">IPS</option>                    
                                <option value="Matematika">Matematika</option>      
                                <option value="B.Indonesia">Bahasa Indonesia</option>                    
                                <option value="B.Inggris">Bahasa Inggris</option>                    
                                <option value="SBK">Seni Budaya dan Keterampilan</option>      
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputLink">Link Video</label>
                            <input class="form-control" id="inputLink" type="text" name="inputLink" placeholder="Masukkan Alamat URL Video,misal : youtube.com/au87Q9" required/>
                        </div>
                        <div class="form-group">
                            <label for="inputBAB">Nama BAB</label>
                            <input class="form-control" id="inputBAB" type="text" name="inputBAB" placeholder="Masukkan Nama BAB" required/>
                        </div>
                        <div class="form-group">
                            <label for="inputCover">Upload Cover</label>
                            <input class="form-control" id="inputCover" type="file" name="inputCover" placeholder="Masukkan Cover File" required />
                        </div>
                        <div class="form-group">
                            <label for="inputDeskripsi">Deskripsi</label>
                            <textarea class="form-control"  name="inputDeskripsi" id="inputDeskripsi" rows="3" required></textarea>
                        </div>
                        <div class="mt-4 mb-0">
                            <button class="btn btn-success btn-block" type="submit">
                            <!-- <div class="d-grid"><a class="btn btn-success btn-block" href="login.html"> -->
                            Upload Data
                            <!-- </a></div> -->
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Form Input Video -->


<?php
}else {
?>
        <div class="container-fluid px-4">
        <h1 class="mt-4">Selamat Datang , Administrator!</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php?dashboard">Dashboard</a></li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <p class="mb-0">
                        Selamat Datang di Halaman Administrator. Halaman ini digunakan untuk memasukan data baru, melihat informasi tabel, mengedit dan menghapus data yang digunakan pada website Ruang Siswa. 
                    </p>
                </div>
            </div>
        <div style="height: 100vh"></div>

<?php
}
?>
