<?php
    require_once("SessionControl.php");
    $session = new SessionControl();

    if(!$session->isConnected())
    {
        
        echo'
            <!DOCTYPE html>
                <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                        <title>Login Page</title>
                    </head>
                    <body>
                        <form action="Authentifier.php" method="post">
                            <div class="d-block w-100">
                                <div class="card-header bg-primary text-white">
                                    <h4 class="mb-0">Login</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="username">Nom Utilisateur:</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Donner votre Nom Dutilisateur">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Mot De Passe:</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Donner Votre Mot De Passe">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                            </div>
                        </form>
                    </body>
                </html>
        ';
        
    }
    else
        header("Location:ListJeux.php");
?>