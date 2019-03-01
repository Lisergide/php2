<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 13:57
 */

namespace app\services;

class Request {

  protected $requestString;
  protected $controllerName;
  protected $actionName;
  protected $params;
  protected $httpreferrer;

  protected $pattern = '#(?P<controller>\w+)[/]?(?P<action>\w+)?[/]?[?]?(?P<params>.*)#ui';

  public function __construct() {
    $this->requestString = $_SERVER['REQUEST_URI'];
    $this->parseRequest();
  }

  public function parseRequest() {
    if (preg_match_all($this->pattern, $this->requestString, $matches)) {
      $this->controllerName = $matches['controller'][0];
      $this->actionName = $matches['action'][0];
      $this->params = $_REQUEST;
    };
  }

  public function getControllerName() {
    return $this->controllerName;
  }

  public function getActionName() {
    return $this->actionName;
  }

  public function getParams() {
    return $this->params;
  }

  public function getMethod() {
    return $_SERVER['REQUEST_METHOD'];
  }

  public function getIsAjax() {

  }

  public function getHttpReferrer() {
    $this->httpreferrer = $_SERVER['HTTP_REFERER'];
    return header("Location: $this->httpreferrer");
  }
}