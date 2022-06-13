<?php
    include 'database_order.php';
    $zm = mysqli_query($mysql, "SELECT * FROM `zamovlenya`");
    $zm = mysqli_fetch_all($zm);
?>