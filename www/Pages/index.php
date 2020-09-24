<!DOCTYPE html>
<!--       
Page web créé dans le cadre de l'entreprise Acces VR     
Auteur : Castel Marion      
Email : marion-castel@hotmail.fr
Date:  04/07/2019 
-->
<html lang="fr-FR" >

    <head>
        <title>ACCES VR Venez découvrir le monde de la Réalité Virtuelle</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="Marion CASTEL alias NYMASIA">
        <meta name="acceuil" content="Découvrez le monde de la réalité virtuelle
              grâce à notre site internet ACCES VR. Vous découvrirez tout ce qu'il y a savoir
              sur la question. De plus nous proposons des séances de découvertes et des
              séances de relaxation à travers la Réalité Virtuelle. Bonne visite!">
        <link href="../style/acceuil.css" rel="stylesheet" type="text/css"/>
        <link href="../style/style.css" rel="stylesheet" type="text/css"/>
        <link href="../style/evenements.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div id='main'>

            <!-- Menu -->
            <?php
            include ("../php/menu.php");
            ?>

<div class="corps">


            <section class=" presentation "> <!-- Présentation de l'activité -->
                <div class="titre">
                    <p id='grandtitre'> ACCES VR  </p> <p id='soustitre'> Venez découvrir l'univers de la Réalité Virtuelle! </p>
                    <div class="boutonsavoir"> <!-- boutton en savoir plus -->
                        <p id='titresavoir'>
                            <a href="DescriptionVR.php">En savoir plus</a>
                        </p>
                    </div>
                </div>
            </section>

            




            <!-- Section des boutons des différentes activités -->
            <div class='differentesactivites'>
                <!-- boutton présentant les ateliers VR -->
                <div id='prestations'>
                    <div id='boutonatelier'> 
                        <p>
                            <a href="ResaVR.php" ><img id='imgPrestations' src="../Images/homme casque vr.png" alt="cette image en noir et blanc représente 
                                                       un homme en train d'essayer le casque
                                                       de réalité virtuelle" />
                                <!-- Image basée sur la création originale de PublicDomainPNG sur Pixabay:
                                https://cdn.pixabay.com/photo/2018/04/10/19/52/vr-3308573_960_720.png -->
                                <br> <b>Nos animations VR  </b> </a>
                        </p>
                    </div> <!-- fin div bouton atelier -->
                </div> <!-- fin div prestations -->

                <!-- boutton représentant la définition de la réalité virtuelle -->
                <div id='prestations'>
                    <div id='boutonvr'> 
                        <p>
                            <a href="DescriptionVR.php"><img id='imgPrestations' src="../Images/casque vr.png" alt="Cette photo représente 
                                                             un casque de réalité virtuelle 
                                                             en noir et blanc" />
                                <!-- Image basée sur la création originale de Pixaline sur Pixabay: 
                                https://cdn.pixabay.com/photo/2017/02/10/14/10/virtual-2055227_960_720.png -->
                                <br> <b>Les reportages en 360° </b> </a>
                        </p>
                    </div> <!-- fin bouton vr -->
                </div> <!-- fin div prestations -->

                <!-- Boutton représentant nos ateliers massant et VR -->
                <div id='prestations'>
                    <div id='boutonateliersvr'> 
                        <p>
                            <a href="ResaFauteuil.php"><img id='imgPrestations' src="../Images/siège massant.png" alt="cette image est une représentation 
                                                            d'un siège massant" />
                                <!-- Image basée sur la création de Alliance Digitale pour la plaquette du fauteuil -->   
                                <br> <b>Relaxation Aix-Press</b> </a>
                        </p>
                    </div> <!-- fin bouton ateliers massant et vr -->
                </div> <!-- fin div prestations -->
            </div>

            <!-- Section des reportages -->
            <div class="reportages">
                <p id='titreEvenement'> Nos derniers évènements <p/>

               <section class='article'>
                <img class='imggauche' src="../Images/casquefemmevr.jpg" alt="image introduction vr"/>
                <div class='deroulement'>
                    <h1 id='titreevenement'>
                        VOUS ETES UNE ENTREPRISE ?  <br>
                        <br> Rejoignez-nous le Mardi 23 Juillet 2019 de 14h à 17h00 au Campus Ynov !
                    </h1>
                    <p class='description'> Vous souhaitez proposer une activité innovante à vos salariés ? <br> Chez Accès Multimédia nous avons la solution.
                        <br><span class='couleur'>Le 23 juillet </span>venez découvrir nos animations autour de la réalité virtuelle lors d’une après-midi. <br>Plusieurs Thèmes seront abordés en fonction de votre envie du moment : relaxation, gaming, Arts visuels… <br>
                        A partir de 12h, venez passer votre pause déjeuner en notre compagnie. <br>Buffet, casques VR ainsi que notre fauteuil de relaxation Aix-Press seront là pour vous divertir ! 
                        <br>Pour plus d’informations cliquez ici : <a class='lien' target="_blank" href="https://drive.google.com/file/d/1jJwvE7OOdz64xN0hRKZTEor6Ub4SuxeL/view">
                            cliquez ici </a> </p>
                </div>
            </section>

            </div>

            <section id="recherchepartenaire">
                Notre projet vous interesse? <br> <br>Si vous souhaitez créer un partenariat avec nous, n'hésitez pas à nous contacter. 

            </section>
</div>
            <footer>
                <?php
                include("../php/footer.php");
                ?>

            </footer>
        </div>
    </body>
</html>
