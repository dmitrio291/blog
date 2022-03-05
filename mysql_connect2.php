<?php
    $user = 'admin_user';
    $password = 'useradmin678';
    $db = 'blog';
    $host = 'localhost';
    
    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);
?>