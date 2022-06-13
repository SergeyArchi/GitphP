<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $firstname = filter_var(trim($_POST['firstname']),
    FILTER_SANITIZE_STRING);
    $lastname = filter_var(trim($_POST['lastname']),
    FILTER_SANITIZE_STRING);
    $perms = "STAFF";

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90 ){
        echo "Логин должен быть от 5 до 90-ста символов!";
        exit();
    }else if(mb_strlen($firstname) < 2 || mb_strlen($firstname) > 50){
        echo "Ошибка при вводе данных";
        exit();
    }else if(mb_strlen($lastname) < 2 || mb_strlen($lastname) > 50){
        echo "Ошибка при вводе данных";
        exit();
    }else if(mb_strlen($pass) < 6 || mb_strlen($pass) > 36){
        echo "Ошибка при вводе данных";
        exit();
    }

    $pass = md5($pass."asferge1112324");
    include '/xampp/htdocs/admin/database/database_order.php';
    $mysql->query("INSERT INTO `auth_table` (`fname`, `perms` ,`lname`, `pass`, `login`)
    VALUES('$firstname', '$perms' ,'$lastname', '$pass', '$login')");

    $mysql->close();
    header('Location: /admin/postindex.php');
?>