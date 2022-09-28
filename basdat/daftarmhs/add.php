<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Masukkan Mahasiswa Baru</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <form action="insert_mahasiswa.php" method="POST">
        <font face="Tahoma" color="green" size="1"><b><br>Tambahkan Mahasiswa</b></font>
        <table align="left">
            <tr>
                <td>
                    <font face="Tahoma" color="black" size="2">Nama_Mhs</font>
                </td>
                <td>:</td>
                <td><input type="text" name="Nama_Mhs" size="30"></td>
            </tr>
            <tr>
                <td>
                    <font face="Tahoma" color="black" size="2">Jenis_Kelamin</font>
                </td>
                <td>:</td>
                <td><input type="text" name="Jenis_Kelamin" size="30"></td>
            </tr>
            <tr>
                <td>
                    <font face="Tahoma" color="black" size="2">Asal_Daerah</font>
                </td>
                <td>:</td>
                <td><input type="text" name="Asal_Daerah" size="30"></td>
            </tr>

            <tr>
                <td>
                    <font face="Tahoma" color="black" size="2">Jurusan</font>
                </td>
                <td>:</td>
                <td><input type="text" name="Jurusan" size="30"></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Add">
                    <font face="Tahoma" color="green" size="2">
                        <a href="index.php" style="text-decoration:none">back
                    </font></a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>