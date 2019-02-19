<?php
/**
 * Ex.1 (г).
 * User: U_M113S
 * Date: 15.02.2019
 * Time: 10:14
 */

/*1. Создать галерею изображений, состоящую из двух страниц:
### а) Просмотр всех фотографий (уменьшенных копий);
### б) Просмотр конкретной фотографии (изображение оригинального размера)
### в) Все страницы вывода на экран – это twig-шаблоны. Вся логика – на бэкенде.
### г) *Реализовать хранение ссылок и информации по картинкам в БД.*/

// подгружаем и активируем авто-загрузчик Twig-а
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    $dbh = mysqli_connect('localhost', 'root', '', 'gallery');
    // формируем SELECT запрос
    // в результате каждая строка таблицы будет объектом
    $sql = 'SELECT id, url, size, name FROM gallery';
    $sth = mysqli_query($dbh, $sql);
    while ($row = mysqli_fetch_assoc($sth)) {
        $img[] = $row;
    }

    // указываем где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');

    // инициализируем Twig
    $twig = new Twig_Environment($loader);

    // подгружаем шаблон
    $template = $twig->loadTemplate('gallery-2.tmpl');

    // передаем в шаблон переменные и значения
    // выводим сформированное содеражание
    echo $template->render(array(
        'img' => $img
    ));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}