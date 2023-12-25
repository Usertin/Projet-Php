<?php
    require_once("SessionControl.php");
    $session = new SessionControl();

    if($session->isConnected())
    {
        $html = <<<HTML
        <!DOCTYPE html>
        <html>
            <head>
                <title>Formulaire jouet</title>
                <link rel="stylesheet" href="bootstrap.css">
            </head>
            <body>
                <form action="ConfirmerAjout.php" method = "post">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="id_Titre">Titre Jeux</label>
                            <input type="text" class="form-control" id="id_Titre" placeholder="Titre De Jeux" name="Titre" aria-label="Tjeux">
                        </div>
                        <div class="col-md-3">
                            <label for="id_Prix">Prix De Jeux</label>
                            <input type="text" class="form-control" id="id_Prix" placeholder="Prix de jeux" name = "Prix" aria-label="Pjeux">
                        </div>
                        <div class = "col-md-3">
                            <label for="id_Developpeur">Developpeur De Jeux</label>
                            <input type="text" class = "form-control" id="id_Developpeur" placeholder = "Developpeur De Jeux" name = "Developpeur" aria-label="Djeux">
                        </div>
                        <div class = "col-md-3">
                            <label for="id_Editeur">Editeur De Jeux</label>
                            <input type="text" class = "form-control" id="id_Editeur" placeholder = "Editeur De Jeux" name = "Editeur" aria-label="Ejeux">
                        </div>
                        <div class = "col-md-12">
                            <label for="id_date">Date Sortie De Jeux</label>
                            <input type="date" class = "form-control" id="id_date" name = "DatSortie" aria-label="DSjeux">
                        </div>
                        <div class = "col-md-12">
                            <label for="id_Tags">Tags De Jeux</label>
                            <input type="Text" class = "form-control" id="id_Tags" placeholder = "Tags De Jeux" name = "Tags" aria-label="Tagsjeux">
                        </div>
                        <input type="submit" class="btn btn-outline-primary" value="Ajouter">
                        <button type="reset" class="btn btn-outline-danger"><a style="text-decoration:none;color:black;" href="ListJeux.php">Annuler</a></button>
                    </div>
                </form>
            </body>
        </html>
        HTML;

        echo $html;
    }
    else
        header("Location:Login.php");
?>