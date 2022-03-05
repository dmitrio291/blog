<header class="header">
    <div class="header__container">
        <h1 class="header__title">PHP блог</h1>
        <nav id="nav" class="nav">
            <ul class="nav__list">
                <li class="nav__item">
                    <a class="nav__link" href="/">Главная</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="/contacts.php">Контакты</a>
                </li>
                <?php 
                    if(!empty($_COOKIE['login'])):
                        echo '
                            <li class="nav__item">
                                <a class="nav__link" href="article.php">Добавить статью</a>
                            </li>
                            ';
                ?>
                <?php 
                    endif;
                ?> 
            </ul>            
        </nav>
        <ul class="auth">
            <?php 
                if(empty($_COOKIE['login'])):
            ?>
            <li class="auth__item">
                <a class="auth__btn" href="/auth.php">Войти</a>
            </li>
            <li class="auth__item">
                <a class="auth__btn" href="/reg.php">Регистрация</a>
            </li>    
            <?php 
                else:
            ?>   
            <li class="auth__item">
                <a class="auth__btn-login" href="/auth.php">Кабинет пользователя</a>
            </li> 
            <?php 
                endif;
            ?>      
        </ul>
        <button id="burger" class="nav__burger">
            <span class="nav__burger-line"></span>
        </button>
    </div>
</header>