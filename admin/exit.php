<?php
    setcookie('user', $user['login'], time() - 3600);
    setcookie('lname', $user['lname'], time() - 3600);
    setcookie('name_first', $user['fname'], time() - 3600);
    setcookie('permission', $user['perms'], time() - 3600);
    setcookie('id', $user['id'], time() - 3600);
    header('Location: /');
?>