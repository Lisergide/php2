<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 01.03.2019
 * Time: 11:39
 */

namespace app\base;

use app\traits\TSingleton;
use app\services\renderers\TemplateRenderer;


class App {
  use TSingleton;

  public $config;
  public $components;

  public static function call() {
    return static::getInstance();
  }

  public function run($config) {
    $this->config = $config;
    $this->components = new Storage();
    $this->runController();
  }

  public function runController() {
    $controllerName = App::call()->request->getControllerName() ?: $this->config['defaultController'];
    $actionName = App::call()->request->getActionName();

    $controllerClass = $this->config['controllerNamespace'] . ucfirst($controllerName) . "Controller";
    $defaultControllerClass = $this->config['controllerNamespace'] . ucfirst($this->config['defaultController']) . "Controller";

    if (class_exists($controllerClass)) {
      $controller = new $controllerClass(new TemplateRenderer());
      $controller->runAction($actionName);
    } else {
      $controller = new $defaultControllerClass(new TemplateRenderer());
      $controller->runAction($actionName);
    }
  }

  public function createComponent($name) {
    if ($params = $this->config['components'][$name]) {
      $class = $params['class'];
      if (class_exists($class)) {
        unset($params['class']);
        $reflection = new \ReflectionClass($class);
        return $reflection->newInstanceArgs($params);
      }
      throw new \Exception("Не определен класс компонента");
    }
    throw new \Exception("Компонент {$name} не найден");
  }

  public function __get($name) {
    return $this->components->get($name);
  }

}