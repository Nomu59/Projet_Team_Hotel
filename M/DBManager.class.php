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
                $sql = "INSERT INTO client (`cod-client`, `prenom-Client`, `adress-Client`, `tele_Client`, `Nationalite`, `Num-Passe`) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $this->bdd->prepare($sql);
                $stmt->execute([$codclient, $prenomClient, $adressClient, $teleClient, $Nationalité, $NumPasse]);
        }

        public function insertUtilisateur($login, $motdepasse, $codClient): void
        {
                $sql = "INSERT INTO utilisateur (`login`,`mot_de_passe`,`cod_client`) VALUES (?, ?, ?)";
                $stmt = $this->bdd->prepare($sql);
                $stmt->execute([$login, $motdepasse, $codClient]);
        }
        public function insertChambre($numChambre, $etage, $prix, $emplacement, $codeCategorie): void
        {
                $sql = "INSERT INTO chambre (`num_chamb`,`etage`,`Prix`,`emplacement`,`code_categorie`) VALUES (?, ?, ?, ?, ?)";
                $stmt = $this->bdd->prepare($sql);
                $stmt->execute([$numChambre, $etage, $prix, $emplacement, $codeCategorie]);
        }

        public function insertCategorie($codeCategorie, $designation, $numChamb): void
        {
                $sql = "INSERT INTO categorie (`Code_categorie`,`Designation`,`num_chamb`) VALUES (?,?,?)";
                $stmt = $this->bdd->prepare($sql);
                $stmt->execute([$codeCategorie, $designation, $numChamb]);
        }
        public function insertReservation($numReservation, $dateReservation, $numchambre, $codeClient, $dateEntree, $dateSortie, $codClient): void
        {
                $sql = "INSERT INTO reservation (`Num_reservation`,`Date_reservation`,`num_chambre`,`code_client`,`date_entree`,`date_sortie`,`cod_client`) VALUES (?,?,?,?,?,?,?)";
                $stmt = $this->bdd->prepare($sql);
                $stmt->execute([$numReservation, $dateReservation, $numchambre, $codeClient, $dateEntree, $dateSortie, $codClient]);
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

// $bdd->insertClient(1, "Loick", "adresse", "0611225544", "France", 1);
// $bdd->insertUtilisateur("login", "pass", 2);
// $bdd->insertChambre(102, 2, 250, "fgd", 5);
// $bdd->insertCategorie(1, "df", 102);
// $bdd->insertReservation(1, "2023/12/12", 145, 1, "2023/12/12", "2023/12/12", 1);
// print_r($bdd->selectListeUtilisateur());

//crée un lien vers la base de donnée
$bdd = new DBManager('mysql:host=localhost;dbname=teamhotel;charset=utf8mb4', 'root', "");ù

//crée utilisateur admin
$bdd->insertUtilisateur("admin", "admin", 1);

//crée les categories de chambre
$bdd->insertCategorie(1, "Luxe", 100);
$bdd->insertCategorie(2, "SuperLuxe", 110);
$bdd->insertCategorie(3, "UltraLuxe", 120);


//crée les chambres avec 3 categories
for ($i = 0; $i < 30; $i++) {
        if ($i >= 20) {
                $bdd->insertChambre(100 + $i, 3, 579, "est", 3);
        } else if ($i >= 10 && $i < 20) {
                $bdd->insertChambre(100 + $i, 2, 1276, "sud", 2);
        } else if ($i < 10) {
                $bdd->insertChambre(100 + $i, 1, 3412, "nord", 1);
        }
}

$bdd->insertClient(4, "moi", "dfsd", "0102020202", "France", 2);
