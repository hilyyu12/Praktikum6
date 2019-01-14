<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
</head>
<body>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "wrong"){
            echo '<h3>NIS atau Password salah</h3>';
        }
    }
    ?>
    <Form action="login.php" method="post">
        NIS: <input type="text" name="nis"> <br>
        Password: <input type="password" name="password"> <br>
        <input type="submit" value="LOGIN">
        <h6>*if you don't have an account call your admin*</h6>
    </Form>
</body>
</html>