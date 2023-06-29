<?php

class DBManager
{
        private $bdd;
        private $lien;
        private $id;
        private $password;

        //constructeur qui initialise la connxion à la BDD
        public function __construct($lien, $id, $password)
        {
                //$this->bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8mb4', 'root', 'root');
                $this->bdd = new PDO($lien, $id, $password);
        }

        //Methode qui renvoie la liste des employés
        public function selectListeClient(): array
        {
                $stmt = $this->bdd->prepare("SELECT * FROM `client`; ");
                $stmt->execute();
                $listeClient = $stmt->fetchAll();
                return $listeClient;
        }
        public function selectListeChambre(): array
        {
                $stmt = $this->bdd->prepare("SELECT * FROM `chambre`; ");
                $stmt->execute();
                $listeChambre = $stmt->fetchAll();
                return $listeChambre;
        }
        public function selectListeUtilisateur(): array
        {
                $stmt = $this->bdd->prepare("SELECT * FROM `utilisateur`; ");
                $stmt->execute();
                $listeUtilisateur = $stmt->fetchAll();
                return $listeUtilisateur;
        }


        //methode qui ajoute une personne
        public function insertClient($codclient, $prenomClient, $adressClient, $teleClient, $Nationalité, $NumPasse): void
        {
                $sql = "INSERT INTO client (`cod-client`, `prenom-Client`, `adress-Client`, `tele-Client`, `Nationalité`, `Num-Passe`) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $this->bdd->prepare($sql);
                $stmt->execute([$codclient, $prenomClient, $adressClient, $teleClient, $Nationalité, $NumPasse]);
        }

        public function insertUtilisateur($login, $motdepasse): void
        {
                $sql = "INSERT INTO utilisateur (`login`,`mot-de-passe`) VALUES (?, ?)";
                $stmt = $this->bdd->prepare($sql);
                $stmt->execute([$login, $motdepasse]);
        }
        public function insertChambre($numChambre, $etage, $prix, $emplacement, $codeCategorie): void
        {
                $sql = "INSERT INTO chambre (`num-chambre`,`etage`,`prix`,`emplacement`,`code-categorie`) VALUES (?, ?, ?, ?, ?)";
                $stmt = $this->bdd->prepare($sql);
                $stmt->execute([$numChambre, $etage, $prix, $emplacement, $codeCategorie]);
        }

        public function insertCategorie($codeCategorie, $designation): void
        {
                $sql = "INSERT INTO categorie (`code-categorie`,`designation`) VALUES (?,?)";
                $stmt = $this->bdd->prepare($sql);
                $stmt->execute([$codeCategorie, $designation]);
        }
        public function insertReservation($numReservation, $dateReservation, $numchambre, $codeClient, $dateEntree, $dateSortie): void
        {
                $sql = "INSERT INTO reservation (`num-reservation`,`date-reservation`,`num-chambre`,`code-client`,`date-entree`,`date-sortie`) VALUES (?,?,?,?,?,?)";
                $stmt = $this->bdd->prepare($sql);
                $stmt->execute([$numReservation, $dateReservation, $numchambre, $codeClient, $dateEntree, $dateSortie]);
        }


        // //methode qui supprime un employe par son noemp
        // public function supprEmploye($noemp) : void {

        // }

        // //methode qui mets à jour le salaire d'un amployé
        // public function updateSalaireEmploye($noemp, $sal) : void {

        // }


        /**
         * Get the value of password
         */
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of lien
         */
        public function getLien()
        {
                return $this->lien;
        }

        /**
         * Set the value of lien
         *
         * @return  self
         */
        public function setLien($lien)
        {
                $this->lien = $lien;

                return $this;
        }
}

// $bdd = new DBManager('mysql:host=localhost;dbname=Hotel;charset=utf8mb4', 'root', "");
// $bdd->insertClient(1, "Loick", "adresse", "0611225544", "France", 1);
// // $bdd->insertUtilisateur("login", "pass");
// // $bdd->insertChambre(102, 2, 250, "fgd", 5);
// // $bdd->insertCategorie(1, "df");
// // $bdd->insertReservation(1,"2023/12/12",145,1,"2023/12/12","2023/12/12");
// print_r($bdd->selectListeUtilisateur());
