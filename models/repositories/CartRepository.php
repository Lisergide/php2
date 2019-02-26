<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 14:09
 */

namespace app\models\repositories;

use app\models\Cart;

class CartRepository extends Repository {
    public function getTableName(): string {
        return 'cart';
    }

    function getRecordClass() {
        return Cart::class;
    }
}