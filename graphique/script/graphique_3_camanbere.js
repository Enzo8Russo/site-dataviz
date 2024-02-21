var values = [98870, 10985];
var total = values.reduce((a, b) => a + b, 0);
var percentages = values.map(value => ((value / total) * 100).toFixed(2) + '%');

var data = {
    labels: ['AC (Courant alternatif)','DC (Courant Continue)'],
    datasets: [{
        data: values,
        backgroundColor: [
            '#457B9D',

            '#2A9D8F'
        ],
        hoverOffset: 4
    }]
};

var options = {
    responsive: false,
    maintainAspectRatio: false,
    plugins: {
        legend: {
            display: false
        }
    }
};

var ctx = document.getElementById('myPieChart').getContext('2d');
var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: options
});

myPieChart.options.plugins.tooltip.enabled = true;
myPieChart.options.plugins.tooltip.callbacks.label = function(context) {
    return percentages[context.dataIndex];
};

var legendDiv = document.getElementById('chart-legend');
data.labels.forEach(function(label, index) {
    var legendItem = document.createElement('div');
    legendItem.style.marginBottom = '5px';
    legendItem.style.display = 'flex';
    legendItem.style.alignItems = 'center';
    legendItem.innerHTML = `<span style="background-color: ${data.datasets[0].backgroundColor[index]}; display: inline-block; width: 20px; height: 20px;margin-right: 20px;"></span>${label}`;
    legendDiv.appendChild(legendItem);
});