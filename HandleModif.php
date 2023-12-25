<?php
    require_once("SessionControl.php");
    $session = new SessionControl();

    if($session->isConnected())
    {
        include_once("jeux.php");

        $id = $_GET["id"];
        $Titre = $_GET["Titre"];
        $Prix = $_GET["Prix"];
        $Developpeur = $_GET["Developpeur"];
        $Editeur = $_GET["Editeur"];
        $DatSortie = $_GET["DatSortie"];
        $Tags = $_GET["Tags"]; 

        echo '
        <html>
            <head>
                <title>
                    Modifier jeu
                </title>
                <link rel="stylesheet" href="bootstrap.css">
                <script language="javascript" src="Script.js"></script>
            </head>
            <body onload="verifModifConfirm()">
                <form action="FinaliserModif.php" method="POST">
                    <hr>
                    <center>Modifier les informations</center>
                    <hr>
                    <div class = "row g-3">
                        <table class="table">
                            <tr>
                                <td>Titre De Jeu</td>
                                <td>Prix De Jeu</td>
                                <td>Developpeur De Jeu</td>
                                <td>Editeur De Jeu</td>
                                <td>Date De Sorite De Jeu</td>
                                <td>Tags De Jeu</td>
                            </tr>
                            <tr></tr>
                            <tr>
                            ';
                                echo "<input class='form-control' type='text' value=$id name='id' hidden>";
                                
                                require_once("controle.php");
                                $control = new controle();
                                
                                //controler Titre
                                if($control->verifAlph($Titre) && $control->verifNul($Titre))
                                    echo"<td><input class='form-control' id='titre' type='text' onblur='verifModifConfirm()'  value = $Titre name='Titre'></td>";
                                else
                                    echo '<td><input class="form-control" id="titre" type="text" onblur="verifModifConfirm()"  value = "vérifier" name="Titre"></td>';

                                //controler prix
                                if($control->verifNum($Prix) && $control->verifNul($Prix))
                                    echo "<td><input class='form-control' id='prix' type='text' onblur='verifModifConfirm()'  value={$Prix} name='Confprix'></td>";
                                else
                                    echo '<td><input class="form-control" id="prix" type="text" onblur="verifModifConfirm()"  value = "vérifier" name="Confprix"></td>';
                                
                                //controler developpeur
                                if($control->verifAlph($Developpeur) && $control->verifNul($Developpeur))   
                                    echo"<td><input class='form-control' id='dev' type='text' onblur='verifModifConfirm()'  value={$Developpeur} name = 'Developpeur'></td>";
                                else
                                    echo '<td><input class="form-control" id="dev" type="text" onblur="verifModifConfirm()"  value = "vérifier" name="Developpeur"></td>';
                                
                                //controler editeur
                                if($control->verifAlph($Editeur) && $control->verifNul($Editeur))
                                    echo "<td><input class='form-control' id='editeur' type='text' onblur='verifModifConfirm()'  value={$Editeur} name='Editeur'></td>";
                                else
                                    echo "<td><input class='form-control' id='editeur' type='text' onblur='verifModifConfirm()'  value = 'vérifier' name='Editeur'></td>";
                                
                                //controler date de sorite
                                echo"<td><input class='form-control' id='datesortie' type='date' onblur='verifModifConfirm()'  value={$DatSortie} name='DatSortie'></td>";
                                //controler Tags
                                if($control->verifAlph($Tags) && $control->verifNul($Tags))
                                    echo "<td><input class='form-control' id='tags' type='text' onblur='verifModifConfirm()'  value={$Tags} name='Tags'></td>";
                                else
                                    echo "<td><input class='form-control' type='tags' 'text' onblur='verifModifConfirm()'  value = 'vérifier' name='Tags'></td>";
                            echo'
                            </tr>
                        </table>
                        <input type="submit" id="submit" class="btn btn-outline-primary" value="Modifier">
                    </div>
                    </form>
            </body>
        </html>';
    }
    else
        header("Location:Login.php");
?>