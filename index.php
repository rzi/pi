﻿<!doctype html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <title>Pomiar temperatury Raspberry PI</title>
</head>

<body>
    <main class="main">
        <div class="container">
            <h3>Pomiar temperatury i zapis w bazie danych</h3>
            <div class="contener1">
                <p>Celem projektu są pomiary temperatur, ich
                    zapis do zewnętrznej bazy danych oraz sterowanie zaworami ogrzewania podłogowego</p>
                <img alt="Pi" src="/img/schemat_rpi2.png" class="img-fluid"> <br>
                <h4>1.Hardware:</h4>
                <ul>
                    <li>
                        Czujnik temperatury DS18B20
                    </li>
                    <Li>
                        Moduł interfejsu One wire na USB firmy Meraprojekt (FT232RL + DS2480)
                    </Li>
                    <li>
                        Raspberry Pi jako serwer
                    </li>
                    <li>
                        Moduł 8 przekaźników
                    </li>
                </ul>

                <h4>2.Software:</h4>
                <ul>
                    <li>
                        Serwer HTTP (Apache, PHP, MySQL)
                    </li>
                    <li>
                        Python - oprogramowanie modułu pomiarowego
                    </li>
                </UL>

                <h3>Pomiar temperatury- Monitor danych (archiwum)</h3>
                <ul>

                    <li>
                        <a href="new_wyk5.php">Pomiar temperatury - wykresy >>></a>
                    </li>

                    <li>
                        <a href="new_cz.php">Pomiar temperatury - dane >>></a>
                    </li>
                </ul>

            </div>
        </div>
    </main>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>