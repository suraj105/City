<?php

header("Content-Type: text/plain");


$array = [
    'xyz' => 'Hallo Welt'
];

extract($array);

var_dump($xyz);