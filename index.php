<?php

//on invoque le fichier
require_once("model/Utilisateur.php");

//On importe la class Utilisateur uniquement
use model\Utilisateur;

$connexion = new PDO('mysql:host=localhost;dbname=php_28mai', 'root','');
//permets d'afficher les erreurs
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//permets de parametrer nos requete, ici on renvoi le résultat sous forme d'objet
//$connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$connexion->query("SELECT * FROM utilisateur");

$resultat = $connexion->query("SELECT * FROM utilisateur");

//fetchAll a utilisé pour plusieurs résultat; fetch un seul résultat
$listeUtilisateur = $resultat->fetchAll();
$listeUtilisateurObjet = [];

foreach ($listeUtilisateurBdd as $utilisateurBdd)
 {
    // $utilisateur = new Utilisateur(
    //     $utilisateurBdd['nom'],
    //     $utilisateurBdd['prenom'],
    //     $utilisateurBdd['age']
    // );

    $utilisateur = new Utilisateur();
    $utilisateur->setNom($utilisateurBdd['nom']);
    $utilisateur->setPrenom($utilisateurBdd['prenom']);
    $utilisateur->setAge($utilisateurBdd['age']);

    $listeUtilisateurObjet[] = $utilisateur;
 }

 

//Pour afficher notre requête en entier
//var_dump($listeUtilisateur);

//on affiche un résultat en particulier
//echo $listeUtilisateur[0]['nom'];

//on affiche sous forme de tableau qu'on va parcourir
foreach($listeUtilisateur as $utilisateur){
    echo $utilisateur['nom']. " ". $utilisateur['prenom'];
    echo "<br>";

}




/*
//On crée une nouvelle instance de notre class crée au préalable
    $franck = new Utilisateur("Toto", "Titi", 25 );

    //on lui insigne ses valeurs si on n'utilise pas de constructeur
    //$franck->nom = "Toto";
   // $franck->prenom = "Titi";

    //on affiche en utilisant les données
   // echo $franck->nom. " " . $franck->prenom;
    echo "<br>";
    //on affiche en utilisant la fonction établi dans la class cela permets d'afficher les propriété privée
    echo $franck->nomComplet();

//on peut utiliser un setter pour créer nos objets également
    $franck->setNom("toto");

    echo "<br>";
    echo $franck->nomComplet();
*/


?>