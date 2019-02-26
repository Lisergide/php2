<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 15:40
 */

namespace app\models\repositories;

use app\models\User;

class UserRepository extends Repository {

  public function getTableName(): string {
    return 'users';
  }

  function getRecordClass() {
    return User::class;
  }
}