const svg = d3.select("svg");
const initialViewBox = "0 0 615 583";

svg.attr("viewBox", initialViewBox);

function zoomToDepartement(departementId) {
    const path = svg.select(`#${departementId}`);
    const bbox = path.node().getBBox();

    const newViewBox = `${bbox.x - 5} ${bbox.y - 5} ${bbox.width + 10} ${bbox.height + 10}`;

    svg.transition()
        .duration(500)
        .attr("viewBox", newViewBox);

    resetZoomButton.style.display = "block";
}
const departements = ["FR-01"];

for (let i = 2; i <= 95; i++) {
    const departementNumber = i < 10 ? `0${i}` : `${i}`;
    const departementCode = `FR-${departementNumber}`;
    departements.push(departementCode);
}

departements.forEach(departement => {
    const path = svg.select(`#${departement}`);
    path.on("click", () => {
        zoomToDepartement(departement);
    });
});

const resetZoomButton = document.getElementById("resetZoomButton");
resetZoomButton.style.display = "none";

resetZoomButton.addEventListener("click", () => {
    svg.transition()
        .duration(500)
        .attr("viewBox", initialViewBox);

    resetZoomButton.style.display = "none";
});

/* 
const width = document.getElementById("legend").offsetWidth * 0.95,
                height = 550,
                legendCellSize = 20,
                colors = ['#c7eafb', '#95cef0', '#50c1ef', '#0292cb', '#005d82'];

            var legend = d3.select("#legend")
                .append('svg')
                .attr('width', width)
                .attr('height', height)
                .append('g')
                .attr('transform', 'translate(40, 50)');

                

        legend.selectAll()
            .data(d3.range(colors.length))
            .enter().append('svg:rect')
                .attr('height', legendCellSize + 'px')
                .attr('width', legendCellSize + 'px')
                .attr('x', 5)
                .attr('y', d => d * legendCellSize)
                .style("fill", d => colors[d]);

        var legendText = ['0 à 100 bornes de recharge', '100 à 200 bornes de recharge', '200 à 300 bornes de recharge', '300 à 500 bornes de recharge', 'Plus de 500 bornes de recharge'];

legend.selectAll()
    .data(legendText)
    .enter().append('text')
        .attr('x', 30) 
        .attr('y', (d, i) => i * legendCellSize + 15) 
        .text(d => d);

        legend.selectAll("rect")
        .style("fill", function(d, i) {
          return colors[i];
        });

*/
var paths = document.querySelectorAll('svg path');

paths.forEach(function(path) {
    
    path.addEventListener('mouseover', function() {
        
        path.style.transition = 'opacity 0.2s';
        path.style.opacity = '1';

        
        paths.forEach(function(otherPath) {
            if (otherPath !== path) {
                otherPath.style.transition = 'opacity 0.2s';
                otherPath.style.opacity = '0.2';
            }
        });
    });

    path.addEventListener('mouseout', function() {
        paths.forEach(function(otherPath) {
            otherPath.style.transition = 'opacity 0.2s';
            otherPath.style.opacity = '1';
        });
    });
});

var paths = document.querySelectorAll('svg path');
var tooltip = document.createElement('div');
tooltip.id = 'tooltip';
document.body.appendChild(tooltip);

document.addEventListener('mousemove', function (event) {
  tooltip.style.left = (event.pageX + 10) + 'px';
  tooltip.style.top = (event.pageY + 10) + 'px';
});

fetch('nbr_de_bornes.json')
  .then(response => response.json())
  .then(data => {

    paths.forEach(function (path) {
      path.addEventListener('mouseover', function () {
        path.style.transition = 'opacity 0.2s';
        path.style.opacity = '1';

        var departementName = path.getAttribute('title');

        var nbrDeBornes = 0;
        for (var i = 0; i < data.length; i++) {
          if (data[i].department === departementName) {
            nbrDeBornes = data[i].nbrDeBornes;
            break;
          }
        }

        tooltip.innerHTML = '<strong>' + departementName + '</strong><br>' + 'Nbr de bornes : ' + nbrDeBornes;

        tooltip.style.display = 'block', tooltip.style.position='absolute', tooltip.style.backgroundColor='#2f2f2f', tooltip.style.color='white', tooltip.style.padding='10px', tooltip.style.borderRadius='5px';

        paths.forEach(function (otherPath) {
          if (otherPath !== path) {
            otherPath.style.transition = 'opacity 0.2s';
            otherPath.style.opacity = '0.2';
          }
        });
      });

      path.addEventListener('mouseout', function () {
        paths.forEach(function (otherPath) {
          otherPath.style.transition = 'opacity 0.2s';
          otherPath.style.opacity = '1';
        });

        tooltip.style.display = 'none';
      });
    });
  })
  .catch(error => console.error('Erreur lors du chargement du fichier JSON :', error));