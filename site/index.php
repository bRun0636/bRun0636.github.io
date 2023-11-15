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
            <div>
                <h1 class="text">
                    О себе
            </h1>
            </div>
            <div class="discription">
            Это мой пробный сайт на первом занятии по веб технологиям. <br/>
            Я студент второго курса Университета Дубна. На данном предмете Веб-технологии мы изучаем: Html5, CSS, а в дальнейшем и JavaScript. <br/>
            <button class="but">
                Подробнее
            </button>
            </div>
        </div>
    </main>
    <?php
include("footer.html");
    ?>
    <script src="scripts/scripts.js"></script>
</body>
</html>