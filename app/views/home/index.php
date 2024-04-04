<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Головна сторінка</title>
    <meta name="description" content="Авторизація">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require_once 'public/blocks/header.php'; ?>
    <?php
    if (isset($_COOKIE['login'])) {
        ?>
    <div class="container main">
        <br><br>
        <form action="/shorten/index" method="post" class="form-control">
            <label for="short">Коротке посилання:</label>
            <input type="text" name="short" id="short" placeholder="Введіть скорочення" value="<?=$_POST['short']?>" required maxlength="40"><br>
            <label for="link">Довге посилання:</label>
            <input type="url" name="link" id="link" placeholder="Введіть довге посилання" value="<?=$_POST['link']?>" required>
            <br>
            <button type="submit" class="btn">Створити коротке посилання</button>
            <?php
            if (isset($existingShort) && $existingShort) {
                echo '<p class="error">Cкорочення вже існує</p>';
            }
            ?>
        </form>
        <br>
        <br>
        <div class="display">
            <ul>
                <?php foreach ($data['shortLinks'] as $shortLink): ?>
                    <li>
                        <div class="shorts">
                            <strong>Short:</strong>
                            <a href="<?php echo $shortLink['link']; ?>" target="_blank">
                                <?php echo $shortLink['short']; ?>
                            </a>
                            <br>
                            <strong>Link:</strong>
                            <?php echo $shortLink['link']; ?>
                        </div>

                        <form action="/shorten/delete" method="post" style="display:inline;">
                            <input type="hidden" name="short_id" value="<?php echo $shortLink['id']; ?>">
                            <button type="submit" class="btn">Delete</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
        <?php
    } else {
        ?>
        <br><br><br><br>
        <div class="container main">
            <h1>Будь ласка, зареєструйтеся, якщо у вас немає облікового запису, або авторизуйтеся, якщо хочете використовувати наш сервіс</h1>
        </div>
        <br><br><br><br>
        <?php
    }
    ?>

    <?php require_once 'public/blocks/footer.php'; ?>
</body>
</html>