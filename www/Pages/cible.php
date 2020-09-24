<!DOCTYPE html>
<!--       
Page web créé dans le cadre de l'entreprise Acces VR     
Auteur : Castel Marion      
Email : marion-castel@hotmail.fr
Date:  04/07/2019 
-->
<html lang="fr-FR" >
    <head>
        <title>ACCES VR Qui sommes nous?</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="Marion CASTEL alias NYMASIA">
        <meta name="cible" content="Formulaire de contact bien envoyé!">
        <link href="../style/style.css" rel="stylesheet" type="text/css"/>
        <link href="../style/contact.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id='main'>
            <?php
            include('../php/menu.php');
            ?>

    <div class="corps">

            <section id='contactok'>


                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=accesvr', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                /* Fixe les valeurs par défaut des message d'erreur */
                $erreurmessage = $eurreurenvoi = '';

                if (!empty($_POST['sub_envoyer'])) {
                    // récupération des données du formulaire
                    $nom = htmlspecialchars($_POST['i_nom']);
                    $prenom = htmlspecialchars($_POST['i_prenom']);
                    $email = $_POST['i_email'];
                    $tel = $_POST['i_tel'];
                    $profession = $_POST['lst_typeclient'];
                    $message = $_POST['area_precisions'];
                    $valid = true;
                    $envoi = false;
                    //test message
                    if (empty($message)) {
                        $valid = false;
                        $erreurmessage = '<p id="messageCible"> Désolé, vous n\'avez pas mis votre message. </p>';
                        echo $erreurmessage;
                    }

                    /* Formulaire OK, envoie du mail */

                    if ($valid) {
                        $to = "marion.castel.30@gmail.com";
                        $sujet = "Demande d'informations via le site accesvr.org";
                        $texte = "Nom: $nom\n
                        Email : $email\n
                        Message : $message \n \n
                        Profession: $profession\n
                           Information catégories profession: \n 
                           1:Étudiant - 
                           2:Salarié du privé -
                           3:Salarié du public -
                           4:Chef d'entreprise -
                           5:Membre associatif -
                           6:Professionnel(le) dans la VR -
                           99:Autre statut ";
                        $headers = "From: $nom
                        Reply-To: $email";



                        // On vérifie que le mail a bien été envoyé par une fonction
                        if (mail($to, $sujet, $texte, $headers)) {
                            $envoi = true;
                            echo '<p id="messageCible"> Bienvenue ' . $prenom . ' ' . $nom . ' , votre message a bien été envoyé, merci! </p>';


                            // Mise des données dans la bas SQL
                            $requete = $bdd->prepare('INSERT INTO contacts(nom, prenom, tel, e_mail, profession, message) VALUES(?, ?, ?, ?, ?, ?)');
                            $requete->execute(array($_POST['i_nom'], $_POST['i_prenom'], $tel, $email, $profession, $message));
                        } else {
                            $messageenvoi = '<p id="messageCible"> Désolé, une erreur est survenue lors de l\'envoi du message!. </p>';
                            echo $messageenvoi;
                        }
                    }
                }
                ?>
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
