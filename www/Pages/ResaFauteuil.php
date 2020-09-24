<!DOCTYPE html>
<!--       
Page web créé dans le cadre de l'entreprise Acces VR     
Auteur : Castel Marion      
Email : marion-castel@hotmail.fr
Date:  04/07/2019 
-->
<html lang="fr-FR" >

    <head>
        <title> ACCES VR Réservation séance Aix-Press</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="Marion CASTEL alias NYMASIA">
        <meta name="reservationfauteuil" content=" Ici vous pouvez réserver une séance Aix-Press de 10min. Vous serai installer
              dans un fauteuil massant dernière génération et vous visionnerai des vidéos détentes à travers un casque
              de Réalité Virtuelle">
        <link href="../style/style.css" rel="stylesheet" type="text/css"/>
        <link href="../style/acceuil.css" rel="stylesheet" type="text/css"/>
        <link href="../style/presentation-reservation.css" rel="stylesheet" type="text/css"/> 
    </head>
    <body>
        <div id='main'>
            <?php
            include('../php/menu.php');
            ?>

            <div class="corps">
            <div class="blockbasique">

                <img class='imggauche' src="../Images/ateliermassage.jpg" alt="cette photographie représente un homme en train de faire de la VR" />
                <!-- Image basée sur la création originale de yohoprashant sur Pixabay:
                https://pixabay.com/fr/photos/r%C3%A9alit%C3%A9-augment%C3%A9e-vr-3468596/ -->

                <section class='textepresentation'>

                    <p class='titrePresentation'>
                        Séance de relaxation Aix-Press
                    </p>

                    <p class='descriptionEntreprise'>
                        Vous souhaitez vous évader tout en vous faisant masser?  <br>
                        Cette séance de 10min sera votre moment de relaxation parfaite pour la journée <br> <br>
                        Bon il va falloir un vrai paragraphe car moi je suis nulle en syntaxe ^^
                    </p>

                    <p class='soustitreEntreprise'>Ouvert de 14h à 17h nous vous accueillons du lundi au vendredi au complexe d'Ynov d'Aix en Provence <br> 

                    <div class="boutonreservation"> <!-- boutton en savoir plus -->
                        <p id='titresavoir'>
                            <a href="http://acces-multimedia.org/essai-reservation-en-ligne/">Reserver une séance</a>
                        </p>
                    </div>
                    </p>
                </section>
            </div>
</div>


            <footer>
                <?php
                include("../php/footer.php");
                ?>
            </footer>
        </div>
    </body>
</html>
