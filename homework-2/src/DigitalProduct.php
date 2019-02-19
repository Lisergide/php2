<?php
/**
 * Created by PhpStorm.
 * User: liser
 * Date: 11.02.2019
 * Time: 20:27
 */

class DigitalProduct extends AbstractProduct {
    public function __construct($price) {
        parent::__construct($price);
        echo 'Стоимость цифрового товара составляет: ';
        $this->show();
    }

    public function getTotalCost() {
        return $this->price / 2;   // TODO: Implement getTotalCost() method.
    }
}