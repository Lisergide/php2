<?php
/**
 * Ex.1 (a-в).
 * User: U_M113S
 * Date: 15.02.2019
 * Time: 11:18
 */

/*1. Создать галерею изображений, состоящую из двух страниц:
### а) Просмотр всех фотографий (уменьшенных копий);
### б) Просмотр конкретной фотографии (изображение оригинального размера)
### в) Все страницы вывода на экран – это twig-шаблоны. Вся логика – на бэкенде.
### г) *Реализовать хранение ссылок и информации по картинкам в БД.
*/

$img = array(
    'img1' => 'img/img1.jpg',
    'img2' => 'img/img2.jpg',
    'img3' => 'img/img3.jpg',
    'img4' => 'img/img4.jpg',
    'img5' => 'img/img5.jpg',
    'img6' => 'img/img6.jpg',
    'img7' => 'img/img7.jpg',
    'img8' => 'img/img8.jpg',
    'img9' => 'img/img9.jpg',
);

// подгружаем и активируем авто-загрузчик Twig-а
include 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    // указываем где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');

    // инициализируем Twig
    $twig = new Twig_Environment($loader);

    // подгружаем шаблон
    $template = $twig->loadTemplate('gallery-1.tmpl');

    // передаем в шаблон переменные и значения
    // выводим сформированное содеражание
    echo $template->render(array(
        'img' => $img
    ));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}