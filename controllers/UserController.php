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

  public function actionIndex() {
    $user = new UserRepository();
    echo $this->render("checkout", ['user' => $user, 'className' => $this->getClassName()]);
  }

  public function actionLogin() {
    App::call()->request->getHttpReferrer();
    $userRepository = new UserRepository();
    $formInfo = $userRepository->getFormInfo();
    $userRepository->ifUserExists($formInfo);
  }

  public function actionRegister() {
    App::call()->request->getHttpReferrer();
    $userRepository = new UserRepository();
    $formInfo = $userRepository->getFormInfo();
    if (!$userRepository->ifUserExists($formInfo)) {
      $userRepository->addUserToDb($formInfo);
    };
  }

  public function actionLogout() {

  }

  public function getClassName() {
    return 'user';
  }

}