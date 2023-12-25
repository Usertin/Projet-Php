<?php
    require_once("SessionControl.php");
    $session = new SessionControl();

    if($session->isConnected())
    {
        require("jeux.php");
        $Titre = $_POST["Titre"];
        echo $Titre;
        $Prix = $_POST["Confprix"];
        $Developpeur = $_POST["Developpeur"];
        $Editeur = $_POST["Editeur"];
        $DatSortie = $_POST["DatSortie"];
        $Tags = $_POST["Tags"];
        echo $Prix;

        $jeux = new jeux();
        $jeux->Titre = $Titre;
        $jeux->Prix = $Prix;
        $jeux->Developpeur = $Developpeur;
        $jeux->Editeur = $Editeur;
        $jeux->DatSortie = $DatSortie;
        $jeux->Tags = $Tags;

        $jeux->insert();
        header("Location:ListJeux.php");
    }
    else
        header("Location:Login.php");
?>