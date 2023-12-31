<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link id="mylink" rel="stylesheet" href="./styles/light_theme.css">
</head>
<body>
        <div class="form">
            <form action="" method="get" class="get">
                <div class="radiobtn">
                    <div>Как удобно получить ответ:</div>
                    <label for="mail"> <input type="radio" name="choose" id="mail" value="на почту"> На почту</label><br>
                    <label for="pnone"> <input type="radio" name="choose" id="phone" value="на телефон"> На телефон</label><br>
                    <label for="live"> <input type="radio" name="choose" id="live" value="при личной встрече"> При личной встрече</label><br>
                </div>
                <div class="list-question">
                    <label for="theme"> Укажите тему вашего обращения</label><br>
                    <select name="theme" id="theme">
                        <option value="work">Работа</option>
                        <option value="coop">Сотрудничество</option>
                        <option value="person">Личное</option>
                    </select>
                </div>
                <div class="check">
                    <div>Какие языки знаете?</div>
                    <label for="chckbx">
                        <input type="checkbox" name="chckbx" id="chckbx1" value="Python">Python
                    </label><br>
                    <label for="chckbx">
                        <input type="checkbox" name="chckbx" id="chckbx2" value="C#">C#
                    </label><br>
                    <label for="chckbx">
                        <input type="checkbox" name="chckbx" id="chckbx3" value="C++">C++
                    </label><br>
                </div>
                <div class="inp">
                    <div class="text_form">
                        <label for="name">Ваше имя:</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="text_form">
                        <label for="email">Ваша почта:</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="text_form">
                        <label for="tel">Ваш телефон:</label>
                        <input type="text" name="tel" id="tel">
                    </div>
                </div>
                <div class="text_form">
                    Ваш вопрос:
                    <textarea cols="30" rows="10" id="area"></textarea>
                </div>
                    <input type="submit" value="Отправить запрос" class="btn-check">
                </form>
                <button onclick="check()" class="btn-check"> Проверка</button>
            </div>
    <script src="scripts/scripts.js"></script>
</body>
</html>