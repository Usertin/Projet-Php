<?php
    require_once("SessionControl.php");
    $session = new SessionControl();

    if($session->isConnected())
    {
        require_once("jeux.php");
        $id = $_GET["id"];
        $jeux = new jeux();
        $jeux->supprimer($id);
        header("Location:ListJeux.php");   
    }
    else
        header("Location:Login.php");
?>