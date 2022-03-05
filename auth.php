<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        $website_title = 'Авторизация на сайте';
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
                            <?php 
                                if(empty($_COOKIE['login'])):
                            ?>
                            <h4 class="articles__title">Форма авторизации</h4>
                            <form id="auth-form" class="form">
                                <label class="form__label">
                                    <p class="form__text">Логин</p>
                                    <input type="text" name="login" id="login" class="form__input">
                                </label>

                                <label class="form__label">
                                    <p class="form__text">Пароль</p>
                                    <input type="password" name="pass" id="pass" class="form__input" autocomplete="on">
                                </label>

                                <div id="errorBlock" class="form__message"></div>

                                <button type="submit" id="auth_user" class="btn form__btn">Войти</button>
                            </form>
                            <?php 
                                else:
                            ?>
                            <h2 class="articles__title"><?=$_COOKIE['login']?></h2>
                            <button id="exitBtn" class="btn btn--out">Выйти</button>
                            <?php 
                                endif;
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