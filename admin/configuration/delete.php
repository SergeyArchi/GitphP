 <?php
    include '/xampp/htdocs/admin/database/database_order.php';
 $id = $_GET['id'];

 mysqli_query($mysql, "DELETE FROM `auth_table` WHERE `auth_table`.`id` = '$id'");
 header("Location: /admin/admin-users.php")
 ?>