<?php
    $email = filter_var(trim($_POST["email"]),
        FILTER_SANITIZE_STRING);
    $coment = filter_var(trim($_POST["coment"]),
        FILTER_SANITIZE_STRING);
    $PIB = filter_var(trim($_POST["PIB"]),
        FILTER_SANITIZE_STRING);
    $tel = filter_var(trim($_POST["tel"]),
        FILTER_SANITIZE_STRING);
    
    $mysql = new mysqli("localhost","root","","auth");
    $mysql->query("INSERT INTO `send_email` (`PIB`, `tel`, `coment`, `email`)
    VALUES('$PIB', '$tel', '$coment', '$email')");

    $subt = "=?utf-8?B?".base64_encode("Test message")."?=";
    $header = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

    mail('ded__13@ukr.net', $subt, $coment, $header);

    $mysql->close();
    header('Location: /');
?>  