<!doctype html>
<html lang="pl-PL">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Formularz dane</title>
    <link rel="stylesheet" href="/pi/css/style.css" type="text/css" />
</head>

<body>
    <h2>Pomiary temperatur - wykresy </h2>
    <div class="dane">
        Obiekt Pomisarowy:
        Data: <input type="date" name="datepicker">
        Czas: <input type="time" name="timepicker">
        <input type="button" name="przycisk1" id="przycisk1" value="wykres">
    </div>
    <div class="chart-container">
        <canvas id="myChart"></canvas>
    </div>


    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Pomiar temperatury',
                    borderColor: 'rgb(55, 39, 250)',
                    data: [0, 10, 5, 2, 20, 30, 45],
                    fill: false
                }]
            },

            // Configuration options go here
            options: {}
        });

    </script>
</body>

</html>
