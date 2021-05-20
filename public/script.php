<?php

function print_debug($data){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

$user = 'root';
$pass = '';
$db = 'ch82817_fuel';

$connect = mysqli_connect('localhost', $user, $pass, $db) or die("Don't connect");
$query = mysqli_query($connect, "SELECT `code`, `id` FROM `price__brand`");

$brands_array = array();

while($row = mysqli_fetch_array($query)){
    $brands_array[] = array($row['code'], $row['id']);
}
foreach($brands_array as $brand){
    
    $query = mysqli_query($connect, "SELECT * FROM `content` WHERE `path` = '/remont/remont-akpp-{$brand[0]}/'");
    if($row = mysqli_fetch_array($query)){
    $update_query = mysqli_query($connect, "UPDATE `content` SET `page_type` = 'brand', `brand_id` = {$brand[1]} WHERE `id` = {$row['id']}");
    }else{
        $query1 = mysqli_query($connect, "SELECT * FROM `content` WHERE `path` = '/remont/{$brand[0]}/'");
            if($row = mysqli_fetch_array($query1)){
            $update_query = mysqli_query($connect, "UPDATE `content` SET `page_type` = 'brand', `brand_id` = {$brand[1]} WHERE `id` = {$row['id']}");
            }
    }
}

