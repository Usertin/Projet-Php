<?php
    session_start();
    $_SESSION ["username"] = $_POST["username"];
    $_SESSION ["pwd"] = $_POST["password"];
    

    if(($_SESSION ["username"] == "admin") && ($_SESSION ["pwd"] = $_POST["password"]))
        header("Location:ListJeux.php");
    else
        header("Location:Login.php");
?>