<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="Bastien Aubry, Ambre Laffont, Geoffrey Muzard, Xavier Seng">
        <title>Couverture CORNILLET Jean-Michel votre couvreur à Rennes (35).</title>
        <meta name="description" content="Entreprise CORNILLET Jean-Michel spécialisée dans la couverture ardoise, étanchéité, zinguerie, velux à Chartres de Bretagne, Pont Péan, Bruz, Orgères, Saint Erblon, Vern sur seiche, Rennes">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Cornillet-Couverture</title>
    </head>
    <body>

    <section id="header">
        <a href="index.html"><img src="Images/logo.png" alt="logo"></a>
        <p>à <strong>saint-erblon</strong> situé à 10 min de <strong>Rennes</strong></p>
    </section>


     <section id="back">
            <h1>Annonces</h1>

            <?php
            require_once('dbco.php');
            $req = "select * from annonce";

            $resultat = $maConnexion->query($req);
            while ($contenu=$resultat->fetchObject()){
            
            echo "<content class='annonce'>";
            echo       "<article>";
            echo            "<h2>Poste : ".$contenu->poste."</h2>";             
            echo            "<h2>Contract : ".$contenu->contrat."</h2>";
            echo        "</article>";
            echo        "<article class='articleA'>";
            echo            "<h2>Description :      </h2>";
            echo            "<p>".$contenu->description."</p>";
            echo        "</article>";
            echo        "<form action='supprimer.php' method='post'>";
            echo            "<input type='hidden' name='id' value='".$contenu->id."''>";
            echo            "<input type='submit' value='supprimer' class='btnAnnonce'>";
            echo        "</form>";
            echo  "</content>";

               }

         ?>
        <section id="ajout">
            <h1>ajouter une offre</h1>
                <form action="ajouter.php" method="POST">

                    <div class="ligne">
                        <!-- Poste -->
                        <label>Poste
                            <input type="text" name="poste" required>
                        </label>

                        <!-- Contrat -->
                        <label>Contrat
                            <input type="text" name="contrat" required>
                        </label>
                    </div>

                    <!-- Message -->
                    <label>Votre message ou commentaire 
                        <input type="textarea" name="description" required>
                    </label>


                    <input type="submit" name="submit" value="ajouter une offre">
                </form>
            </section>
                            <form id="dc">
                    <input type="submit" name="submit" value="se déconnecter">
                </form>







        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script type="text/javascript" src="js/gallerie.js"></script>

    </body>
</html>
