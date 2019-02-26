<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 16:06
 */

namespace app\services;


class Autoloader {

  public $fileExtension = ".php";

  public function loadClass($className) {
    $className = str_replace(["app\\", "\\"], [ROOT_DIR, "/"], $className);
    $className .= $this->fileExtension;

    if (file_exists($className)) {
      include $className;
    }
  }

}