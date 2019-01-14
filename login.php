<?php
session_start();
include "connect.php";

$NIS = $_POST['nis'];
$Password = $_POST['password'];

if ($NIS == "" || $Password == "")
{
  header("location: form-login.php?error=wrong");
}
else
{
  $query = "SELECT * FROM tb_user WHERE nis = '$NIS' AND password = '$Password'";
  $result = mysqli_query($connect, $query);

  $num = mysqli_num_rows($result);

  if($num == 1)
  {
    header("location: index.php");
    $_SESSION['tb_user'] = $nis;
  }
  else
  {
    header("location: form-login.php?error=wrong");
  }
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "" && $pass == "") {
        echo "Login Berhasil";
      }
    else {
       echo "Login Gagal";
     }

     
    ?>

  </body>
</html>
