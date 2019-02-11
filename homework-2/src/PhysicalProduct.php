<?php
/**
 * Created by PhpStorm.
 * User: liser
 * Date: 11.02.2019
 * Time: 20:48
 */

class PhysicalProduct extends AbstractProduct {
    public function __construct($price) {
        parent::__construct($price);
        echo 'Стоимость физического товара составляет: ';
        $this->show();
    }

    public function getTotalCost() {
        return $this->price;  // TODO: Implement getTotalCost() method.
    }
}