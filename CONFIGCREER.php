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

            

            $Matricule = $_POST["Matricule"];
            //générer le matricule
            $Matricule = substr(str_shuffle("1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6 );

            $nom = $_POST["nom"];
            $postnom = $_POST["postnom"];
            $prenom = $_POST["prenom"];
            $sexe = $_POST["sexe"];
            $date = $_POST["datenaissance"];
            $nationalite = $_POST["nationalite"];
            $Etatcivil = $_POST["Etatcivil"];
            $Q_membre = $_POST["Q_membre"];
            $Adresse = $_POST["Adresse"];
            $telephone = $_POST["telephone"];
            $Numpermis = $_POST["Numpermis"];
            $profession = $_POST["profession"];
            //$Num_fiche = $_POST["Num_fiche"];
            $Adr1 = $_POST["Adr1"];

            //$datec = $_POST['Val_carte'];
            $datec = date('y-m-d');

            $erreur = "";

            try{
                $connexion = new PDO("mysql:host=$serveur;dbname=acco_database", $login, $pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                

                $insertion = "INSERT INTO membre(Matricule,nom,postnom,prenom,sexe,datenaissance,nationalite,Etatcivil, Q_membre,Adresse,telephone,Numpermis,profession)
                VALUES('$Matricule', '$nom', '$postnom', '$prenom', '$sexe', '$date', '$nationalite', '$Etatcivil','$Q_membre', '$Adresse', '$telephone', '$Numpermis', '$profession')";

                $insertion1 = "INSERT INTO ficheenregistrement(nom,postnom,prenom,Sexe,datenaissance,nationalite,Etatcivil,Q_membre,Adresse,Numpermis,profession)
                VALUES('$nom', '$postnom', '$prenom', '$sexe', '$date', '$nationalite', '$Etatcivil', '$Q_membre', '$Adresse', '$Numpermis', '$profession')";
                
                $insertion2 = "INSERT INTO cartedemembre(Nom,Postnom,Prenom,Lieudelcarte,Val_carte,Num_permis,Adresse,Q_membre)
                VALUES('$nom', '$postnom', '$prenom', '$Adr1', '$datec', '$Numpermis', '$Adresse','$Q_membre')";
                
                
                $connexion ->exec($insertion);
                $connexion ->exec($insertion1);
                $connexion ->exec($insertion2);
                
                header("Location:PAGE.php");
                
                
            }

            catch (PDOException $e) {
                echo 'Echec de la connexion : ' .$e->getMessage();
            }
        ?>
    </body>
</html>