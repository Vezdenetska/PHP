<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Кабинет пользователя</title>
    <meta name="description" content="Кабинет пользователя">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/user.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>

    <div class="container main">
        <br><br>
        <h1>Особистий кабінет користувача</h1>
        <br>
        <div class="user-info">
            <p>Раді бачити вас, <b><?=$data['name']?></b></p>
            <br>
            <br>
            <form action="/user/dashboard" method="post">
                <input type="hidden" name="exit_btn">
                <button type="submit" class="btn">Вийти</button>
            </form>
        </div>
    </div>


    <?php require 'public/blocks/footer.php' ?>
</body>
</html>