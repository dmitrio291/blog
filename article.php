<?php
    if(empty($_COOKIE['login'])) {
        header('Location: /reg.php');
        exit();
    }
?>  

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        $website_title = 'Добавление статьи';
        require 'blocks/head.php'; 
    ?>
</head>
<body>
    <div class="page">
        <?php require 'blocks/header.php'; ?>  

        <main class="content">
            <section class="artciles">
                <div class="container">
                    <div class="articles__box">
                        <div class="articles__content">
                            <h4 class="articles__title">Добавление статьи</h4>
                            <form id="add-form" class="form">
                                <label class="form__label">
                                    <p class="form__text">Заголовок статьи</p>
                                    <input type="text" name="title" id="title" class="form__input">
                                </label>

                                <label class="form__label">
                                    <p class="form__text">Вводная часть статьи</p>
                                    <textarea name="intro" id="intro" class="form__input form__input--textarea"></textarea>
                                </label>

                                <label class="form__label">
                                    <p class="form__text">Текст статьи</p>
                                    <textarea name="text" id="text" class="form__input form__input--textarea"></textarea>
                                </label>

                                <div id="errorBlock" class="form__message"></div>

                                <button type="submit" id="article_send" class="btn form__btn">Добавить</button>
                            </form>
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