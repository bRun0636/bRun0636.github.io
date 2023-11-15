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
                Компетенции
            </h1>
        </div>
        <div class="wrapper-main" id="main_block">
            <div class="box_comp">
                <div>
                    <h2>Заголовок</h2>
                    <small class="time">
                        9.00-10.30
                    </small>
                    <h5 class="text">
                        Тут будет текст
                    </h5>
                </div>
                <div class="div-image">
                    <img src="images/image-box.png" alt="" class="image-box">
                </div>
            </div>
            <div class="box_comp">
                <div>
                    <h2>Заголовок</h2>
                    <small class="time">
                        9.00-10.30
                    </small>
                    <h5 class="text">
                        Тут будет текст
                    </h5>
                </div>
                <div class="div-image">
                    <img src="images/image-box.png" alt="" class="image-box">
                </div>
            </div>
            <div class="box_comp">
                <div>
                    <h2>Заголовок</h2>
                    <small class="time">
                        9.00-10.30
                    </small>
                    <h5 class="text">
                        Тут будет текст
                    </h5>
                </div>
                <div class="div-image">
                    <img src="images/image-box.png" alt="" class="image-box">
                </div>
            </div>
            <div class="box_comp">
                <div>
                    <h2>Заголовок</h2>
                    <small class="time">
                        9.00-10.30
                    </small>
                    <h5 class="text">
                        Тут будет текст
                    </h5>
                </div>
                <div class="div-image">
                    <img src="images/image-box.png" alt="" class="image-box">
                </div>
            </div>
            <div class="box_comp">
                <div>
                    <h2>Заголовок</h2>
                    <small class="time">
                        9.00-10.30
                    </small>
                    <h5 class="text">
                        Тут будет текст
                    </h5>
                </div>
                <div class="div-image">
                    <img src="images/image-box.png" alt="" class="image-box">
                </div>  
            </div>
            <div class="box_comp">
                <div>
                    <h2>Заголовок</h2>
                    <small class="time">
                        9.00-10.30
                    </small>
                    <h5 class="text">
                        Тут будет текст
                    </h5>
                </div>
                <div class="div-image">
                    <img src="images/image-box.png" alt="" class="image-box">
                </div>  
            </div>
            <div class="box_comp">
                <div>
                    <h2>Заголовок</h2>
                    <small class="time">
                        9.00-10.30
                    </small>
                    <h5 class="text">
                        Тут будет текст
                    </h5>
                </div>
                <div class="div-image">
                    <img src="images/image-box.png" alt="" class="image-box">
                </div>  
            </div>
            <div class="box_comp">
                <div>
                    <h2>Заголовок</h2>
                    <small class="time">
                        9.00-10.30
                    </small>
                    <h5 class="text">
                        Тут будет текст
                    </h5>
                </div>
                <div class="div-image">
                    <img src="images/image-box.png" alt="" class="image-box">
                </div>  
            </div>
        </div>
        <div class="add_form">
            <input type="text" placeholder="Введите заголовок" name="" id="title">
            <input type="text" placeholder="Введите время" name="" id="time">
            <textarea name="" id="text" cols="10" rows="10"></textarea>
            <input type="file" id="file">
            <button onclick="add_form()">Добавить</button>
        </div>
    </main>
    <?php
include("footer.html");
    ?>
    <script src="scripts/scripts.js"></script>
</body>
</html>