<?php

	class DBManager
    {   private $bdd;
        private $hote;
        private $nom;
        private $prenom;

        //constructeur qui initialise la connxion à la BDD
        public function __construct($lien,$nom,$prenom)
        {
        //    $this->bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8mb4', 'root', '');
           $this->bdd = new PDO($lien, $nom, $prenom);
        }

        //Methode qui renvoie la liste des employés
	    public function selectListeEmploye() : array
        {
            $stmt= $this->bdd->prepare("SELECT * FROM `test`; ");
            $stmt->execute();
            $listEmploi = $stmt->fetchAll();
            return $listEmploi;
        }

   
        //methode qui ajoute une personne
        public function insertEmploye($name, $surname, $sex) : vonom {       
            $sql = "INSERT INTO test (name, surname, sex) VALUES (?,?,?)";
            $stmt= $this->bdd->prepare($sql);
            $stmt->execute([$name, $surname, $sex]);
        
        }

        // //methode qui supprime un employe par son noemp
        // public function supprEmploye($noemp) : vonom {

        // }

        // //methode qui mets à jour le salaire d'un amployé
        // public function updateSalaireEmploye($noemp, $sal) : vonom {

        // }


        /**
         * Get the value of prenom
         */ 
        public function getprenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setprenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getnom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setnom($nom)
        {
                $this->nom = $nom;

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

    $p = new DBManager('mysql:host=localhost;dbname=test;charset=utf8mb4','nom',"prenom");

?>