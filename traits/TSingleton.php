<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 14:26
 */

namespace app\traits;


trait TSingleton {

    private static $instance = null;

    private function __construct() {
    }

    private function __clone() {
    }

    private function __wakeup() {
    }

    public static function getInstance() {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

}