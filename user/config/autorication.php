<?php
$login = filter_var(trim($_POST["login"]),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST["pass"]),FILTER_SANITIZE_STRING);
$pass = md5($pass."asferge1112324");

$mysql = new mysqli('localhost','root','','auth');
$result=$mysql->query("SELECT * FROM `auth_user` WHERE `login`='$login'AND`pass`='$pass'");
$user=$result->fetch_assoc();

if(count($user) == 0){
    echo "Данного пользователя не существует!";
    exit();
}
setcookie('user_user', $user['login'], time() + 3600);
setcookie('lname_user', $user['lname'], time() + 3600);
setcookie('fname_user', $user['fname'], time() + 3600);
setcookie('oname_user', $user['otche'], time() + 3600);
setcookie('email_user', $user['email'], time() + 3600);
setcookie('id_user', $user['id'], time() + 3600);

$mysql->close();

header("Location: index.php");

?>