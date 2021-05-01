<?php
       include 'koneksi.php';
       $nama = $_POST["name"];
       $stok = $_POST["stok"];
       $deskripsi = $_POST["deskripsi"];
       $kategori = $_POST["kategori"];
       $foto = $_FILES["foto"];              
           $filePath = "upload/".basename($foto["name"]);
           move_uploaded_file($foto["tmp_name"], $filePath);        
           $con->query("INSERT INTO `books`(`id`, `name`, `stok`, `image`, `deskripsi`, `category_id`) 
           VALUES (null,'".$nama."','".$stok."','".$foto["name"]."','".$deskripsi."','".$kategori."')");           
           $message = "input sukses!";       
       $_SESSION["message"] = $message;    
    header("location:view.php");
    exit();
?>