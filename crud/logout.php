<?php 
session_start(); 
include '../config/koneksi.php'; 
$sess_admin = $_SESSION['id_admin']; 
if (isset($sess_admin)) 
{ 
session_destroy(); 
echo '<script>alert("Anda Telah Logout !!!"); window.location.href="login.php"</script>'; 
} 
?>
