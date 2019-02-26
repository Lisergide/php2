<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 14:24
 */

namespace app\interfaces;


interface IDb {
    function execute(string $sql, array $params = []);
}