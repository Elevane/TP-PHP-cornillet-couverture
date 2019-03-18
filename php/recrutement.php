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


        <section id="presentation">
        <article>
            <img src="Images/photo1.jpg" alt="photo ardoise">
            <img src="Images/photo2.jpg" alt="photo Zinc">
            <img src="Images/photo3.jpg" alt="photo taule">
        </article>

        <article id="articlePresentation">
            <h2> * Tous profils recherchés * </h2>
            <h3>Cornillet-Couverture recherche de nombreuses personnes pour Maintenir de développement de son activité. Dans l'optique de satisfaire au maximum le client, nous formons nous même nos collaborateurs, quel que soit leur parcours.</h3>
        </article>
        
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
            echo            "<h2>Description :  	</h2>";
            echo            "<p>".$contenu->description."</p>";
            echo        "</article>";
            echo  "</content>";

               }

         ?>

                <section id="form_recru">
            
            <h1>Postuler</h1>

            <form>
            
                <div class="ligne">
                    <!-- Nom -->
                        <label>Votre nom
                            <input type="text"name="nom" required>
                        </label>
                
                    <!-- Prénom -->
                        <label>Votre prénom
                            <input type="text" name="prenom" required>
                        </label>
                </div>
                
                <div class="ligne">
                    <!-- Email -->
                        <label>Votre e-mail
                            <input type="email" name="email" required>
                        </label>
                
                    <!-- Numéro de téléphone -->
                        <label>Votre numéro de téléphone
                            <input type="text" name="telephone" required>
                        </label>
                </div>
                        
                    <!-- Titre -->
                        <label>Offre souhaitée

                            <select name="offre" required>
                                <?php 
                                    require_once('dbco.php');
                                    $req = "select * from annonce";

                                    $resultat = $maConnexion->query($req);
                                    while ($contenu=$resultat->fetchObject()){
                                        echo "<option value='empty' required disabled selected>Offre souhaitée</option>";
                                        echo "<option value='".$contenu->poste."'>".$contenu->poste."</option>";

            
                                       }
                                ?>
                            </select>
                        </label>
                
                <!-- CV -->
                <label>CV :
                    <input type="file" name="cv"/>
                </label>
                
                <!-- LM -->
                <label>Lettre de motivation :
                    <input type="file" name="lm"/>
                </label>
                
                <!-- Message -->
                    <label>Votre message ou commentaire 
                        <textarea name="message" required></textarea>
                    </label>

                    <div id="checkdonn">
                        <input required type="checkbox" checked />
                        <p>Les données personnelles communiquées sont nécessaires aux fins de vous contacter.<br>Elles sont destinées à  Cornillet Jean-Michel.</p>
                    </div>
                        
                <button type="submit" action="mail.php">Envoyer ></button>
            </form>
        
        </section>





		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
		<script type="text/javascript" src="js/gallerie.js"></script>

	</body>
</html>
