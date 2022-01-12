<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
      switch ($page) { // Beranda
      case 'data_mahasiswa':
        include 'crud/data_mahasiswa.php';
      break;
      case 'abc';
      break;
      }
}else{
      include "crud/beranda.php";
}