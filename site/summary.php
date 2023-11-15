<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link id="mylink" rel="stylesheet" href="./styles/light_theme.css">
</head>
<body>
<?php
    include('header.html');
    ?>
    <main class="main">
        <div class="wrapper">
            <h1 class="text">
                Резюме
            </h1>
            <table class="box">
                <tr class="string">
                    <th class="text column">Год</th>
                    <th class="text column">Место работы</th>
                    <th class="text column">должность</th>
                </tr>
                <tr class="string">
                    <th class="text column">2025</th>
                    <th class="text column">ОИЯИ</th>
                    <th class="text column">Директор</th>
                </tr>
                <tr class="string">
                    <th class="text column">2026</th>
                    <th class="text column">Росиия</th>
                    <th class="text column">Президент</th>
                </tr>
            </table>
        </div>
    </main>
    <?php
include("footer.html");
    ?>
    <script src="scripts/scripts.js"></script>
</body>
</html>