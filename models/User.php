<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 15:36
 */

namespace app\models;


class User extends Record {

  public $id;
  public $login;
  public $password;

  public function __construct($login = null, $password = null, $id = null) {
    $this->id = $id;
    $this->login = $login;
    $this->password = $password;
  }
}