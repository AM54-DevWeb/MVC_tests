<?php
namespace model;
//Pour pouvoir utiliser une class spécifique dans d'autres fichiers
//Si on a plusieurs class dans ce fichier mais qu'on a besoin d'en emporter une seule on utilisera le "use model\nomDelaClassquiNousInteresse;"



//Dans une class par convention on l'organisera de cette façon : propriété, constructeur, methode
    class Utilisateur
    {

         //-------------------- PROPRIETE -------------------


        //plusieurs type: public, private, protected
        //public : libre d'accès, private : restreint l'accès a toute les class, protected: restreint les class sauf aux class "fille"
        //on appellera les variables dans une class : des propriétés.
        private $nom;
        public $prenom;
        public $age;


         //-------------------- CONSTRUCTEURS -------------------



        //on crée un constructeur pour pouvoir manipuler les données entrées
        public function __construct($nom, $prenom, $age)
        {
            //$this->nom = strtoupper($nom);
            $this->setNom($nom);
            $this->prenom = $prenom;
            $this->age = $age;
        }

         //-------------------- METHODE -------------------


        //Une fonction dans une class est appelée une méthode.
        public function nomComplet(){
            //$this permet de spécifier à la fonction qu'il s'agit de l'instance qui a appelé la fonction
            return $this->nom." ".$this->prenom;
        }


        //-------------------- ACCESSEURS -------------------


        //--- getter de prenom(lecture) ----
        public function getPrenom(){
            return $this->prenom;
        }

        //--- setter de prenom(donner/affecter) ----
        public function setPrenom($prenom){
            return $this->prenom = $prenom;
        }


        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = strtoupper($nom);

                return $this;
        }
    }

?>


