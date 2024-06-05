<?php
    if(isset($_POST['Bouttonvalider'])){

        //page qui va traiter les données

        if(isset($_POST["email"]) && isset($_POST["mdp"])) { //vérification des infos

            $email = $_POST["email"];
            $mdp = $_POST["mdp"];
            $erreur = "";

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
                header("Location:PAGE.php"); //la connexion passe s'il y a pad de doublon
            }
            else{
                $erreur = "Mot de passe incorrect, Recommencez !!".'<br/>';
            }
        }  
  
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de connexion</title>
        <!--link rel="stylesheet" href="style5.css"-->
        <link rel="stylesheet" href="styleConn.css">
    </head>

    <body>
        <section>
        <div class="form-container">

            <h1> ADMINISTRATEUR </h1>

            
             <form action="" method="POST">

                <label>Adresse Mail</label>
                <input type="texte" name="email" required placeholder="votre email" class="box">
                <label>Mot de passe</label>
                <input type="password" name="mdp" required placeholder="votre password" class="box">

            <?php
                if(isset($erreur)){ // on affiche l'erreur si elle existe
                    echo "<p class = 'Error' >" .$erreur. "</p>". "</br>" ;
                }
            ?>
                <input type="submit" value="valider" name="Bouttonvalider">
            
            </form>
    
            </br>
        </div>

        </section>

        <?php
            
        ?>
    </body>
</html>