<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 13:21
 */

return [
  'rootDir' => $_SERVER['DOCUMENT_ROOT'] . "/../",
  'templatesDir' => $_SERVER['DOCUMENT_ROOT'] . "/view/",
  'defaultController' => 'product',
  'controllerNamespace' => "app\\controllers\\",
  'components' => [
    'db' => [
      'class' => \app\services\Db::class,
      'driver' => 'mysql',
      'host' => 'localhost',
      'port' => '3307',
      'login' => 'root',
      'password' => '',
      'database' => 'shop',
      'charset' => 'utf8',
    ],
    'request' => [
      'class' => \app\services\Request::class
    ],
    'renderer' => [
      'class' => \app\services\renderers\TemplateRenderer::class
    ]
  ]
];

