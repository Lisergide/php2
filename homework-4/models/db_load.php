<?php
/**
 * Created by PhpStorm.
 * User: lis
 * Date: 19.02.2019
 * Time: 14:02
 */

include 'db.php';

$ajaxData = $_POST['ajaxData'];

$query = "SELECT * FROM goods order by id desc LIMIT {$ajaxData}, 3";
$res = mysqli_query($link,$query);

$goods = array();
while ($row = mysqli_fetch_assoc($res)) {
    $goods[] = $row;
}

echo json_encode($goods);