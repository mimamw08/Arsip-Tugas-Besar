<!DOCTYPE html>
<html lang="en">
<?php
include_once "../db_connect.php";
$db= new database;
$sql= 'SELECT Nama, NIM, Jenis_Kelamin, Jurusan, Kelas, matkul, jam FROM daftarmhs';
$query= mysqli_query($db->koneksi,$sql);
?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href=" ../home.php">Home</a>
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
                &nbsp; <a href="../logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
            </div>
        </div>
    </nav>
    <center>
        <h1>Daftar Mahasiswa</h1>
    </center>
    <table class="table table-striped" border="1" align="center" cellspacing="1" cellpadding="4">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Kelas</th>
                <th>Mata Kuliah</th>
                <th>Jam</th>
                <th>Kehadiran</th>
                <th>Submit</th>
            </tr>
        </thead>
        <tbody>
            <?php
while ($row = mysqli_fetch_array($query))
{?>
            <tr>
                <td><?php echo $row['Nama'];?></td>
                <td><?php echo $row['NIM'];?></td>
                <td><?php echo $row['Jenis_Kelamin'];?></td>
                <td><?php echo $row['Jurusan'];?></td>
                <td><?php echo $row['Kelas'];?></td>
                <td><?php echo $row['matkul'];?></td>
                <td><?php echo $row['jam'];?></td>
                <td>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me" name="remember"> Hadir
                        </label>
                    </div>
                </td>
                <td>
                    <button type="submit" class="btn btn-light" name="submit">Submit</button>
                </td>
            </tr>
            <?php
}
?>
        </tbody>
    </table>
</body>

</html>