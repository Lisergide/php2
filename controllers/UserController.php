<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 13:27
 */

namespace app\controllers;

use app\models\repositories\UserRepository;
use app\base\App;

class UserController extends Controller {

  public function login() {
    App::call()->request->getHttpReferrer();
    $userRepository = new UserRepository();
    $formInfo = $userRepository->getFormInfo();
    $userRepository->ifUserExists($formInfo);
  }

  public function register() {
    App::call()->request->getHttpReferrer();
    $userRepository = new UserRepository();
    $formInfo = $userRepository->getFormInfo();
    if (!$userRepository->ifUserExists($formInfo)) {
      $userRepository->addUserToDb($formInfo);
    };
  }
}