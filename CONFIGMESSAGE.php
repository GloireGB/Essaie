<!DOCTYPE html>
<html>
    <head>
        <title>Message envoyé</title>
        <meta charset="utf-8">
    </head>

    <body>
        
        <?php
            $serveur = "localhost";
            $login = "root";
            $pass = "";

            

            $Nom = $_POST["Nom"];
            $Contacts= $_POST["Contacts"];
            $Messages = $_POST["Messages"];

/*
            try{
                $connexion = new PDO("mysql:host=$serveur;dbname=acco_database", $login, $pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                

                $insertion = "INSERT INTO messages(Nom,Contacts,Messages)
                VALUES('$Nom', '$Contacts', '$Messages')";
    

                $connexion ->exec($insertion);
                header("Location:ACCUEIL.php");
                
                
            }

            catch (PDOException $e) {
                echo 'Echec de la connexion : ' .$e->getMessage();
            }
*/
            try{
                $conn = new
                PDO("mysql:host=$serveur;dbname=acco_database", $login, $pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $Nom = $_POST["Nom"];
                $Contacts= $_POST["Contacts"];
                $Messages = $_POST["Messages"];

                $stmt = $conn->prepare ("INSERT INTO messages(Nom,Contacts,Messages)
                VALUES(:Nom, :Contacts, :Messages)");
                $stmt->bindParam(':Nom', $Nom);
                $stmt->bindParam(':Contacts', $Contacts);
                $stmt->bindParam(':Messages', $Messages);

                //Exécuter la requête
                $stmt->execute();
                header("Location:ACCUEIL.php");
            }
            catch (PDOException $e) {
                echo 'Echec de la connexion : ' .$e->getMessage();
            }
        ?>
    </body>
</html>