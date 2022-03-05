<?php 
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

    $error = '';

    if( strlen($username) <= 3 ) $error = 'Введите имя. Минимум 3 символа';
    else if( strlen($email) <= 3 ) $error = 'Введите email. Минимум 3 символа';
    else if( strlen($login) <= 3 ) $error = 'Введите логин. Минимум 3 символа';
    else if( strlen($pass) <= 3 ) $error = 'Введите пароль. Минимум 3 символа';

    if($error !== '') {
        echo $error;
        exit();
    }

    $hash = 'glormvsorpgdmberGKfgdsbdbrrkz';
    $pass = md5($pass . $hash);

    require_once '../mysql_connect.php';

    $sql = 'INSERT INTO users(name, email, login, password) VALUES(?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$username, $email, $login, $pass]);

    echo 'Готово';
?>