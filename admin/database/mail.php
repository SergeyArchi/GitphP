<?php
    include 'database_order.php';
    $messages = mysqli_query($mysql, "SELECT * FROM `send_email`");
    $messages = mysqli_fetch_all($messages);
?>