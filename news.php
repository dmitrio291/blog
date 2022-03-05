<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        require_once 'mysql_connect.php'; 
                                
        $sql = 'SELECT * FROM `articles` WHERE `id` = :id';
        $query = $pdo->prepare($sql);
        $query->execute(['id' => $_GET['id']]);

        $article = $query->fetch(PDO::FETCH_OBJ);

        $website_title = $article->title;
        require 'blocks/head.php'; 
    ?> 
</head>
<body>
    <div class="page">
        <?php require 'blocks/header.php'; ?>  

        <main class="content content--padding">
            <section class="artciles">
                <div class="container">
                    <div class="articles__box-news">
                        <div class="articles__content">
                            <div class="articles__article">
                                <h1 class="articles__title"><?=$article->title?></h1>
                                <p class='articles__author'><b>Автор статьи:</b> <mark><?=$article->author?></mark></p>
                                <?php 
                                    $date = date('d ', $article->date);
                                    $array = ['Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря'];
                                    $date .= $array[date('n', $article->date) - 1];
                                    $date .= date(' H:i', $article->date);
                                ?>
                                <p class='articles__author'><b>Время публикации:</b> <u><?=$date?></u></p> 
                                <p>
                                    <?=$article->intro?>
                                    <br><br>
                                    <?=$article->text?>
                                </p>
                            </div>

                            <h3 class="articles__title-second">Комментарии</h3>

                            <form action="/news.php?id=<?=$_GET['id']?>" method="post" class="form form__articles">
                                <label class="form__label">
                                    <p class="form__text">Ваше имя</p>
                                    <input type="text" name="username" value="<?php if(isset($_COOKIE['login'])) echo $_COOKIE['login'] ?>" id="username" class="form__input">
                                </label>

                                <label class="form__label">
                                    <p class="form__text">Сообщение</p>
                                    <textarea name="message" id="message" class="form__input" autocomplete="on"></textarea>
                                </label>

                                <button type="submit" id="mess_send" class="btn form__btn">Добавить комментарий</button>
                            </form>

                            <?php
                                if(!empty($_POST['username']) && !empty($_POST['message'])) {
                                    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
                                    $message = trim(filter_var($_POST['message'], FILTER_SANITIZE_STRING));

                                    $sql = 'INSERT INTO comments(name, message, article_id) VALUES(?, ?, ?)';
                                    $query = $pdo->prepare($sql);
                                    $query->execute([$username, $message, $_GET['id']]);
                                }

                                $sql = 'SELECT * FROM `comments` WHERE `article_id` = :id ORDER BY `id` DESC';
                                $query = $pdo->prepare($sql);
                                $query->execute(['id' => $_GET['id']]);
                                $comments = $query->fetchAll(PDO::FETCH_OBJ);

                                foreach($comments as $comment) {
                                    echo "
                                        <div class='articles__info'>
                                            <h4 class='articles__title-info'>$comment->name</h4>
                                            <p class='articles__text-info'>$comment->message</p>
                                        </div>
                                        ";
                                }
                            ?>
                        </div>
                        <?php require 'blocks/aside.php'; ?>  
                    </div>
                </div>
            </section>
        </main>

        <?php require 'blocks/footer.php'; ?>  
    </div>
    <script src="js/script.js"></script>
</body>
</html>