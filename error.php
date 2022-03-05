<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        $website_title = 'Ошибка 404';
        require 'blocks/head.php'; 
    ?>
</head>
<body>
    <div class="page">
        <?php require 'blocks/header.php'; ?>  

        <section class="error-page">
            <div class="container">
                <h1 class="error-page__title">Такой страницы не существует, перейдите <a class="error-page__link" href="/">на главную</a></h1>
            </div>
        </section>

        <?php require 'blocks/footer.php'; ?>  
    </page>
</body>
</html>