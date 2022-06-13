<?php
    include 'database_order.php';
    $users_db = mysqli_query($mysql, "SELECT * FROM `auth_user`");
    $users_db = mysqli_fetch_all($users_db);
?>