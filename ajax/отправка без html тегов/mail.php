<?php
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $text = "Имя: $username\n\nEmail: $email\n\nСообщение: ";
    $mess = $text . trim(filter_var($_POST['mess'], FILTER_SANITIZE_STRING));

    $error = '';

    if( strlen($username) <= 3 ) $error = 'Введите имя. Минимум 3 символа';
    else if( strlen($email) <= 3 ) $error = 'Введите email. Минимум 3 символа';
    else if( strlen($mess) <= 10 ) $error = 'Введите само сообщение. Минимум 10 символов';

    if($error !== '') {
        echo $error;
        exit();
    }

    $my_email = 'dmitrydev91@gmail.com';
    $from = 'myemail@s219839.h1n.ru';
    $subject = '=?utf-8?B?'.base64_encode('Новое сообщение с сайта').'?=';
    $headers = "MIME-Version: 1.0 From: $from Reply-to: $my_email Content-type: text/plain; charset=UTF-8";

    mail($my_email, $subject, $mess, $headers);

    echo 'Готово';
?>