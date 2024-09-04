
<?php 
function e($html) {
    return htmlspecialchars($html, ENT_QUOTES, 'UTF-8', true);
}

function generate_alphabet(){
    $char =[];

    for($a=65 ; $a<=90 ; $a++){
        array_push($char , chr($a));
    }

    return $char;
}

?>