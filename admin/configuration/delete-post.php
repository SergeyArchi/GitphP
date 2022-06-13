<?php
 include '/admin/database/database_order.php';
 $id = $_GET['id'];

 mysqli_query($mysql, "DELETE FROM `send_email` WHERE `send_email`.`id` = '$id'");
 header("Location: /admin/menu.php")
 ?>