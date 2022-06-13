<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin-style.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="pricing.css" rel="stylesheet">
    <title>Document</title>
</head>
        <?php 
        if($_COOKIE['user'] == ''):
        ?>
<body>
        <div class="container-a">
        <h1>Форма Авторизация</h1>
            <form action="autch.php" method="POST">
            <div class="dws-input-a">
            <input type="text" class="form-auth"  name="login" id="login" placeholder="Логин"><br/>
            </div>
            <div class="dws-input-a">
            <input type="password" class="form-auth" name="pass" id="pass" placeholder="Пароль"><br/>
            </div>
            <div class="dws-sumbit-a">
            <input class="btn btn-outline-primary" type="submit" name="submit" value="ВОЙТИ"><br />
            </div>
            </form>
        </div>
        
        <?php else: ?>
    <div class="container py-3">
    <?php require "block/header-admin.php" ?>
    </div>
        <br/>
        <p></p>
        <br/>
        <h4>Інформація про робочий акаунт</h4>
        <p>Ім'я-Прізвище: <?=($_COOKIE['lname']) ?> <?=($_COOKIE['fname'])?> </p>
        <br/>
        <p>Логін: <?=($_COOKIE['user'])?></p>
        <br/>
        <p>Права Акаунту: <?=$_COOKIE['perms']?></p>
        <br/>
        <p>Номер Аккаунту: <?=$_COOKIE['id']?></p>
        <br/>
        
    </div>
    </div>
    <?php endif;?>
</body>

</html>