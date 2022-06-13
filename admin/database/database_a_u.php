<?php
    include 'database_order.php';
    $users_admin_db = mysqli_query($mysql, "SELECT * FROM `auth_table`");
    $users_admin_db = mysqli_fetch_all($users_admin_db);
?>