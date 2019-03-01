<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 01.03.2019
 * Time: 14:52
 */

class ProductTest extends \PHPUnit\Framework\TestCase {
  public function testGetClassName() {
    $product = new \app\models\Product();
    $this->assertEquals('app\models\Product', $product->getClassName());
  }
}