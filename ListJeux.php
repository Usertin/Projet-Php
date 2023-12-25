<?php
    require_once("SessionControl.php");
    $connected = new SessionControl();
    
        echo'<html>
            <head>
                <title>Liste jeuxs</title>
                <link rel = "stylesheet" href="bootstrap.css">
            </head>';
        if($connected->isConnected())
            {
                require_once("jeux.php");
                $jeux = new jeux();
                $list = $jeux->listJeuxs();
                echo'<body>
                    <form action="" method="POST">
                        <table class = "table">
                            <tr bg-primary text-white">
                                <td>Id</td>
                                <td>Titre De Jeux</td>
                                <td>Prix De Jeux</td>
                                <td>Developpeur De Jeux</td>
                                <td>Editeur</td>
                                <td>DatSortie</td>
                                <td>Tags</td>
                                <td>Modifier</td>
                                <td>Supprimer</td>
                            </tr>';
                            foreach($list as $elt)
                            {
                                echo'<tr>';
                                echo"
                                <td>{$elt[0]}</td>";
                                echo "<td>{$elt[1]}</td>";
                                echo "<td>{$elt[2]}</td>
                                <td>{$elt[3]}</td>
                                <td>{$elt[4]}</td>
                                <td>{$elt[5]}</td>
                                <td>{$elt[6]}</td>
                                <td><a href='HandleModif.php?id=$elt[0]&Titre=$elt[1]&Prix=$elt[2]&Developpeur=$elt[3]&Editeur=$elt[4]&DatSortie=$elt[5]&Tags=$elt[6]' class = 'link-primary'>Modifier</a></td>
                                <td><a href='HandleSupp.php?id=$elt[0]' class = 'link-danger'>Supprimer</a></td>";
                                echo'</tr>';
                            }
                        echo'</table>';
                
        

                    echo '
                    <button class ="btn btn-outline-success" style="width:100%;"> <a style = "text-decoration:none;color:black;" href="Ajoutjeux.php">Ajouter jeu</a></button>
                    <br></br>
                    <button class ="btn btn-outline-danger" style="width:100%;"> <a style = "text-decoration:none;color:black;" href="Logout.php">Déconnecter</a></button>';
            }
            else
            {
                header("Location:Login.php");
            }
            echo'</form>';
            echo '</body>
        </html>';
?>