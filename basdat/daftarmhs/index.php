<?php
    require_once "../db_connect.php";
    if(isset ($_POST['tmbl']))
    {
        $db = new database();
        $nama=$_POST['nama'];
        $nim=$_POST['nim'];
        $jns_klmn=$_POST['jeniskelamin'];
        $jurusan=$_POST['jurusan'];
        $kelas=$_POST['kelas'];
        $alamat=$_POST['alamat'];
        $nohp=$_POST['nohp'];
        $matkul=$_POST['matkul'];
        $jam=$_POST['jam'];
        $email=$_POST['email'];
        $result= mysqli_query($db->koneksi,"INSERT INTO daftarmhs (Nama, NIM, Jenis_Kelamin, Jurusan, Kelas, alamat, nohp, matkul, jam, email) VALUES ('$nama','$nim','$jns_klmn','$jurusan','$kelas','$alamat','$nohp','$matkul','$jam','$email')");
    }
    if(isset ($_POST['rubah']))
    {
        $db = new database();
        $alamat=$_POST['alamat'];
        $nhp=$_POST['nohp'];
        $email=$_POST['email'];
        $matkul=$_POST['matkul'];
        $jam=$_POST['jam'];
        $result= mysqli_query($db->koneksi,"INSERT INTO tb_alamat (alamat_baru) VALUES ('$alamat')");
        $result= mysqli_query($db->koneksi,"INSERT INTO tb_nohp (nohp) VALUES ('$nhp')");
        $result= mysqli_query($db->koneksi,"INSERT INTO tb_email (email_baru) VALUES ('$email')");
        $result= mysqli_query($db->koneksi,"INSERT INTO tb_matkul (matkul_baru) VALUES ('$matkul')");
        $result= mysqli_query($db->koneksi,"INSERT INTO tb_jam (jam_baru) VALUES ('$jam')");
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrasi Form Data Diri</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<style>
#card-content {
    padding: 100px, 150px;

}

#card {
    background-color: #ffffff;
    border-radius: 8px;
    height: 100px;
    margin: auto auto;
    width: 410px;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="../home.php">Home</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Data Diri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil.php">Absensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../kelompok.php">About Us</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                &nbsp; <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
            </div>
        </div>
    </nav>
    <br>
    <center>
        <h2>Form Pendaftaran Registrasi Data Mahasiswa</h2>
        <h4>Silahkan Isi Data Pada Kolom Tersedia!</h4>
    </center>
    <br><br>
    <form method="post" name="form1">
        <div id="card">
            <div id="card-content">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" name="nim">
                </div>
                <div class="mb-3">
                    <input type="radio" id="pria" name="jeniskelamin" value="pria">
                    <label for="pria">Pria</label>
                    <input type="radio" id="wanita" name="jeniskelamin" value="wanita">
                    <label for="wanita">Wanita</label>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan">
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" name="kelas">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                    <button type="submit" name="rubah">Change</button>
                </div>
                <div class="mb-3">
                    <label for="nohp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" name="nohp">
                    <button type="submit" name="rubah">Change</button>
                </div>
                <div class="mb-3">
                    <label for="matkul" class="form-label">Mata Kuliah</label>
                    <input type="text" class="form-control" name="matkul">
                    <button type="submit" name="rubah">Change</button>
                </div>
                <div class="mb-3">
                    <label for="jam" class="form-label">Jam</label>
                    <input type="text" class="form-control" name="jam">
                    <button type="submit" name="rubah">Change</button>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                    <button type="submit" name="rubah">Change</button>
                </div>
                <button type="submit" class="btn btn-primary" name="tmbl">Submit</button>
                <br><br><br>
            </div>
        </div>

    </form>
</body>

</html>
</body>

</html>