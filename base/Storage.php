<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 01.03.2019
 * Time: 11:52
 */

namespace app\base;


class Storage {
  private $items = [];

  public function set($key, $object) {
    $this->items[$key] = $object;
  }

  public function get($key) {
    if (!isset($this->items[$key])) {
      $this->items[$key] = App::call()->createComponent($key);
    }
    return $this->items[$key];
  }

}