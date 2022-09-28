<?php 
include "../db_connect.php";
$No = $_GET['No'];  
 
$query=mysqli_query($kon, "SELECT * FROM tbmahasiswa WHERE No='$No'");
while ($row=mysqli_fetch_array($query)){ 
 
$Nama_Mhs = $row['Nama_Mhs'];
$Jenis_Kelamin = $row['Jenis_Kelamin'];
$Asal_Daerah = $row['Asal_Daerah']; 
$Jurusan = $row['Jurusan']; 
 
echo "<html>"; 
echo "<body>"; 
echo "<font face='tahoma' color='green' size=4><b>Perbaiki Daftar</b></font>"; 
echo "<table align='left'>"; 
echo "<form method=\"post\" action=\"update.php?No=$No\" enctype='multipart/form-data'>"; 
echo "<br>"; 
echo "<tr><td><font face='Tahoma' color='black' size=2>Nama_Mhs </font></td><td>:</td><td><input type='text' name='Nama_Mhs' value='$Nama_Mhs' size='30'>&nbsp;
</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size=2>Jenis_Kelamin </font></td><td>:</td><td><input type='text' name='Jenis_Kelamin' value='$Jenis_Kelamin' size='30'>&nbsp;
</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size=2>Asal_Daerah </font></td><td>:</td><td><input type='text' name='Asal_Daerah' value='$Asal_Daerah' size='30'>&nbsp;
</td></tr>"; 
 
echo "<tr><td><font face='Tahoma' color='black' size=2>Jurusan</font></td><td>:</td><td><input type='text' name='Jurusan' value='$Jurusan' size='30'>&nbsp;
</td></tr>"; 
 
echo "<tr><td></td><td></td><td><font size='2'><input type='submit' name='submit' value='Update'/></font></td></tr>"; 
echo "</table></form></body></html>"; 
} 
?>