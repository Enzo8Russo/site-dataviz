var data = [
    {
        name: 'Commerce',
        y: 26350,
        sliced: true,
        selected: true
    },
    {
        name: 'Parking',
        y: 25593
    },
    {
        name: 'Voirie',
        y: 19566
    },
    {
        name: 'Entreprises',
        y: 3011
    },
    {
        name: 'Autres sites',
        y: 752
    }
];

Highcharts.chart('pie-chart', {
    chart: {
        type: 'pie'
    },
    title: {
        text: '75 279 BORNES DE RECHARGE POUR LES VOITURES ELECTRIQUES EN FRANCE'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    options: {
        responsive: false,
        maintainAspectRatio: false,
    },
    series: [{
        name: 'Nombre total',
        data: data
    }]
});