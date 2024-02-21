<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
        require_once('./head/meta.php');
        require_once('./head/link.php');
    ?>
    <title>SAE 303 - Nos Sources</title>
</head>
<body>
    <?php 
        require_once('./menu/menu.php');
    ?>



<section>
    <div style="text-align: center;">
        <h1 style="font-size: 35px;">Nos Sources</h1>
        <br>
        <br>
        <div style="font-size: 20px;
    font-weight: 600;">
        <p>
            Ratio des bornes de recharge :
        </p>
        <br>
        <span><a href="https://ufe-electricite.fr/watt-the-carte/deploiement-bornes-de-recharge-en-france/" target="_blank">https://ufe-electricite.fr/watt-the-carte/deploiement-bornes-de-recharge-en-france/</a></span>
        <br>
        <br>
        <p>
            Ornikar pour les sites d’implémentation :
        </p>
        <br>
        <span><a href="https://www.ornikar.com/" target="_blank">https://www.ornikar.com/</a></span>
        <br>
        <br>
        <p>
            Electromaps pour la carte :
        </p>
        <br>
        <span><a href="https://www.electromaps.com/fr" target="_blank">https://www.electromaps.com/fr</a></span>
        <br>
        <br>
        <p>
        Relation entre le nombre de bornes et de voitures électriques :
        </p>
        <br>
        <span><a href="https://www.lesnumeriques.com/voiture/le-chiffre-du-jour-57-732-bornes-de-recharge-pour-voitures-electriques-en-france-n180505.html" target="_blank">https://www.lesnumeriques.com/voiture/le-chiffre-du-jour-57-732-bornes-de-recharge-pour-voitures-electriques-en-france-n180505.html</a></span>
        <br>
        <br>
        <p>
        Prévisions de 2024 à 2030 :
        </p>
        <br>
        <span><a href="https://www.bfmtv.com/auto/l-objectif-de-400-000-bornes-electriques-pour-2030-est-ce-suffisant_AD-202305050432.html" target="_blank">https://www.bfmtv.com/auto/l-objectif-de-400-000-bornes-electriques-pour-2030-est-ce-suffisant_AD-202305050432.html</a></span>
        <br>
        <br>
        <p>
        Types de courant pour bornes électriques
        </p>
        <br>
        <span><a href="https://www.avere-france.org/" target="_blank">https://www.avere-france.org/</a></span>
        <br>
        <br>
        </div>
    </div>
</section>





<?php require_once('./footer/footer.php'); ?>
    <button id="scrollToTopButton">&#8593;</button>
    <script>
        // Afficher le bouton de retour en haut lorsqu'on fait défiler la page
window.onscroll = function() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollToTopButton").style.display = "block";
  } else {
    document.getElementById("scrollToTopButton").style.display = "none";
  }
};

// Faites défiler la page vers le haut lorsque le bouton est cliqué
document.getElementById("scrollToTopButton").addEventListener("click", function() {
  document.body.scrollTop = 0; // Pour les navigateurs Chrome, Safari et Opera
  document.documentElement.scrollTop = 0; // Pour les navigateurs Firefox, IE et Edge
});

    </script>
</body>
</html>