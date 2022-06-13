<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/admin/admin-style.css" rel="stylesheet">
    <link href="/admin/assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="/admin/pricing.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php 
    include '/xampp/htdocs/admin/database/database_order.php';
    $user_admin_id = $_GET['id'];
    $user_admin = mysqli_query($mysql, "SELECT * FROM `auth_table` WHERE `id` = '$user_admin_id'");
    $user_admin = mysqli_fetch_assoc($user_admin);
    ?>
    <div class="container py-3">
        <?php require "/xampp/htdocs/admin/block/header-admin.php"?>
        <h3>Изменить акаунт <?=$user_admin['login'] ?></h3>
        <form action="update-admin-form.php" method="POST">
            <input type="hidden" name="id" id="id" value="<?=$user_admin['id']?>"><br/>
            <h3>Логін</h3>
            <input type="text" class="form-auth" name="login" id="login" value="<?=$user_admin['login'] ?>" placeholder="Логин"><br/>
            <h3>Призвище</h3>
            <input type="text" class="form-auth" name="firstname" id="firstname" value="<?=$user_admin['fname'] ?>" placeholder="Фамилие"><br/>
            <h3>Ім'я</h3>
            <input type="text" class="form-auth" name="lastname" id="lastname" value="<?=$user_admin['lname'] ?>" placeholder="Имя"><br/>
            <br/>
            <h3>Права Аккаунту</h3>
            <div class="my-3">
            <?php if($user_admin['perms'] == "ADMINISTRATOR"): ?>
              <div class="form-check">
              <input name="perms" id="2" type="radio" class="form-check-input" checked value="ADMINISTRATOR">
              <label class="form-check-label" for="2">ADMINISTRATOR</label>
             </div>
            <?php else: ?>
              <div class="form-check">
              <input name="perms" id="2" type="radio" class="form-check-input" value="ADMINISTRATOR">
              <label class="form-check-label" for="2">ADMINISTRATOR</label>
             </div>
            <?php endif ?>
            <?php if($user_admin['perms'] == "MODERATOR"): ?>
              <div class="form-check">
              <input name="perms" id="2" type="radio" class="form-check-input" checked value="MODERATOR">
              <label class="form-check-label" for="2">MODERATOR</label>
             </div>
            <?php else: ?>
              <div class="form-check">
              <input name="perms" id="2" type="radio" class="form-check-input" value="MODERATOR">
              <label class="form-check-label" for="2">MODERATOR</label>
             </div>
            <?php endif ?>
            <?php if($user_admin['perms'] == "STAFF"): ?>
              <div class="form-check">
              <input name="perms" id="3" type="radio" class="form-check-input" checked value="STAFF">
              <label class="form-check-label" for="3">STAFF</label>
              </div>
            <?php else: ?>
              <div class="form-check">
              <input name="perms" id="3" type="radio" class="form-check-input" value="STAFF">
              <label class="form-check-label" for="3">STAFF</label>
              </div>
            <?php endif ?>
            </div>
            <button class="btn btn-outline-primary" type="submit">Изменить Аккаунт</button>
        </form>
    </div>
</body>
</html>