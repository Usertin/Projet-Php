<?php
    class connexion
    {
        public function ConnexionBase()
        {
            $dbc = new PDO('mysql:host=localhost;dbname=base_magasin','root','');
            return $dbc;
        }
    }
?>