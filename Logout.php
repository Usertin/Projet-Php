<?php
    require_once("SessionControl.php");
    $session = new SessionControl();

    $session->Deconnecter();
    header("Location:ListJeux.php");
?>