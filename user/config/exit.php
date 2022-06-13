<?php
    setcookie('user_user', $user['login'], time() - 3600);
    setcookie('lname_user', $user['lname'], time() - 3600);
    setcookie('fname_user', $user['fname'], time() - 3600);
    setcookie('oname_user', $user['otche'], time() - 3600);
    setcookie('email_user', $user['perms'], time() - 3600);
    setcookie('id_user', $user['id'], time() - 3600);
    header('Location: /');
?>