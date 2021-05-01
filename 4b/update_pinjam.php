<?php
    include 'koneksi.php';
    $stok = $_GET['stok'] - 1;
    $id = $_GET['id'];
    $con->query("UPDATE books SET stok='".$stok."' WHERE id = ".$id);
    header("location:view.php");
?>