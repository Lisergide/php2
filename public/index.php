<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 16:05
 */

include ('../vendor/autoload.php');

$config = include ('../config/main.php');

\app\base\App::call()->run($config);

