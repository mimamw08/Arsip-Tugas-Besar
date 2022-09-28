<?php 
include "../db_connect.php"; 
$No = $_GET['No']; 
 
$Nama_Mhs = $_POST['Nama_Mhs'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Asal_Daerah = $_POST['Asal_Daerah']; 
$Jurusan = $_POST['Jurusan']; 
 
$query=mysqli_query ($kon, "UPDATE tbmahasiswa SET Nama_Mhs='$Nama_Mhs', Jenis_Kelamin='$Jenis_Kelamin',
Asal_Daerah='$Asal_Daerah', Jurusan='$Jurusan' WHERE No='$No'")or die (mysqli_error()); 
 
if($query) { 
?>
<script language="JavaScript">
document.location = 'index.php'
</script>
<?php 
} 
?>