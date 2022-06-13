<?php
$login = filter_var(trim($_POST["login"]),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST["pass"]),FILTER_SANITIZE_STRING);
$pass = md5($pass."asferge1112324");

$mysql = new mysqli('localhost','root','','auth');
$result=$mysql->query("SELECT * FROM `auth_table` WHERE `login`='$login'AND`pass`='$pass'");
$user=$result->fetch_assoc();

if(count($user) == 0){
    echo "Данного пользователя не существует!";
    exit();
}
setcookie('user', $user['login'], time() + 3600);
setcookie('lname', $user['lname'], time() + 3600);
setcookie('fname', $user['fname'], time() + 3600);
setcookie('perms', $user['perms'], time() + 3600);
setcookie('id', $user['id'], time() + 3600);

$mysql->close();

header("Location: postindex.php");

?>