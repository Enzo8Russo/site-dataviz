<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
        require_once('./head/meta.php');
        require_once('./head/link.php');
    ?>
    <title>SAE 303 - Tableaux De Données</title>
    <style>
        h1 {
            text-align: center;
            color: var(--background-color);
        }
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid var(--background-color);
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: var(--background-color);
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: #e5e5e5;
        }
    </style>
</head>
<body>
    <?php 
        require_once('./menu/menu.php');
    ?>



<h1>Tableau des bornes de recharge par département</h1>
    <table border="1" id="table_1">
        <tr>
            <th>Département</th>
            <th>Nombre de bornes</th>
        </tr>
        <tr>
            <td>Ain</td>
            <td>179</td>
        </tr>
        <tr>
            <td>Aisne</td>
            <td>140</td>
        </tr>
        <tr>
            <td>Allier</td>
            <td>76</td>
        </tr>
        <tr>
            <td>Alpes-de-Haute-Provence</td>
            <td>64</td>
        </tr>
        <tr>
            <td>Hautes-Alpes</td>
            <td>116</td>
        </tr>
        <tr>
            <td>Alpes-Maritimes</td>
            <td>190</td>
        </tr>
        <tr>
            <td>Ardèche</td>
            <td>183</td>
        </tr>
        <tr>
            <td>Ardennes</td>
            <td>149</td>
        </tr>
        <tr>
            <td>Ariège</td>
            <td>79</td>
        </tr>
        <tr>
            <td>Aube</td>
            <td>360</td>
        </tr>
        <tr>
            <td>Aude</td>
            <td>450</td>
        </tr>
        <tr>
            <td>Aveyron</td>
            <td>78</td>
        </tr>
        <tr>
            <td>Bouches-du-Rhône</td>
            <td>944</td>
        </tr>
        <tr>
            <td>Calvados</td>
            <td>235</td>
        </tr>
        <tr>
            <td>Cantal</td>
            <td>51</td>
        </tr>
        <tr>
            <td>Charente</td>
            <td>221</td>
        </tr>
        <tr>
            <td>Charente-Maritime</td>
            <td>7</td>
        </tr>
        <tr>
            <td>Cher</td>
            <td>47</td>
        </tr>
        <tr>
            <td>Corrèze</td>
            <td>12</td>
        </tr>
        <tr>
            <td>Corse-du-Sud</td>
            <td>64</td>
        </tr>
        <tr>
            <td>Haute-Corse</td>
            <td>54</td>
        </tr>
        <tr>
            <td>Côte-d'Or</td>
            <td>20</td>
        </tr>
        <tr>
            <td>Côte-d'Armor</td>
            <td>151</td>
        </tr>
        <tr>
            <td>Creuse</td>
            <td>3</td>
        </tr>
        <tr>
            <td>Dordogne</td>
            <td>358</td>
        </tr>
        <tr>
            <td>Doubs</td>
            <td>135</td>
        </tr>
        <tr>
            <td>Drôme</td>
            <td>100</td>
        </tr>
        <tr>
            <td>Eure</td>
            <td>426</td>
        </tr>
        <tr>
            <td>Eure-et-Loir</td>
            <td>339</td>
        </tr>
        <tr>
            <td>Finistère</td>
            <td>426</td>
        </tr>
        <tr>
            <td>Gard</td>
            <td>398</td>
        </tr>
        <tr>
            <td>Haute-Garonne</td>
            <td>786</td>
        </tr>
        <tr>
            <td>Gers</td>
            <td>131</td>
        </tr>
        <tr>
            <td>Gironde</td>
            <td>773</td>
        </tr>
        <tr>
            <td>Hérault</td>
            <td>100</td>
        </tr>
        <tr>
            <td>Ille-et-Vilaine</td>
            <td>103</td>
        </tr>
        <tr>
            <td>Indre</td>
            <td>450</td>
        </tr>
        <tr>
            <td>Indre-et-Loire</td>
            <td>450</td>
        </tr>
        <tr>
            <td>Isère</td>
            <td>453</td>
        </tr>
        <tr>
            <td>Jura</td>
            <td>87</td>
        </tr>
        <tr>
            <td>Landes</td>
            <td>360</td>
        </tr>
        <tr>
            <td>Loir-et-Cher</td>
            <td>342</td>
        </tr>
        <tr>
            <td>Loire</td>
            <td>214</td>
        </tr>
        <tr>
            <td>Haute-Loire</td>
            <td>150</td>
        </tr>
        <tr>
            <td>Loire-Atlantique</td>
            <td>207</td>
        </tr>
        <tr>
            <td>Loiret</td>
            <td>270</td>
        </tr>
        <tr>
            <td>Lot</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Lot-et-Garonne</td>
            <td>47</td>
        </tr>
        <tr>
            <td>Lozère</td>
            <td>38</td>
        </tr>
        <tr>
            <td>Maine-et-Loire</td>
            <td>214</td>
        </tr>
        <tr>
            <td>Manche</td>
            <td>148</td>
        </tr>
        <tr>
            <td>Marne</td>
            <td>57</td>
        </tr>
        <tr>
            <td>Haute-Marne</td>
            <td>40</td>
        </tr>
        <tr>
            <td>Mayenne</td>
            <td>51</td>
        </tr>
        <tr>
            <td>Meurthe-et-Moselle</td>
            <td>256</td>
        </tr>
        <tr>
            <td>Meuse</td>
            <td>176</td>
        </tr>
        <tr>
            <td>Morbihan</td>
            <td>358</td>
        </tr>
        <tr>
            <td>Moselle</td>
            <td>319</td>
        </tr>
        <tr>
            <td>Nièvre</td>
            <td>88</td>
        </tr>
        <tr>
            <td>Nord</td>
            <td>1109</td>
        </tr>
        <tr>
            <td>Oise</td>
            <td>419</td>
        </tr>
        <tr>
            <td>Orne</td>
            <td>157</td>
        </tr>
        <tr>
            <td>Pas-de-Calais</td>
            <td>636</td>
        </tr>
        <tr>
            <td>Puy-de-Dôme</td>
            <td>272</td>
        </tr>
        <tr>
            <td>Pyrénées-Atlantiques</td>
            <td>468</td>
        </tr>
        <tr>
            <td>Hautes-Pyrénées</td>
            <td>127</td>
        </tr>
        <tr>
            <td>Pyrénées-Orientales</td>
            <td>242</td>
        </tr>
        <tr>
            <td>Bas-Rhin</td>
            <td>481</td>
        </tr>
        <tr>
            <td>Haut-Rhin</td>
            <td>217</td>
        </tr>
        <tr>
            <td>Rhône</td>
            <td>600</td>
        </tr>
        <tr>
            <td>Haute-Saône</td>
            <td>67</td>
        </tr>
        <tr>
            <td>Saône-et-Loire</td>
            <td>159</td>
        </tr>
        <tr>
            <td>Sarthe</td>
            <td>168</td>
        </tr>
        <tr>
            <td>Savoie</td>
            <td>291</td>
        </tr>
        <tr>
            <td>Haute-Savoie</td>
            <td>433</td>
        </tr>
        <tr>
            <td>Paris</td>
            <td>875</td>
        </tr>
        <tr>
            <td>Seine-Maritime</td>
            <td>395</td>
        </tr>
        <tr>
            <td>Seine-et-Marne</td>
            <td>556</td>
        </tr>
        <tr>
            <td>Yvelines</td>
            <td>585</td>
        </tr>
        <tr>
            <td>Deux-Sèvres</td>
            <td>170</td>
        </tr>
        <tr>
            <td>Somme</td>
            <td>276</td>
        </tr>
        <tr>
            <td>Tarn</td>
            <td>170</td>
        </tr>
        <tr>
            <td>Tarn-et-Garonne</td>
            <td>250</td>
        </tr>
        <tr>
            <td>Var</td>
            <td>465</td>
        </tr>
        <tr>
            <td>Vaucluse</td>
            <td>263</td>
        </tr>
        <tr>
            <td>Vendée</td>
            <td>282</td>
        </tr>
        <tr>
            <td>Vienne</td>
            <td>226</td>
        </tr>
        <tr>
            <td>Haute-Vienne</td>
            <td>97</td>
        </tr>
        <tr>
            <td>Vosges</td>
            <td>141</td>
        </tr>
        <tr>
            <td>Yonne</td>
            <td>342</td>
        </tr>
        <tr>
            <td>Territoire de Belfort</td>
            <td>62</td>
        </tr>
        <tr>
            <td>Essonne</td>
            <td>561</td>
        </tr>
        <tr>
            <td>Hauts-de-Seine</td>
            <td>483</td>
        </tr>
        <tr>
            <td>Seine-Saint-Denis</td>
            <td>248</td>
        </tr>
        <tr>
            <td>Val-de-Marne</td>
            <td>353</td>
        </tr>
        <tr>
            <td>Val-d'Oise</td>
            <td>360</td>
        </tr>
    </table>





    <h1>Tableau des données sur les véhicules électriques et les bornes de recharge</h1>
    <table id="table_2">
        <tr>
            <th>Année</th>
            <th>Voitures Électriques</th>
            <th>Bornes de Recharge Publiques</th>
        </tr>
        <tr>
            <td>2015</td>
            <td>40,993</td>
            <td>10,161</td>
        </tr>
        <tr>
            <td>2016</td>
            <td>63,200</td>
            <td>14,799</td>
        </tr>
        <tr>
            <td>2017</td>
            <td>90,050</td>
            <td>20,048</td>
        </tr>
        <tr>
            <td>2018</td>
            <td>127,683</td>
            <td>24,808</td>
        </tr>
        <tr>
            <td>2019</td>
            <td>177,517</td>
            <td>28,537</td>
        </tr>
        <tr>
            <td>2020</td>
            <td>296,897</td>
            <td>32,736</td>
        </tr>
        <tr>
            <td>2021</td>
            <td>470,452</td>
            <td>53,667</td>
        </tr>
        <tr>
            <td>2022</td>
            <td>690,093</td>
            <td>82,107</td>
        </tr>
        <tr>
            <td>2023</td>
            <td>728,063</td>
            <td>100,000</td>
        </tr>
    </table>






    <h1>Tableau des prévisions sur les véhicules électriques et les bornes de recharge</h1>
    <table id="table_3">
        <tr>
            <th>Année</th>
            <th>Prévision Voitures Électriques</th>
            <th>Prévision Bornes de Recharge Publiques</th>
        </tr>
        <tr>
            <td>2024</td>
            <td>800,000</td>
            <td>125,000</td>
        </tr>
        <tr>
            <td>2025</td>
            <td>900,000</td>
            <td>150,000</td>
        </tr>
        <tr>
            <td>2026</td>
            <td>1,100,000</td>
            <td>200,000</td>
        </tr>
        <tr>
            <td>2027</td>
            <td>1,300,000</td>
            <td>250,000</td>
        </tr>
        <tr>
            <td>2028</td>
            <td>1,500,000</td>
            <td>300,000</td>
        </tr>
        <tr>
            <td>2029</td>
            <td>1,700,000</td>
            <td>350,000</td>
        </tr>
        <tr>
            <td>2030</td>
            <td>2,000,000</td>
            <td>400,000</td>
        </tr>
    </table>





    <h1>Tableau des données par Ratios des bornes de recharges et parcs éléctriques</h1>
    <table id="table_4">
        <tr>
            <th>Catégorie</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>HDF</td>
            <td>11</td>
        </tr>
        <tr>
            <td>NORM</td>
            <td>11</td>
        </tr>
        <tr>
            <td>BRET</td>
            <td>14</td>
        </tr>
        <tr>
            <td>PDL</td>
            <td>14</td>
        </tr>
        <tr>
            <td>NAQ</td>
            <td>13</td>
        </tr>
        <tr>
            <td>OCCT</td>
            <td>10</td>
        </tr>
        <tr>
            <td>COR</td>
            <td>20</td>
        </tr>
        <tr>
            <td>PACA</td>
            <td>16</td>
        </tr>
        <tr>
            <td>ARA</td>
            <td>16</td>
        </tr>
        <tr>
            <td>CVL</td>
            <td>11</td>
        </tr>
        <tr>
            <td>BFC</td>
            <td>11</td>
        </tr>
        <tr>
            <td>GE</td>
            <td>12</td>
        </tr>
        <tr>
            <td>IDF</td>
            <td>16</td>
        </tr>
    </table>



    <h1>Tableau des données par catégorie</h1>
    <table id="table_5">
        <tr>
            <th>Catégorie</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>Commerce</td>
            <td>26,350</td>
        </tr>
        <tr>
            <td>Parking</td>
            <td>25,593</td>
        </tr>
        <tr>
            <td>Voirie</td>
            <td>19,566</td>
        </tr>
        <tr>
            <td>Entreprises</td>
            <td>3,011</td>
        </tr>
        <tr>
            <td>Autres sites</td>
            <td>752</td>
        </tr>
    </table>




    <h1>Tableau des données sur les types de courant</h1>
    <table id="table_6">
        <tr>
            <th>Type de Courant</th>
            <th>Valeur</th>
            <th>Pourcentage</th>
        </tr>
        <tr>
            <td>AC (Courant alternatif)</td>
            <td>98,870</td>
            <td>89.99%</td>
        </tr>
        <tr>
            <td>DC (Courant Continu)</td>
            <td>10,985</td>
            <td>10.01%</td>
        </tr>
    </table>



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