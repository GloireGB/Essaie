<?php
    //page qui va traiter les données

    if(isset($_POST["email"]) && isset($_POST["mdp"])) { //vérification des infos

        $email = $_POST["email"];
        $mdp = $_POST["mdp"];

        //connexion database
        $nom_serveur = "localhost";
        $utilisateur = "root";
        $mot_de_passe = "";
        $nom_base_donnee = "acco_database";

        $con = mysqli_connect($nom_serveur , $utilisateur , $mot_de_passe , $nom_base_donnee);

        //requête pour vérifier
        $req = mysqli_query($con , "SELECT * FROM administrateur WHERE email = '$email' AND mdp = '$mdp' ");
        $num_ligne = mysqli_num_rows($req); //compter le nombre ayant des rapports avec la reqête
        
        if($num_ligne > 0) {
            header("Location:CONNEXION.php"); //la connexion passe s'il y a pad de doublon
        }
        else{
            echo "Mot de passe incorrect!!";
        }
    }  
  
?>