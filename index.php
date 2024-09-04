<?php 

require __DIR__ . '/inc/all.php';

$alphabet = generate_alphabet();

$char = (string)($_GET['char'] ?? 'A') ;

$cities = getCitiesThatStartsWith($char)['title'];

require __DIR__ . '/views/index.view.php';

?>