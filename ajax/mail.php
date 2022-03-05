<?php
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $fromText = '<p> Имя: ' . $username . '</p>' . '<p> Email: ' . $email . '</p>' . '<p> Сообщение: ';
    $mess = $fromText . trim(filter_var($_POST['mess'], FILTER_SANITIZE_STRING)) . '</p>';

    $error = '';

    if( strlen($username) <= 3 ) $error = 'Введите имя. Минимум 3 символа';
    else if( strlen($email) <= 3 ) $error = 'Введите email. Минимум 3 символа';
    else if( strlen($mess) <= 10 ) $error = 'Введите само сообщение. Минимум 10 символов';

    if($error !== '') {
        echo $error;
        exit();
    }

    $my_email = 'dikck.dmitry@yandex.ru';
    $from = 'myemail@s219839.h1n.ru';
    $subject = '=?utf-8?B?'.base64_encode('Новое сообщение с сайта').'?=';
    $headers = "MIME-Version: 1.0\r\nFrom: $from\r\nReply-to: $my_email\r\nContent-type: text/html; charset=UTF-8\r\n";

    mail($my_email, $subject, $mess, $headers);

    echo 'Готово';
?>