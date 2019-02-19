<?php
/**
 * Created by PhpStorm.
 * User: liser
 * Date: 11.02.2019
 * Time: 21:02
 */

/*1. Создать структуру классов ведения товарной номенклатуры.
а) Есть абстрактный товар.
б) Есть цифровой товар, штучный физический товар и товар на вес.
в) У каждого есть метод подсчета финальной стоимости.
г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза.
   У штучного товара обычная стоимость, у весового – в зависимости от продаваемого
   количества в килограммах. У всех формируется в конечном итоге доход с продаж.
д) Что можно вынести в абстрактный класс, наследование?*/

include "src/AbstractProduct.php";
include "src/DigitalProduct.php";
include "src/PhysicalProduct.php";
include "src/WeightProduct.php";

$product1 = new DigitalProduct(750);
$product2 = new PhysicalProduct(750);
$product3 = new WeightProduct(69, 9);


//2. *Реализовать паттерн Singleton при помощи traits.

//Простой конвертер из рублей в $.
trait myTrait {
    public function converter($money) {
        echo $money . ' руб. это ' . $money * 0.015 . '$';
    }
}

class Singleton {
    protected static $_instance;

    private function __construct() {
    }

    public static function getInstance() {
        if (self::$_instance === null) {
            self::$_instance = new Singleton;
        }
        return self::$_instance;
    }

    use myTrait;
}

$obj = Singleton::getInstance();
$obj->converter(1000);
