<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Используется для сброса кеша браузера при каждой загрузке -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v=<?php echo time(); ?>">

    <!-- Подключает стили, скрипты и другую служебную информацию, добавленную плагинами или темой -->
    <?php wp_head(); ?>
</head>
<body>
    <!-- Основной блок шапки сайта -->
    <header class="header_section">
        <!-- Логотип сайта.-->
        <img class="header_logo" 
             src="<?php echo get_template_directory_uri(); ?>/image/logotype.png" 
             alt="logo" 
             width="80" 
             height="80">
        <!-- Примечание: значения width/height в HTML не требуют единиц измерения -->

        <!-- Ссылка на главную страницу сайта -->
        <nav class="main_menu">
        <a href="<?php echo home_url(); ?>" class="menu-item">Главная</a>

        <!-- Вывод главного навигационного меню темы -->
        <!-- Ожидается, что в functions.php зарегистрировано меню с location = 'header-menu' -->
        
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu', // идентификатор области меню
            'menu_class'     => 'header_nav',  // CSS-класс для <ul> элемента меню
        ));
        ?>
        </nav>
        <?php get_search_form(); ?>
    </header>
</body>
</html>