<?php
    require_once("SessionControl.php");
    $session = new SessionControl();

    if($session->isConnected())
    {
        require_once("jeux.php");
        $id = $_POST["id"];
        $Titre = $_POST["Titre"];
        $Prix = $_POST["Confprix"];
        $Developpeur = $_POST["Developpeur"];
        $Editeur = $_POST["Editeur"];
        $DatSortie = $_POST["DatSortie"];
        $Tags = $_POST["Tags"];
        
        $jeux = new jeux();
        $jeux->modifier($id,$Titre,$Prix,$Developpeur,$Editeur,$DatSortie,$Tags);

        header("Location:ListJeux.php");
    }
    else
        header("Location:Login.php");
?>