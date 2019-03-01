<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 13:32
 */

namespace app\interfaces;


interface IRenderer {

  function render($template, $params = []);

}