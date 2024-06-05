<!DOCTYPE html>
<html lang="EN">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="semantic.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styleConn.css">
        

        <title>Ajouter un nouveau</title>
    </head>

    <body>
        <section>
            <h1> AJOUTER UN MEMBRE UNE CARTE</h1> </br></br>
                
            <form action="CARTECONFIG.php" method="POST">


            <label>Nom</label>
            <input type="text" name="Nom" required>

            <label>Post-nom</label>
            <input type="text" name="Postnom" required>

            <label>Prénom</label>
            <input type="text" name="Prenom" required>

            <label>Lieu de délivrance de la carte</label>
            <input type="text" name="Lieudelcarte" required>

            <label for="date">Date </label>
            <input type="text" id="date" name="Val_carte" placeholder=aaaa/mm/dd required>

            <label>Numéro de permis</label>
            <input type="texte" name="Num_permis" required>

            <label>Adresse</label>
            <input type="text" name="Adresse" placeholder="avenue/quartier/commune/ville ou territoire/province" required>

            <label> Type de membre </label>
            <select name="Q_membre" required>
                <option> Effectif </option>
                <option> Sympathisant </option>
                <option> Autre </option>
            </select>

            <label>Télécharger une photo</label>
            <input type="file" id="photo" name="Photo" accept="image/*" required>



            </br>
            <input type="submit" name="valider" name="Boutton_valider" required>        
                
        </section>

        <?php
            //générer le matricule
            //$Matricule = substr(str_shuffle("1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10 );
        ?>
    </body>
</html>