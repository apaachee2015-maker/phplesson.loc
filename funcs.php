<?php

defined("MyApp") or die('forbitten');

echo 'Hello !';


function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}


function dd($data)
{
    dump($data);
    die;
}