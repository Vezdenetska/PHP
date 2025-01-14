<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Реєстрація</title>
    <meta name="description" content="Реєстрація">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>

    <div class="container main">
        <h1>Реєстрація</h1>
        <p>Тут ви можете зареєструватися</p>
        <form action="/user/reg" method="post" class="form-control">
            <input type="text" name="name" placeholder="Введіть ім'я" value="<?=$_POST['name']?>"><br>
            <input type="email" name="email" placeholder="Введіть email" value="<?=$_POST['email']?>"><br>
            <input type="password" name="pass" placeholder="Введіть пароль" value="<?=$_POST['pass']?>"><br>
            <input type="password" name="re_pass" placeholder="Повторіть пароль" value="<?=$_POST['re_pass']?>">
            <div class="error"><?=$data['message']?></div>
            <button class="btn" id="send">Готово</button>
        </form>
    </div>

    <?php require 'public/blocks/footer.php' ?>
</body>
</html>
