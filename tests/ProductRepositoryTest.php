<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 01.03.2019
 * Time: 14:49
 */

use app\models\repositories\ProductRepository;

class ProductRepositoryTest extends \PHPUnit\Framework\TestCase {

  //для запуска данного теста необходимо закомментировать строчку обращения к БД в конструкторе models/repositories/Repository.php
  public function testGetTableName() {
    $userRepository = new ProductRepository();
    $str = $userRepository->getTableName();
    $this->assertEquals('featureditems', $str);
  }
}