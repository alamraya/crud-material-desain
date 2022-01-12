<?php 
include "../config/koneksi.php"; 
$username = mysqli_real_escape_string($con, $_POST['username']); 
$password = mysqli_real_escape_string($con, $_POST['password']); 

$check    = mysqli_query($con, "SELECT * FROM admin WHERE username = '$username' AND password = md5('$password')") or die(mysqli_error()); 

// var_dump($username, $password);
// die();

if(mysqli_num_rows($check) >= 1){ 
    while($row = mysqli_fetch_array($check)){ 
    session_start(); 
    $_SESSION['id_admin'] = $row['id_admin'];
    $_SESSION['avatar'] = $row['avatar']; 
    $_SESSION['nama'] = $row['nama']; 
    $_SESSION['level'] = $row['level']; 
?> 

<script>alert("Selamat Datang <?= $row['nama']; ?> Kamu Telah Login Ke Halaman Admin !!!"); 

window.location.href="../index.php"</script> 

<?php 

} 
}else{ 

echo '<script>alert("Masukan Username dan Password dengan Benar !!!"); 
window.location.href="login.php"</script>'; 
} 
?>
