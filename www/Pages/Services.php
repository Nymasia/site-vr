<!DOCTYPE html>
<!--       
Page web créé dans le cadre de l'entreprise Acces VR     
Auteur : Castel Marion      
Email : marion-castel@hotmail.fr
Date:  04/07/2019 
-->
<html lang="fr-FR" >
    <head>
        <title>ACCES VR Les services que nous proposons </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="Marion CASTEL alias NYMASIA">
        <meta name="Services" content="Découvrez tous nos services que ACCES VR propose!">
        <link href="../style/style.css" rel="stylesheet" type="text/css"/>
        <link href="../style/services.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div id='main'>

            <?php
            include('../php/menu.php');
            ?>

<div class="corps">
            <section id='para'>

                <h1>
                    Trois différents services s'offrent à vous!
                </h1>

                <h2>  

                    Des séances d'animation en Réalité Virtuelle pour que votre entreprise puisse s'évader. <br><br>

                    Des reportages 180° ou 360° pour une présentation de votre entrprise différente et innovente. <br><br>

                    Des séances de relaxation Aix-Press grâce aux nouvelles technologies.

                </h2>

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
</div>

            <footer>
                <?php
                include("../php/footer.php");
                ?>
            </footer>
        </div>
    </body>
</html>
