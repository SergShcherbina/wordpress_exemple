<?php
//настраиваем авто подключение стилей ХУК wp_enqueue_scripts, вторым аргументом название функуии 
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');

//добавленип логотипа на страницу
add_theme_support('custom-logo');

//добавление кн 'Изображение записи' в 'Записи'
add_theme_support('post-thumbnails');

//создаеи функию по подключению стилей с названием из второго аргумента выше
function childhood_styles(){
    //wp_enqueue_style стандартная ф-я, 1арг название, 2арг путь к корневому файлу
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );

    //при подключении с cdn вторым параметрои просто передаем url адрес
    //wp_enqueue_style( 'animate-style', 'url' );
};

//создаеи функию по подключению стилей с названием из второго аргумента выше
function childhood_scripts(){
    //подключаеи скрипты, 1арг кастомное название, 2арг путь к скриптам, 3-массив зависимостей напр jquery, 4-версия скрипта , 5-где подключить скрипт в footer = true
    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
};

?>