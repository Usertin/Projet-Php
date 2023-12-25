<?php
    require_once("connexion.php");
    class jeux
    {
        public $Titre;
        public $Prix;
        public $Developpeur;
        public $Editeur;
        public $DatSortie;
        public $Tags;
        
        public function __construct()
        {
            
        }

        // public function insert()
        // {
        //     $cnx = new connexion();
        //     $pdo = $cnx->ConnexionBase();
        //     $query = $pdo->prepare ("insert into jeux values ('', Titre = :Titre, Prix = :Prix, Developpeur = :Developpeur, Editeur = :Editeur, DatSortie = :Datsortie, Tags = :Tags )");
            
        //     $query->bindParam(":Titre",$this->Titre);
        //     $query->bindParam(":Prix",$this->Prix);
        //     $query->bindParam(":Developpeur",$this->Developpeur);
        //     $query->bindParam(":Editeur",$this->Editeur);
        //     $query->bindParam(":Datsortie",$this->DatSortie);
        //     $query->bindParam(":Tags",$this->Tags);

        //     $query->execute() or print_r($query->errorInfo());
        //     echo"ajout a ete effectue";
        // }

        public function insert()
        {
            $cnx = new connexion();
            $pdo = $cnx->ConnexionBase();
            $query = "insert into jeux values ('','$this->Titre', '$this->Prix', '$this->Developpeur', '$this->Editeur','$this->DatSortie','$this->Tags' )";
            $pdo->exec($query) or print_r($pdo->errorInfo());//exec pour exectuer une requete de type insert
            echo"ajout a ete effectue";
        }

        public function modifier($id,$Titre,$Prix,$Developpeur,$Editeur,$Datsortie,$Tags)
        {
            $cnx = new connexion();
            $pdo = $cnx->ConnexionBase();
            $query = $pdo->prepare("update jeux set Titre = :Titre, Prix = :Prix, Developpeur = :Developpeur, Editeur = :Editeur, DatSortie = :Datsortie, Tags = :Tags where id = :id");
            
            $query->bindParam(":id",$id);
            $query->bindParam(":Titre",$Titre);
            $query->bindParam(":Prix",$Prix);
            $query->bindParam(":Developpeur",$Developpeur);
            $query->bindParam(":Editeur",$Editeur);
            $query->bindParam(":Datsortie",$Datsortie);
            $query->bindParam(":Tags",$Tags);

            $query->execute() or print_r($query->errorInfo());
        }

        public function supprimer($id)
        {
            $cnx = new connexion();
            $pdo = $cnx->ConnexionBase();
            $query = "delete from jeux where id = $id";
            $pdo->exec($query) or print_r($pdo->errorInfo());//exec pour executer une requete de type delete
            echo "suppression terminé";
        }

        public function listJeuxs()
        {
            $cnx = new connexion();
            $pdo = $cnx->ConnexionBase();
            $query = "select * from jeux";
            $res = $pdo->query($query) or print_r($pdo->errorInfo());//query pour executer une requete de type select
            return $res;
        }
        public function getNbJeuxs()
        {
            $cnx = new connexion();
            $pdo = $cnx->ConnexionBase();
            $query = "select count(*) from jeux";
            $res = $pdo->query($query) or print_r($pdo->errorInfo());
            return $res;
        }
    }
?>