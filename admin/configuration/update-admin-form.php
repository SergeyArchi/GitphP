<?php

include '/admin/database/database_order.php';

$id = $_POST['id'];
$login = $_POST['login'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$perms = $_POST['perms'];

$perms_none = "";
mysqli_query($mysql, "UPDATE `auth_table` SET `login` = '$login', `fname` = '$fname' , `lname` = '$lname' , `perms` = '$perms' WHERE `auth_table`.`id` = '$id'");
header("Location: /admin/admin-users.php")
?>