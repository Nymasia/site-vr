<!DOCTYPE html>
<!--       
Page web créé dans le cadre de l'entreprise Acces VR     
Auteur : Castel Marion      
Email : marion-castel@hotmail.fr
Date:  04/07/2019 
-->
<html lang="fr-FR" >
    <head>
        <title>ACCES VR Contacts</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="Marion CASTEL alias NYMASIA">
        <meta name="contacts" content="Cette page vous permettra de nous contacter pour n'importe quelle information">

        <link href="../style/style.css" rel="stylesheet" type="text/css"/>
        <link href="../style/contact.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id='main'>

            <!-- Menu -->
            <?php
            include('../php/menu.php');
            ?>

   <div class="corps">

            <section id="contact">
                <div class='infos'>

                    <!-- adresse tel et mail -->

                    <h2 class='titreadresse'> ACCES VR</h2>
                    <p class='adressebis'> Maison Vie Associative -
                        Le Ligourès, place Romée de Villeneuve -
                        13090 Aix en Provence  <br>
                        06 20 15 73 26 <br>
                        09 80 47 72 01 <br>
                        acces.rv@gmail.com <br></p>
                    <br>

                    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.996242502119!2d5.431864315493537!3d43.52327107912606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c98d75d05addd5%3A0xa4c92742d7794707!2sPays+d&#39;Aix+Associations!5e0!3m2!1sfr!2sfr!4v1562757092739!5m2!1sfr!2sfr"

                            frameborder="0" 
                            style="border:2" 
                            allowfullscreen></iframe>

                </div>
                <!-- formulaire de contact -->
                <form name="form_contact" action="cible.php" method="POST">
                    <fieldset id="coordo">
                        <legend>Pour nous contacter: </legend>
                        <div><label for="i_nom">Votre nom :</label> <input type="text" name="i_nom" id="i_nom"  pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\s\-]+$" required><div class="input-validation"></div></div>
                        <div><label for="i_prenom">Votre prénom :</label> <input type="text" name="i_prenom" id="i_prenom"  pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\s\-]+$" required><div class="input-validation"></div></div>
                        <div><label for="i_tel">Votre n° de téléphone (facultatif) :</label> <input type="tel" name="i_tel" id="i_tel"  pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" ><div class="input-validation"></div></div>
                        <div><label for="i_email">Votre e-mail :</label> <input type="email" name="i_email" id="i_email"  pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><div class="input-validation"></div></div>
                        <div>
                            <label for="lst_typeclient">Vous êtes : </label>
                            <select name="lst_typeclient" id="lst_typeclient">
                                <option value="1">Étudiant</option>
                                <option value="2">Salarié du privé</option>
                                <option value="3">Salarié du public</option>
                                <option value="4">Chef d'entreprise</option>
                                <option value="5">Membre associatif</option>
                                <option value="6">Professionnel(le) dans la VR</option>
                                <option value="99">Autre statut</option>
                            </select>
                        </div>
                        <div>
                            <label>Date de naissance : </label>
                            <input type="number" name="num_jour" id="num_jour" min="1" max="31"> / <input type="number" name="num_mois" id="num_mois" min="1" max="12"> / <input type="number" name="num_annee" id="num_annee" min="1900" max="2019">

                        </div>
                        <div><label for="area_precisions">Votre message :</label><br><textarea name="area_precisions" id="area_precisions" cols="35" rows="10"></textarea></div>
                    </fieldset>

                    <div id="controles"><input type="submit" id="btn_envoyer" name="sub_envoyer" value="Envoyer votre message"> <input type="reset" 
                                                                                                                                    v>
                </form>

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