<?php
    require_once("SessionControl.php");
    $session = new SessionControl();

    if($session->isConnected())
    {
        require("jeux.php");
        $Titre = $_POST["Titre"];
        $Prix = intval($_POST["Prix"]);
        $Developpeur = $_POST["Developpeur"];
        $Editeur = $_POST["Editeur"];
        $DatSortie = $_POST["DatSortie"];
        $Tags = $_POST["Tags"];

        //tableau de confirmation
        echo'
        <html>
            <head>
                <title>
                    Confirmer jeu
                </title>
                <link rel="stylesheet" href="bootstrap.css">
                <script language="javascript" src="Script.js"></script>
            </head>
            <body onload="verifModifConfirm()">
                <form action="FinaliserAjoutJeux.php" method="post">
                    <hr>
                    <center>Confirmer les informations</center>
                    <hr>
                    <div class = "row g-3">
                        <table class="table">
                            <tr>
                                <td>Titre De Jeux</td>
                                <td>Prix De Jeux</td>
                                <td>Developpeur De Jeux</td>
                                <td>Editeur De Jeux</td>
                                <td>Date De Sortie De Jeux</td>
                                <td>Tags De Jeux</td>
                            </tr>
                            <tr></tr>
                            <tr>';
                                require_once("controle.php");
                                $control = new controle();
                                
                                //controler nom
                                if($control->verifAlph($Titre) && $control->verifNul($Titre))
                                    echo"<td><input class='form-control' id='titre' type='text' onblur='verifModifConfirm()' value = $Titre name='Titre'></td>";
                                else
                                    echo '<td><input class="form-control" id="titre" type="text" onblur="verifModifConfirm()" value = "vérifier" name="Titre"></td>';

                                //controler prix
                                if($control->verifNum($Prix) && $control->verifNul($Prix))
                                    echo "<td><input class='form-control' id='prix' type='text' onblur='verifModifConfirm()' value={$Prix} name='Confprix'></td>";
                                else
                                    echo '<td><input class="form-control" id="prix" type="text" onblur="verifModifConfirm()" value = "vérifier" name="Confprix"></td>';
                                
                                //controler matiere principale
                                if($control->verifAlph($Developpeur) && $control->verifNul($Developpeur))   
                                    echo"<td><input class='form-control' id='dev' type='text' onblur='verifModifConfirm()' value={$Developpeur} name = 'Developpeur'></td>";
                                else
                                    echo '<td><input class="form-control" id="dev" type="text" onblur="verifModifConfirm()" value = "vérifier" name="Developpeur"></td>';
                                
                                //controler couleur
                                if($control->verifAlph($Editeur) && $control->verifNul($Editeur))
                                    echo "<td><input class='form-control' id='editeur' type='text' onblur='verifModifConfirm()' value={$Editeur} name='Editeur'></td>";
                                else
                                    echo "<td><input class='form-control' id='editeur' type='text' onblur='verifModifConfirm()' value = 'vérifier' name='Editeur'></td>";
                                
                                //controler date
                                echo"<td><input class='form-control' id='datesortie' type='text' onblur='verifModifConfirm()' value={$DatSortie} name='DatSortie'></td>";
                                //controler Tags
                                if($control->verifAlph($Tags) && $control->verifNul($Tags))
                                    echo "<td><input class='form-control' id='tags' type='text' onblur='verifModifConfirm()' value={$Tags} name='Tags'></td>";
                                else
                                    echo "<td><input class='form-control' id='tags' type='text' onblur='verifModifConfirm()' value = 'vérifier' name='Tags'></td>";
                            echo"
                            </tr>
                        </table>
                        <input type='submit' id='submit' class='btn btn-outline-primary' value='Confirmer'>
                    </div>
                    </form>
            </body>
        </html>
        ";
    }
    else
        header("Location:Login.php");
?>