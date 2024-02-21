var electricData = [40993, 63200, 90050, 127683, 177517, 296897, 470452, 690093, 728063];
var hybridData = [10161, 14799, 20048, 24808, 28537, 32736, 53667, 82107, 100000];
var allLabels = ['2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'];

var data = {
    labels: allLabels,
    datasets: [
        {
            label: 'Nombre d\'immatriculation de voitures 100% électriques',
            data: electricData,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
            hidden: false
        },
        {
            label: 'Nombre de bornes à disposition dans le Public',
            data: hybridData,
            backgroundColor: 'rgba(255, 140, 0, 0.2)',
            borderColor: 'rgba(255, 140, 0, 1)',
            borderWidth: 1,
            hidden: false
        }
    ]
};

var options = {
    responsive: false,
    maintainAspectRatio: false,
    scales: {
        x: {
            beginAtZero: true
        },
        y: {
            beginAtZero: true
        }
    },
    plugins: {
        legend: {
            display: true,
            position: 'top'
        },
        tooltips: {
            callbacks: {
                label: function(context) {
                    var label = context.dataset.label || '';
                    if (label) {
                        label += ': ';
                    }
                    label += context.formattedValue;
                    return label;
                }
            }
        }
    }
};

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});

document.getElementById('electric-legend').addEventListener('change', function() {
    myChart.data.datasets[0].hidden = !this.checked;
    myChart.update();
});

document.getElementById('hybrid-legend').addEventListener('change', function() {
    myChart.data.datasets[1].hidden = !this.checked;
    myChart.update();
});

document.getElementById('year-select').addEventListener('change', function() {
    var selectedYear = this.value;
    if (selectedYear === 'all') {
        myChart.data.labels = allLabels;
        myChart.data.datasets[0].data = electricData;
        myChart.data.datasets[1].data = hybridData;
    } else {
        var yearIndex = allLabels.indexOf(selectedYear);
        myChart.data.labels = [selectedYear];
        myChart.data.datasets[0].data = [electricData[yearIndex]];
        myChart.data.datasets[1].data = [hybridData[yearIndex]];
    }
    myChart.update();
});