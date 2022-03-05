<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        $website_title = 'Контакты';
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
                            <h4 class="articles__title">Обратная связь</h4>
                            <form id="send-form" class="form">
                                <label class="form__label">
                                    <p class="form__text">Ваше имя</p>
                                    <input type="text" name="username" id="username" class="form__input">
                                </label>

                                <label class="form__label">
                                    <p class="form__text">Email</p>
                                    <input type="text" name="email" id="email" class="form__input">
                                </label>

                                <label class="form__label">
                                    <p class="form__text">Сообщение</p>
                                    <textarea name="mess" id="mess" class="form__input"></textarea>
                                </label>

                                <div id="errorBlock" class="form__message"></div>

                                <button type="submit" id="mess_send" class="btn form__btn">Отправить сообщение</button>
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