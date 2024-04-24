<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тедтоев A.Ч.</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--Верхняя полоска сайта с картинкой и текстом-->
    <div class="container nav_bar">
        <div class="row">
            <div class="row">

                <div class="col-3 my_logo"></div>

                <div class="col-9">
                    <div class="nav_text">Информация обо мне!</div>
                </div>

            </div>
        </div>

    </div>

    <!--Серединка со списком и гифкой-->
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>
                    <ul>
                        <li>ФИО - Тедтоев Азамат Черменович;</li>
                        <li>Возраст - 25;</li>
                        <li>Профессиональные компетенции - без 5 минут ведущий .NET Developer (he-he);</li>
                        <li>Интересное - люблю животных, плавать, помело и вкусный воздух.</li>
                    </ul>
                </h2>
            </div>

            <div class="col-4">
                <div class="row my_gif"></div>
                <div class="row">
                    <h3>
                        <p class="title_my_gif">Просто прикольная гифка</p>
                    </h3>
                </div>
            </div>
        </div>

    </div>

    <!--Низ с фоткой греков-->
    <div class="container">
        <div class="col-12">
            <div class="row my_photo"></div>
            <div class="row">
                <h3>
                    <p class="title_my_photo">Просто прикольное фото</p>
                </h3>
            </div>
        </div>
    </div>

    <!--Кнопка-->
    <div class="container">
        <div class="row">
            <div class="button_js col-12">
                <button id="my_button">Click me</button>
                <p id="demo_image"></p>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/button.js"></script>
</body>

</html>