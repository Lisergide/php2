<?php
/**
 * Created by PhpStorm.
 * User: liser
 * Date: 11.02.2019
 * Time: 20:52
 */

class WeightProduct extends AbstractProduct {
    private $quantity;

    public function __construct($price, $quantity) {
        parent::__construct($price);
        $this->quantity = $quantity;
        echo 'Стоимость ' . $this->getQuantity() . ' кг товара на вес составляет: ';
        $this->show();
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getTotalCost() {
        return $this->price * $this->quantity;   // TODO: Implement getTotalCost() method.
    }
}