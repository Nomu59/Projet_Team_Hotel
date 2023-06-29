<?php

	class DBManager
    {   private $bdd;
        private $lien;
        private $id;
        private $password;

        //constructeur qui initialise la connxion à la BDD
        public function __construct($lien,$id,$password)
        {
        //    $this->bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8mb4', 'root', 'root');
           $this->bdd = new PDO($lien, $id, $password);
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
        public function insertClient($codclient, $prenomClient, $adressClient,$teleClient,$Nationalité,$NumPasse) : void {       
            $sql = "INSERT INTO client (cod-client, prenom-Client, adress-Client,tele-Client,Nationalité,Num-Passe) VALUES (?,?,?,?,?,?)";
            $stmt= $this->bdd->prepare($sql);
            $stmt->execute([$codclient, $prenomClient, $adressClient,$teleClient,$Nationalité,$NumPasse]);
        
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

    $bdd = new DBManager('mysql:host=localhost;dbname=Hotel;charset=utf8mb4','root',"");
    $bdd->insertClient(1,"dfs","adresse","3307154215","France",1);


?>