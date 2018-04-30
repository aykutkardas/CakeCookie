<?php

require '../src/CakeCookie.php';

$CCokie = new CakeCookie;

# setCookie([data:Array, [time:Array]])
$CCokie->setCookie(
    array(
        'name' => 'John', 
        'age' => 26, 
        'list' => ['php', 'js', 'css']
    ),
    array(
        'month' => 3,  # year|month|day|hour|minute|second
        'second' => 30
        )
);

echo $CCokie->getCookie('name');

echo $CCokie->getCookie('age');

print_r($CCokie->getCookie('list'));

# Remove 'list' cookie
$CCokie->removeCookie('list');

# Remove 'all' cookie
$CCokie->removeCookie();