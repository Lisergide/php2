<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 14:21
 */

namespace app\interfaces;


interface IRepository {

    function getOne(int $id);

    function getAll();

    function getTableName(): string;

}