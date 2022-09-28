<?php 
include "../db_connect.php"; 
$No = $_GET['No']; 
 
$query = "DELETE FROM tbmahasiswa WHERE No = $No"; 
mysqli_query($kon, $query); 
 
?>
<script language="JavaScript">
document.location = 'index.php'
</script>
<?php 
?>