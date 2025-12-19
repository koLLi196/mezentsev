<?php
/**
 * Функция для подключения стилевых файлов темы
 */
function theme_files() {
    /**
     * wp_register_style() — регистрирует стиль, но не подключает его сразу.
     *   'theme_reset' — идентификатор стиля
     *   get_template_directory_uri() . '/css/reset.css' — URL файла стиля
     *   array() — зависимости
     *   filemtime(...) — версия файла, основанная на времени его последнего изменения
     */
    wp_register_style(
        'theme_reset',
        get_template_directory_uri() . '/css/reset.css',
        array(),
        filemtime(get_template_directory() . '/css/reset.css')
    );

    wp_register_style(
        'theme_main',
        get_template_directory_uri() . '/css/main.css',
        array(),
        filemtime(get_template_directory() . '/css/main.css')
    );

    /**
     * Подключаем зарегистрированный стиль на сайте
     */
    wp_enqueue_style('theme_reset');
    wp_enqueue_style('theme_main');
}

/**
 * Приоритет 1 — очень раннее выполнение
 */
add_action('wp_enqueue_scripts', 'theme_files', 1);



/**
 * Функция для изменения длины автоматического анонса
 * @param int $length — текущая длина анонса
 * @return int — новая длина
 */
function custom_excerpt_length($length) {
    return 20; // Возвращаем желаемую длину анонса в словах
}

/**
 * Подключаем функцию к фильтру 'excerpt_length'
 * Приоритет 999 — выполняется поздно, чтобы переопределить другие возможные изменения
 */
add_filter('excerpt_length', 'custom_excerpt_length', 999);