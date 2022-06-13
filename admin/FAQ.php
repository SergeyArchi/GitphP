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
    <footer class="pt-4 my-md-5 pt-md-5">
    <div class="row">
      <div class="col-6 col-md">
        <h3>Користувач</h3>
        <ul class="list-unstyled">
          <li class="mb-1"><a class="me-3 py-2 text-dark text-decoration-none" href="#">Авторизація та Реєстрація</a></li>
          <li class="mb-1"><a class="me-3 py-2 text-dark text-decoration-none" href="#">Права Аккаунту</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h3>Почта</h3>
        <ul class="list-unstyled">
          <li class="mb-1"><a class="me-3 py-2 text-dark text-decoration-none" href="#">Відправка та прийом</a></li>
          <li class="mb-1"><a class="me-3 py-2 text-dark text-decoration-none" href="#">Видалення почти</a></li>
          <li class="mb-1"><a class="me-3 py-2 text-dark text-decoration-none" href="#">Зміна переадресації почти</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h3>Основне</h3>
        <ul class="list-unstyled">
          <li class="mb-1"><a class="me-3 py-2 text-dark text-decoration-none" href="#">Команда</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <footer class="pt-4 my-md-5 pt-md-5">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">&copy; 2021</small>
        <small class="d-block mb-3 text-muted">Створенно: <a class="a">Бойчук Сергій Олександрович</a></small>
      </div>
    <div>
    </div>
<?php endif ?>
</body>
</html>