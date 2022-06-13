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

    
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <h4>Почта</h4>
    <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <?php
            include 'database/mail.php';
            foreach($messages as $message){
                echo'
                <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">'.$message[0].'</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>'.$message[1].'</li>
                      <li>'.$message[2].'</li>
                      <li>'.$message[3].'</li>
                    </ul>
                    <a class="w-100 btn btn-lg btn-outline-primary" href="delete-post.php?id='.$message[4].'">Видалити</a>
                  </div>
                </div>
              </div>
                ';
            }
        ?>
    </div>
<?php endif ?>
</body>
</html>