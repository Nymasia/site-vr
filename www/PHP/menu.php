
<!--
Script "Menu et En-tête"
    Par Nymasia
    
Dernière modification : 19 juillet 2017
-->

<header> 

    <div class="menu"><nav> <!-- Menu de navigation -->
            <ul class="navigation"> <!-- Liens de navigation -->

                <li class="Accueil"><a  href="../pages/index.php" title="aller à l'acceuil" >Accueil</a></li>
                <li class="presentation"><a  href="../pages/Présentation.php" title="aller à la présentation" >Présentation</a></li>
                <li class="services"><a href="../pages/Services.php" title="aller aux différents services de l'entreprise">Services</a></li>
                <li class="evenements"><a href="../pages/Evènements.php" title="aller aux différents évènements">Evènements</a></li>
                <li class="contacts"><a href="../pages/Contacts.php" title="aller aux contacts">Contacts</a></li>
                <li class="partenaires"><a href="../pages/Partenaires.php" title="aller aux différents partanires">Partenaires</a></li>
            </ul>  
        </nav>
    </div>
</header>
<!-- Logo -->
<img id="logo" src="../Images/logosimplifie.png" alt="Logo acces vs"/>

<!-- Barre recherche -->
<div class="recherche_p">

    <form action="/search" id="searchthis" method="get">
        <input id="search-btn" type="image" src="../images/recherche.png" onclick="submit" />
        <input id="search" name="q" type="search" placeholder="Rechercher" aria-label="Search through site content" required minlength="2" maxlength="16" />

    </form>

</div>
