window.onload = function() {
    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: ["Direct", "Referral", "Social"],
            datasets: [{
                data: [55, 30, 15],
                backgroundColor: [
                    "rgba(0, 97, 242, 1)",
                    "rgba(0, 172, 105, 1)",
                    "rgba(88, 0, 232, 1)"
                ],
                hoverBackgroundColor: [
                    "rgba(0, 97, 242, 0.9)",
                    "rgba(0, 172, 105, 0.9)",
                    "rgba(88, 0, 232, 0.9)"
                ],
                borderWidth: 0 // Menghilangkan garis border
            }]
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: "#dddfeb",
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });

    // Bar Chart Example
    var ctx = document.getElementById("myBarChart");
    var myBarChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [{
                label: "Revenue",
                backgroundColor: "rgba(0, 97, 242, 1)",
                hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
                data: [4215, 5312, 6251, 7841, 9821, 14984],
                maxBarThickness: 25
            }]
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false // Menonaktifkan grid lines untuk sumbu X
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value) {
                            return "$" + number_format(value);
                        }
                    },
                    gridLines: {
                        display: false, // Menonaktifkan grid lines untuk sumbu Y
                        drawBorder: false, // Menghilangkan garis border
                        zeroLineColor: "rgba(0, 0, 0, 0)", // Mengatur garis nol menjadi transparan
                        color: "rgba(0, 0, 0, 0)" // Mengatur warna garis menjadi transparan
                    }
                }]
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: "#dddfeb",
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || "";
                        return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
                    }
                }
            }
        }
    });
};