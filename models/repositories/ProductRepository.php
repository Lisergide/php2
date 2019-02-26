<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 15:38
 */

namespace app\models\repositories;

use app\models\Product;

class ProductRepository extends Repository {

  public function getTableName(): string {
    return 'products';
  }

  public function getRecordClass() {
    return Product::class;
  }
}