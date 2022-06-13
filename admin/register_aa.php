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

<body>

<?php if($_COOKIE['user'] == ""): header("Location: /")?>
<?php else: ?>
    <div class="container py-3">
    <?php require "block/header-admin.php" ?>
    <?php if($_COOKIE['perms'] == "ADMINISTRATOR"): ?>
          <h2>Створити новий аккаунт</h2>
          <form action="configuration/check.php" method="POST">
          <input type="text" class="form-auth" value="login" name="login" id="login" placeholder="Логин"><br/>
          <input type="password" class="form-auth" value="pass" name="pass" id="pass" placeholder="Пароль"><br/>
          <input type="text" class="form-auth" name="firstname" value="firstname" id="firstname" placeholder="Фамилие"><br/>
          <input type="text" class="form-auth" name="lastname" id="lastname" value="lastname" placeholder="Имя"><br/>
          <button  class="btn btn-outline-primary" type="submit">Регистрация</button>
          </form>
    <?php else: ?>
          <h2>Помилка</h2>
          <p>У вас недостатньо прав для створення нового Адмін-Користувача</p>
          <br/>
          <p>Ви: <?=$_COOKIE['perms']?></p>
          <p>Потрібно: ADMINISTATOR</p>
    <?php endif ?>
    </div>
<?php endif ?>
</body>
</html> 