<section>
  <canvas id="myChart" style="width: 100%;
    min-width: 200px;"></canvas>
  <div id="legend-container">
    <label for="electric-legend">Voitures Électriques</label>
    <input type="checkbox" id="electric-legend" checked>
    <label for="hybrid-legend">Borne Rechargeable Public</label>
    <input type="checkbox" id="hybrid-legend" checked>
  </div>
  <div id="year-filter">
    <label for="year-select">Sélectionnez une année :</label>
    <select id="year-select">
      <option value="all">Toutes les années</option>
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
    </select>
  </div>
</section>
<script src="./graphique/script/graphique_1_barre_interactif.js"></script>