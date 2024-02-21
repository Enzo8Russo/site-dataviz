<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
        require_once('./head/meta.php');
        require_once('./head/link.php');
        require_once('./head/script.php');
    ?>
    <title>SAE 303 - Accueil</title>
</head>
<body>
    <?php 
        require_once('./menu/menu.php');
        require_once('./header/header.php');
    ?>
    <section style="margin-top: 5px;background: #007ACC;    padding-bottom: 30px;" id="nbbornerecharge">
        <div class="header_banniere" style="background: #007ACC !important;">
            <div>
                <?php require_once('./graphique/graphique_4_carte.php'); ?>
                <button id="resetZoomButton" class="btn">Revenir à la carte</button>
            </div>
            <div style="background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 1px 1px 5px rgba(255, 255, 255, 0.3);
">
                <h2 style="font-size: 20px;
    text-align: left;    margin-bottom: 40px;">Nombre de borne de recharge par département en France</h2>

                <div id="legend">

                    <div style="display: flex;align-items: center;">
                        <div style="height: 20px; width: 20px; background-color: rgb(199, 234, 251); margin: 5px;"></div>
                        <span style="margin: 5px;">0 à 100 bornes de recharge</span>
                    </div>

                    <div style="display: flex;align-items: center;">
                        <div style="height: 20px; width: 20px; background-color: rgb(149, 206, 240); margin: 5px;"></div>
                        <span style="margin: 5px;">100 à 200 bornes de recharge</span>
                    </div>

                    <div style="display: flex;align-items: center;">
                        <div style="height: 20px; width: 20px; background-color: rgb(80, 193, 239); margin: 5px;"></div>
                        <span style="margin: 5px;">200 à 300 bornes de recharge</span>
                    </div>

                    <div style="display: flex;align-items: center;">
                        <div style="height: 20px; width: 20px; background-color: rgb(2, 146, 203); margin: 5px;"></div>
                        <span style="margin: 5px;">300 à 500 bornes de recharge</span>
                    </div>

                    <div style="display: flex;align-items: center;">
                        <div style="height: 20px; width: 20px; background-color: rgb(0, 93, 130); margin: 5px;"></div>
                        <span style="margin: 5px;">Plus de 500 bornes de recharge</span>
                    </div>

                </div>
                <div id="enerviz-container" style="display: flex; margin-top: 30px; align-items: center;">
                    <img id="enerviz-image" style="padding: 10px;background: #fff; border-radius: 100%; margin-right: 30px;" src="./img/logo_enerviz_dort.svg" width="200" height="200" alt="">
                    <span id="enerviz-info" style="text-align: left; line-height: 25px;">Pour plus d'informations, cliquez sur Enerviz !</span>
                </div>
                <script>
                    const enervizImage = document.getElementById("enerviz-image");
                    const enervizInfo = document.getElementById("enerviz-info");

                    enervizImage.addEventListener("click", function () {
                        enervizImage.classList.add("active");
                        enervizImage.src = "./img/logo_enerviz_eveil.svg";
                        enervizInfo.innerHTML = "Voici une carte des départements français. <br>Sur celle-ci, les couleurs représentent le nombre de bornes<br> électriques ouvertes au public dans chaque département selon le<br> fournisseur de services de mobilité électrique, electromaps. <br>Bien qu’elles ne soient pas toutes recensées sur le site <br>(100 000 bornes en réalité depuis mai 2023), on observe<br> une inégalité dans la répartition des infrastructures de recharge en<br> France. Les Bouches-du-Rhône, la Gironde et la région parisienne <br>sont plus peuplés et riches, grâce à des villes comme Bordeaux, <br>Marseille et Paris. Cela leur permet d'investir davantage <br>dans les infrastructures de recharge, contrairement à la<br> Marne et la Manche, qui ont moins de moyens.";
                        enervizInfo.style.display = "block";
                    });
                </script>
                <button class="btn-1" onclick="window.location.href = './tableaux-de-donnees.php#table_1'">Tableau de données</button>
            </div>
        </div>
        <div style="margin: auto;
    width: 35%;
    height: 5px;
    background: #fff;
    border-radius: 50px;"></div>
        <script src="./graphique/script/graphique_4_carte.js"></script>
    </section>






    <section style="background: #fff;    padding-bottom: 30px;" id="rptyporecharge">
  <div class="header_banniere">
    <div>
    <h2 style="font-size: 20px;
    text-align: left;    margin-bottom: 40px; color: #005792 !important;">Relation entre le nombre de bornes et de voitures électriques</h2>
     <?php 
        require_once('./graphique/graphique_1_barre_interactif.php'); ?>
    
    </div>
    <div>
    <h2 style="font-size: 20px;
    text-align: left;    margin-bottom: 40px; color: #005792 !important;">Prévisions de 2024 à 2030</h2>
    <?php require_once('./graphique/graphique_2_courbe.php'); ?>
      </div>
