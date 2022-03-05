<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        $website_title = 'Блог на PHP';
        require 'blocks/head.php'; 
    ?> 
</head>
<body>
    <div class="page">
        <?php require 'blocks/header.php'; ?>  

        <main class="content">
            <section class="about">
                <div class="container">
                    <h1 class="about__title">Блог на PHP + MYSQL</h1>
                    <p>Добро пожаловать на блог для размещения своих статей на любую тематику. На этом блоге вы можете добавлять статьи, регистрироваться и авторизовываться. Статьи могут добавлять только зарегестрированные пользователи, которые есть в базе данных. Если вы еще не зарегестрированый пользователь, то зарегестрируйтесь и у вас появиться возможность добавлять свои статьи. После регистрации появитсья в шапке пункт меню "Добавить статью", по которому нужно будет перейти, где появиться форма для добавления статей, а также повиться кнопка "Кабинет пользователя", где будет отображаться информация об авторизованном пользователе. После авторизации на главной будут отображаться все добавленные статьи. Вы можете видеть не только свои статьи, но и чужие. Переходить на любую из них и читать. Также есть возможность добавлять комментарий к какой-то статье. У полей форм есть валидация на пустоту и на минимальное количество вводимых символов. На странице "Контакты" вы может отправить сообщение на почту. Реализована страница "Не найдена - 404".</p>
                </div>
            </section>    

            <section class="artciles">
                <div class="container">
                    <div class="articles__box">
                        <div class="articles__content">
                            <?php 
                                require_once 'mysql_connect.php'; 
                                
                                $sql = 'SELECT * FROM `articles` ORDER BY `date` DESC';
                                $query = $pdo->query($sql);
                                while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    echo "
                                        <h2 class='articles__title'>$row->title</h2>
                                        <p class='articles__text'>$row->intro</p>
                                        <p class='articles__author'><b>Автор статьи:</b> <mark>$row->author</mark></p>
                                        <a href='/news.php?id=$row->id' title='$row->title'>
                                            <button class='btn articles__btn'>Прочитать больше</button>
                                        </a>
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