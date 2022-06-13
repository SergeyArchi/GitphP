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
      .col
      {
        width: 50%;
      }
    </style>
    <link href="pricing.css" rel="stylesheet">
    <title>Панель управління Адміністрації</title>
</head>

<body>
<?php if($_COOKIE['user'] == ""): header("Location: /")?>
<?php else: ?>
    <div class="container py-3">
    <?php require "/xampp/htdocs/admin/block/header-admin.php" ?>
        <br/>
        <br/>
        <h4>Користувачі</h4>
        <?php if($_COOKIE['perms'] == "ADMINISTRATOR"): ?>
          <?php
            include 'database/database_user.php';
            foreach($users_db as $administators){
                echo'
                <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">'.$administators[1].' '.$administators[2].' '.$administators[6].'</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>Логін: '.$administators[4].'</li>
                      <li>Номер аккаунту: '.$administators[0].'</li>
                    </ul>
                    <a class="w-100 btn btn-lg btn-outline-primary" href="configuration/delete.php?id='.$administators[0].'">Видалити</a>    
                    <a class="w-100 btn btn-lg btn-outline-primary" href="configuration/update-admin.php?id='.$administators[0].'">Редагувати</a>
                    <a class="w-100 btn btn-lg btn-outline-primary" href="configuration/update-admin.php?id='.$administators[0].'">Заблокувати</a>
                  </div>
                </div>
              </div>
                ';
            }
        ?>
        <?php else: ?>
          <?php
            foreach($users_admin as $administators){
                echo'
                <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">'.$administators[2].' '.$administators[3].'</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>Логін: '.$administators[5].'</li>
                      <li>Номер аккаунту: '.$administators[0].'</li>
                    </ul>
                  </div>
                </div>
              </div>
              ';
            }
        ?>
      <?php endif ?>
    </div>
<?php endif ?>
</body>
</html> 