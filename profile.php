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

    <!--Форма создания постов-->
    <div class="container post_form">
        <div class="row">
            <div class="col-12 post_row_header">
                <h1 class="hello">Привет, <?php echo $_COOKIE['User'];?> </h1>
            </div>
        </div>

        <div class="row col-12">
            <form method="POST" action="profile.php" enctype="multipart/form-data" name="upload">
                <input type="text" class="post_header" type="text" name="title" placeholder="Заголовок вашего поста"></input>
                <textarea name="text" class="post_text_area" cols="30" rows="10" placeholder="Введите текст вашего поста..."></textarea>
                <input type="file" name="file" /><br>
                <button type="submit" class="post_btn_purple" name="submit">Сохранить пост!</button>
            </form>
        </div>
    </div>


    <script type="text/javascript" src="js/button.js"></script>
</body>

</html>

<?php
require_once('db.php');

$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');

if (isset($_POST['submit'])) 
{
    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die ("Заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";

    if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");
}

if(!empty($_FILES["file"]))
    {
        if (((@$_FILES["file"]["type"] == "image/gif") || (@$_FILES["file"]["type"] == "image/jpeg")
        || (@$_FILES["file"]["type"] == "image/jpg") || (@$_FILES["file"]["type"] == "image/pjpeg")
        || (@$_FILES["file"]["type"] == "image/x-png") || (@$_FILES["file"]["type"] == "image/png"))
        && (@$_FILES["file"]["size"] < 102400))
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "Load in:  " . "upload/" . $_FILES["file"]["name"];
        }
        else
        {
            echo "upload failed!";
        }
    }
?> 