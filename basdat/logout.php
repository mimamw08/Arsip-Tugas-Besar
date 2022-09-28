<?php
session_start();
session_unset();
session_destroy();
setcookie('username', '', 0, '/');
setcookie('nama', '', 0, '/');
header('location:login.php');
if($database->login($username,$nama))
    {
        echo 
        "<script>
            alert('berhasil logout');
            window.location.href = 'login.php';
        </script>";

    }else {
        "<script>
            alert('gagal logout');
            window.location.href = 'login.php';
        </script>";
    }
?>