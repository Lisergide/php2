<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 16:29
 */

$str = null;

foreach ($product as $key => $value) {
  $str .= "<h3>{$product[$key]->name}</h3><br><p>{$product[$key]->description}</p><br>
<p>{$product[$key]->price}$</p><br><a href='cart/del?id={$product[$key]->id}'>удалить</a><hr>";
}

echo $str;