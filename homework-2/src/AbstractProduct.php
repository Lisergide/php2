<?php
/**
 * Created by PhpStorm.
 * User: liser
 * Date: 10.02.2019
 * Time: 18:03
 */

abstract class AbstractProduct {
    protected $price;

    protected function __construct($price) {
        $this->price = $price;
    }

    abstract protected function getTotalCost();

    public function show() {
        echo $this->getTotalCost() . ' руб.';
        echo '<br/>';
    }
}