</div>
<div id="enerviz-container" style="display: flex; margin-top: 30px; justify-content: center; align-items: center;">
                    <img id="enerviz-images" style="padding: 10px;border:2px solid var(--background-color); border-radius: 100%; margin-right: 30px;" src="./img/logo_enerviz_dort.svg" width="200" height="200" alt="">
                    <span id="enerviz-infos" style="text-align: left; line-height: 25px;">Pour plus d'informations, cliquez sur Enerviz !</span>
                </div>
                <script>
                    const enervizImages = document.getElementById("enerviz-images");
                    const enervizInfos = document.getElementById("enerviz-infos");

                    enervizImages.addEventListener("click", function () {
                        enervizImages.classList.add("active");
                        enervizImages.src = "./img/logo_enerviz_eveil.svg";
                        enervizInfos.innerHTML = "Ici, vous trouverez deux graphiques qui illustrent l'évolution du nombre de bornes de recharge et de véhicules électriques de 2015 à aujourd'hui, ainsi que des prévisions allant de 2024 à 2030. On remarque que le nombre de bornes de recharge accessibles au public a atteint 100 000 en 2023, conformément aux prévisions de fin 2021. Cependant, le nombre de véhicules électriques reste plus élevé, révélant ainsi un manque de bornes disponibles pour chaque véhicule. En effet, la mobilité électrique a connu un énorme essor, le nombre  de bornes augmente donc pour suivre la demande. Jusqu'en 2030, tant le nombre d'infrastructures de recharge que le nombre de véhicules électriques augmentent, bien qu’il reste un écart considérable entre ces deux chiffres.";
                        enervizInfos.style.display = "block";
                    });
                </script>
                <button class="btn-1" style="display: flex;" onclick="window.location.href = './tableaux-de-donnees.php#table_2'">Tableau de donnée</button>
  <div style="margin: auto;
    width: 35%;
    height: 5px;
    background: #005792;
    border-radius: 50px;"></div>
</section>






<section style="margin-top: 5px;background: #007ACC;    padding-bottom: 30px;" id="rtborepaele">
        <div class="header_banniere" style="background: #007ACC !important;">
            <div style="width: 500px; min-width: 200px;">
            <div id="chart" style="width: 100%;
    min-width: 200px;"></div>

<script>
  var categories = ['HDF', 'NORM', 'BRET', 'PDL', 'NAQ', 'OCCT', 'COR', 'PACA', 'ARA', 'CVL', 'BFC', 'GE', 'IDF'];
  var values = [11, 11, 14, 14, 13, 10, 20, 16, 16, 11, 11, 12, 16];

  Highcharts.chart('chart', {
    chart: {
      type: 'column',
    },
    title: {
      text: 'Ratios des bornes de recharges et parcs éléctriques par régions'
    },
    xAxis: {
      categories: categories
    },
    yAxis: {
      title: {
        text: 'Ratio'
      }
    },
    options: {
        responsive: false,
        maintainAspectRatio: false,
    },
    series: [{
      name: 'Ratio',
      data: values,
      color: 'rgba(70, 130, 180, 0.7)'
    }]
  });
</script>
            </div>
            <div>
                <h2 style="font-size: 20px;
    text-align: left;    margin-bottom: 40px;">Ratios des bornes de recharges et parcs éléctriques</h2>
    <div id="enerviz-container" style="display: flex; margin-top: 30px; align-items: center;">
                    <img id="enerviz-imagess" style="padding: 10px;background: #fff; border-radius: 100%; margin-right: 30px;" src="./img/logo_enerviz_dort.svg" width="200" height="200" alt="">
                    <span id="enerviz-infoss" style="text-align: left; line-height: 25px;">Pour plus d'informations, cliquez sur Enerviz !</span>
                </div>
                <script>
                    const enervizImagess = document.getElementById("enerviz-imagess");
                    const enervizInfoss = document.getElementById("enerviz-infoss");

                    enervizImagess.addEventListener("click", function () {
                        enervizImagess.classList.add("active");
                        enervizImagess.src = "./img/logo_enerviz_eveil.svg";
                        enervizInfoss.innerHTML = "Dans ce graphique, nous observons la relation entre le nombre<br> de véhicules et le nombre de bornes de recharge par région.<br> La Corse se distingue avec le ratio le plus élevé, <br>atteignant 20, suivi de près par la région Île-de-France. <br>Cela s'explique par le fait qu'ils disposent d'un grand nombre<br> de véhicules électriques par rapport à d'autres régions,<br> comme la région Grand Est, qui possède suffisamment de<br> bornes pour alimenter son nombre limité de véhicules électriques.";
                        enervizInfoss.style.display = "block";
                    });
                </script>
                <button class="btn-1" onclick="window.location.href = './tableaux-de-donnees.php#table_3'">Tableau de donnée</button>
            </div>
        </div>
        <div style="margin: auto;
    width: 35%;
    height: 5px;
    background: #fff;
    border-radius: 50px;"></div>
    </section>




    <section style="background: #fff;    padding-bottom: 30px;" id="borevoiele">
  <div class="header_banniere">
    <div>
    <h2 style="font-size: 20px;
    text-align: left;    margin-bottom: 40px; color: #005792 !important;">Bornes de recharge par sites d'implémentation</h2>
    <div id="enerviz-container" style="display: flex; margin-top: 30px; justify-content: center; align-items: center;">
                    <img id="enerviz-imagesss" style="padding: 10px;border:2px solid var(--background-color); border-radius: 100%; margin-right: 30px;" src="./img/logo_enerviz_dort.svg" width="200" height="200" alt="">
                    <span id="enerviz-infosss" style="text-align: left; line-height: 25px;">Pour plus d'informations, cliquez sur Enerviz !</span>
                </div>
                <script>
                    const enervizImagesss = document.getElementById("enerviz-imagesss");
                    const enervizInfosss = document.getElementById("enerviz-infosss");

                    enervizImagesss.addEventListener("click", function () {
                        enervizImagesss.classList.add("active");
                        enervizImagesss.src = "./img/logo_enerviz_eveil.svg";
                        enervizInfosss.innerHTML = "Ceci est un graphique en forme de diagramme circulaire représentant<br> la répartition en pourcentage des bornes de recharge installées<br> dans différents emplacements. On constate que la<br> majorité de ces bornes se trouvent notamment dans les<br> commerces, les parkings et le long des voies de circulation,<br> ce qui simplifie la recherche de points de recharge pour<br> les conducteurs de véhicules électriques. Il est également<br> courant d’installer une borne directement chez soi, en effet,<br> la plupart des bornes ouvertes au public sont payantes.<br> Cependant la charge à domicile est beaucoup plus lente.";
                        enervizInfosss.style.display = "block";
                    });
                </script>
                <button class="btn-1" style="display: flex;" onclick="window.location.href = './tableaux-de-donnees.php#table_4'">Tableau de donnée</button>
    </div>
    <div>
    <?php require_once('./graphique/graphique_5_camanbere_interactif.php'); ?>
      </div>
