<?php
include '/xampp/htdocs/admin/database/database_order.php';
$login = filter_var(trim($_COOKIE['user_user']),
FILTER_SANITIZE_STRING);
$id_user = filter_var(trim($_COOKIE['id_user']),
FILTER_SANITIZE_STRING);
$were = filter_var(trim($_POST['were']),
FILTER_SANITIZE_STRING);
$status = "Очікує черги";
$info_zam = filter_var(trim($_POST['info_zam']),
FILTER_SANITIZE_STRING);
$prise = filter_var(trim($_POST['prise']),
FILTER_SANITIZE_STRING);
$kvad = filter_var(trim($_POST['kvad']),
FILTER_SANITIZE_STRING);

if($info_zam <= 6){
    echo "Введіть хоча б коротку інформацію про об'єкт";
}else if($were <= 8){
    echo "Введіть будь-ласка адресу (Бажано уточнювати всі нюанси)";
}else if($kvad <= 0){
    echo "Введіть хоча б приблизно квадратуру об'єкту , це допоможе підрахувати";
}

    mysqli_query($mysql, "INSERT INTO `zamovlenya` (`id_user`, `type`, `were`, `status`, `info_zam`, `login_user`, `prise`) 
    VALUES ('$id_user', '$type', '$were', '$status', '$info_zam', '$login', '$prise')");  

$mysql->close();
header('Location: zamovlenya.php');

?>