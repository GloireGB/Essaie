<!DOCTYPE html>
<html lang="FR">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="semantic.css">
        <link rel="stylesheet" href="styleConn.css">
        

        <title>Ajouter un nouveau</title>
    </head>

    <body>
        <section>
                
            <form action="CONFIGCREER.php" method="POST">
            <h1> AJOUTER UN MEMBRE</h1>

            <label>Nom</label>
            <input type="text" name="nom" required>

            <label>Post-nom</label>
            <input type="text" name="postnom" required>

            <label>Prénom</label>
            <input type="text" name="prenom" required>

            <div class="control">
            <label> Sexe </label> </br>
            <input type="radio" name="sexe" value="Masculin" checked/>
            Masculin
            <input type="radio" name="sexe" value="Féminin"/>
            Féminin
            </div>

            <label for="date">Date de naissance </label>
            <input type="date" min="1960-06-30" max="today" id="date" name="datenaissance" placeholder=aaaa/mm/dd required>

            <label>Nationalité</label>
            <input type="text" name="nationalite" required>

            <label> Etat civil </label>
            <select name="Etatcivil" required>
                <option> Célibataire </option>
                <option> Marié_e </option>
                <option> Divorcé_e </option>
                <option> Veuf_ve </option>
            </select>

            <label> Type de membre </label>
            <select name="Q_membre" required>
                <option> Effectif </option>
                <option> Ordinnaire </option>
                <option> Honneur </option>
                <option> Sympathisant </option>
            </select>

            <label>Adresse</label>
            <input type="text" name="Adresse" placeholder="avenue/quartier/commune/ville" required>

            <label>Province</label>
            <input type="text" name="Adr1" placeholder="ou District" required>

            <label>Téléphone</label>
            <input type="text" name="telephone" placeholder="+243 ___ ___ ___" required>

            <label>Numéro de permis</label>
            <input type="texte" name="Numpermis" placeholder=" si non 00000" required>

            <label>Profession</label>
            <input type="text" name="profession" required>

            </br>
            <input type="submit" name="valider" name="Boutton_valider" required>        
                
        </section>

        <?php
            //générer le matricule
            $Matricule = substr(str_shuffle("1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10 );
        ?>
    </body>
</html>