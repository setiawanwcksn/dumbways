<?php
    session_start();
    if(isset($_POST["nama"])){
       include 'koneksi.php';
        $id = $_POST["id"];
       $nama = $_POST["nama"];
       $nim = $_POST["nim"];
       $bidang = $_POST["bidang"];
       $foto = $_FILES["foto"];
       
       $message = "";
       
       if($nama==""){
           $message = "Nama harus diisi";
       }
       else if($nim==""){
           $message = "NIM harus diisi";
       }
       else if($bidang==""){
           $message = "Nama harus diisi";
       }
       else{
           if(isset($foto["tmp_name"]) && $foto["tmp_name"]!=""){
                $filePath = "upload/".basename($foto["name"]);
               move_uploaded_file($foto["tmp_name"],$filePath);
               $con->query("UPDATE atmosfer SET foto='".$filePath."' WHERE id = ".$id);
            }
           $con->query("UPDATE atmosfer SET nama='".$nama."', nim='".$nim."',bidang='".$bidang."' WHERE id=".$id);
           $message = "Sukses diubah";
       } 
        $_SESSION["message"] = $message;
    }
    header("location:view.php");
    exit();
?>