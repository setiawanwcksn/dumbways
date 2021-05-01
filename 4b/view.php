<html>
    <head>
    <div class = "col" style="padding:20px">
        <a href="insert_buku.php"><button class="btn btn-success">tambah buku</button></a><br>
        <a href="insert_kategori.php"><button class="btn btn-success">tambah kategori</button></a><br>
        </div>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
    <div style="padding:20px">
            <?php
            include 'koneksi.php';
        $getB = $con->query("SELECT * from categories");        
        while($fetchB = $getB->fetch_assoc()){ ?>
           <br><strong><?=$fetchB["name"]?></strong>
           <div class="row">
           <?php $getA = $con->query("SELECT books.name AS nama_buku, books.id AS id_buku, books.*, categories.* FROM `books` inner JOIN categories ON categories.id = books.category_id order by categories.name"); ?>
             <?php while($fetchA = $getA->fetch_assoc()){ 
                if($fetchA["id"]==$fetchB["id"]){
                ?>
               <div class="col-sm-4">
                        <img style="width:300px;height:300px" src="upload/<?=$fetchA["image"]?>">
                        <br><strong><?=$fetchA["nama_buku"]?></strong> stock : <?=$fetchA["stok"]?><br />
                        <?php if($fetchA["stok"]!= 0) { ?>
                        <a href="update_pinjam.php?id=<?=$fetchA["id_buku"]?>&stok=<?=$fetchA["stok"]?>"><button>Pinjam</button></a>
                        <?php } ?>
                        <a href="update_kembalikan.php?id=<?=$fetchA["id_buku"]?>&stok=<?=$fetchA["stok"]?>"><button>Kembalikan</button></a>
                        </div>
            <?php
                }
            } ?>
            </div>
        <?php
            } ?>      
    </div>
    </body>
</html>