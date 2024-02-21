var data = {
    labels: ['2024', '2025', '2026', '2027', '2028', '2029', '2030'],
    datasets: [
        {
            label: 'Prévision du nombre d\'immatriculation de voitures 100% électriques',
            data: [800000, 900000, 1100000, 1300000, 1500000, 1700000, 2000000],
            borderColor: 'rgba(75, 192, 192, 1)',
            borderDash: [5, 5],
            fill: false
        },
        {
            label: 'Prévision du nombre de bornes à disposition dans le Public',
            data: [125000, 150000, 200000, 250000, 300000, 350000, 400000],
            borderColor: 'rgba(255, 99, 132, 1)',
            borderDash: [5, 5],
            fill: false
        }
    ]
};

var ctx = document.getElementById('myLineChart').getContext('2d');

var myChart2 = new Chart(ctx, {
    type: 'line',
    data: data,
    options: {
        responsive: false,
        maintainAspectRatio: false,
        scales: {
            x: {
                beginAtZero: true
            },
            y: {
                beginAtZero: true
            }
        }
    }
});