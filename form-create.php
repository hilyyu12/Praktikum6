<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" /></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" size=40 /></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" /></td>
        </tr>
    </table>
    </form>
    <h4><a href="index.php">Back</a></h4><br>
</body>
</html>

<?php
    require_once "connect.php";

    //jika field nis dan nama diisi lalu disubmit
    if(isset($_POST['nis']) && isset($_POST['nama'])){
        $NIS = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $Password = $_POST['password'];

        //tambakan data baru ke tabel
        $sql = "INSERT INTO tb_user VALUES ('" .$NIS. "','" .$nama. "', '" .$alamat. "','" .$Password. "')";
        $result = mysqli_query($connect, $sql);
        if($result){
            echo 'Data Berhasil Ditambahkan';
        }
        else {
            echo 'Gagal Menambahkan Data <br>';
            echo mysqli_error($connect);
        }
    }
?>