<html>
    <head>
    </head>
    <body>
        <?php
        include 'koneksi.php';
        $getB = $con->query("SELECT * from categories"); 
        ?>
        <form action="do_insert_buku.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama buku</td>
                    <td> </td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>stok</td>
                    <td> </td>
                    <td><input type="int" name="stok"></td>
                </tr>
                <tr>
                    <td>deskripsi</td>
                    <td> </td>
                    <td><input type="text" name="deskripsi"> </td>               
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td> </td>
                    <td>
                        <select name="kategori" >
                            <?php while($fetchB = $getB->fetch_assoc()){ ?>
                            <option value="<?php echo $fetchB["id"]?>"><?php echo $fetchB["name"]?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td> </td>
                    <td><input type="file" name="foto"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button>Save</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>