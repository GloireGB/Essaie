<!DOCTYPE html>
<html>
    <head>
        <title>CONNEXION A MYSQL</title>
        <meta charset="utf-8">
    </head>

    <body>
        
        <?php
            $serveur = "localhost";
            $login = "root";
            $pass = "";

            
            $nom = $_POST["Nom"];
            $postnom = $_POST["Postnom"];
            $prenom = $_POST["Prenom"];
            $Lieu = $_POST["Lieudelcarte"];
            $date = $_POST["Val_carte"];
            $Numpermis = $_POST["Num_permis"];
            $Adresse = $_POST["Adresse"];
            $Q_membre = $_POST["Q_membre"];
            $Photo = $_POST["Photo"];


            try{
                $connexion = new PDO("mysql:host=$serveur;dbname=acco_database", $login, $pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                

                $insertion = "INSERT INTO cartedemembre(Nom,Postnom,Prenom,Lieudelcarte,Val_carte,Num_permis,Adresse,Q_membre,Photo)
                VALUES('$nom', '$postnom', '$prenom', '$Lieu', '$date', '$Num_permis', '$Adresse','$Q_membre', '$Photo')";
                
                $connexion ->exec($insertion);
                
                header("Location:CARTE.php");
                
                
            }

            catch (PDOException $e) {
                echo 'Echec de la connexion : ' .$e->getMessage();
            }
        ?>
    </body>
</html>