</div>
  <div style="margin: auto;
    width: 35%;
    height: 5px;
    background: #005792;
    border-radius: 50px;"></div>
</section>






<section style="margin-top: 5px;background: #007ACC;    padding-bottom: 30px;" id="typepriseboelec">
        <div class="header_banniere" style="background: #007ACC !important;">
            <div>
            <?php 
        require_once('./graphique/graphique_3_camanbere.php');
         ?>
            </div>
            <div style="background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 1px 1px 5px rgba(255, 255, 255, 0.3);
">
                <h2 style="font-size: 20px;
    text-align: left;    margin-bottom: 40px;">Types de courant pour bornes électriques</h2>
        <div id="chart-legend" style="margin-left: 20px;"></div>
<script src="./graphique/script/graphique_3_camanbere.js"></script>
<div id="enerviz-container" style="display: flex; margin-top: 30px; align-items: center;">
                    <img id="enerviz-imagessss" style="padding: 10px;background: #fff; border-radius: 100%; margin-right: 30px;" src="./img/logo_enerviz_dort.svg" width="200" height="200" alt="">
                    <span id="enerviz-infossss" style="text-align: left; line-height: 25px;">Pour plus d'informations, cliquez sur Enerviz !</span>
                </div>
                <script>
                    const enervizImagessss = document.getElementById("enerviz-imagessss");
                    const enervizInfossss = document.getElementById("enerviz-infossss");

                    enervizImagessss.addEventListener("click", function () {
                        enervizImagessss.classList.add("active");
                        enervizImagessss.src = "./img/logo_enerviz_eveil.svg";
                        enervizInfossss.innerHTML = "Ce diagramme circulaire représente la répartition en pourcentage <br> du type de courant utilisé pour recharger les véhicules électriques.<br> Deux types de courant sont pris en compte :<br> la recharge en courant alternatif (AC) et la recharge<br> en courant continu (DC). La recharge en DC est nettement moins<br> courante que la recharge en AC, car elle est principalement utilisée<br> pour des recharges rapides permettant de poursuivre un trajet.<br> Pour la plupart des autres cas, il est recommandé d'opter<br> pour la recharge en AC. Les conducteurs de véhicules électriques<br> doivent en tenir compte lorsqu'ils rechargent leur véhicule, ce<br> qui peut rendre les bornes de recharge beaucoup moins accessibles.";
                        enervizInfossss.style.display = "block";
                    });
                </script>
                <button class="btn-1" onclick="window.location.href = './tableaux-de-donnees.php#table_5'">Tableau de donnée</button>
            </div>
        </div>
        <div style="margin: auto;
    width: 35%;
    height: 5px;
    background: #fff;
    border-radius: 50px;"></div>
    </section>















    <?php require_once('./footer/footer.php'); ?>
    <button id="scrollToTopButton">&#8593;</button>
    <script>
window.onscroll = function() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollToTopButton").style.display = "block";
  } else {
    document.getElementById("scrollToTopButton").style.display = "none";
  }
};

document.getElementById("scrollToTopButton").addEventListener("click", function() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});

    </script>
</body>
</html>