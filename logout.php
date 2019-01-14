<?php
include "connect.php";
session_unset();
    if($NIS == "" || $Password == "")
    {
        header("location:form-login.php");
    }

session_destroy();
    header("location:form-login.php");
?>
