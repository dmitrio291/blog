<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        $website_title = 'Регистрация на сайте';
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
                            <h4 class="articles__title">Форма регистрации</h4>
                            <form id="reg-form" class="form">
                                <label class="form__label">
                                    <p class="form__text">Ваше имя</p>
                                    <input type="text" name="username" id="username" class="form__input">
                                </label>

                                <label class="form__label">
                                    <p class="form__text">Email</p>
                                    <input type="text" name="email" id="email" class="form__input">
                                </label>

                                <label class="form__label">
                                    <p class="form__text">Логин</p>
                                    <input type="text" name="login" id="login" class="form__input">
                                </label>

                                <label class="form__label">
                                    <p class="form__text">Пароль</p>
                                    <input type="password" name="pass" id="pass" class="form__input" autocomplete="on">
                                </label>

                                <div id="errorBlock" class="form__message"></div>

                                <button type="submit" id="reg_user" class="btn form__btn">Зарегестрироваться</button>
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