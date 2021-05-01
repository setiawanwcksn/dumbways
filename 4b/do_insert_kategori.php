<?php
       include 'koneksi.php';
       $nama = $_POST["name"];            
           $con->query("INSERT INTO `categories`(`id`, `name`) VALUES (null,'".$nama."')");            
    header("location:view.php");
    exit();
?>