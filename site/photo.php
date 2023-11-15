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
    include("header.html");
?>
    <main class="main">
        <div class="btn">       
            <button onclick="size(50)" class="style">
                50px
            </button>
            <button onclick="size(100)" class="style">
                100px
            </button>
            <button onclick="size(150)" class="style">
                150px
            </button>
    </div>
    <div class="wrapper">
        <h1 class="text">
            Фото
    </h1>
    <div class="photo">
        <div>
            <img src="images/1.webp" alt="Девушка блондинка" class="image_main" id="blond" name="img">
            <h5 class="text">
                Девушка блондинка
            </h5>
        </div>
        <div>
            <img src="images/2.jpg" alt="Девушка в черно-белом" class="image_main" name="img">
            <h5 class="text">
                Девушка в черно-белом
            </h5>
        </div>
        <div>
            <img src="images/3.jpg" alt="Киса" class="image_main" name="img">
            <h5 class="text">
                Киса
            </h5>
            </div>
        <div>
            <img src="images/4.jpg" alt="Девушка в платье" class="image_main" name="img">
            <h5 class="text">    
                Девушка в платье
            </h5>
        </div>
        <div>
            <img src="images/5.jpeg" alt="Черная пума" class="image_main" name="img">
            <h5 class="text">
                Черная пума
            </h5>
        </div>
        <div>
            <img src="images/6.jpg" alt="Девушка с шарфом" class="image_main" id="sharf">
            <h5 class="text">
                Девушка с шарфом
            </h5>
        </div>
    </div>

</div>
    </main>
    
    <script src="scripts/scripts.js"></script>
</body>
</html>