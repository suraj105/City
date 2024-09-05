
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

   
function render($path, array $data = []) {
    ob_start();
    extract($data);
    require $path;
    $content = ob_get_contents();
    ob_end_clean();

    $alphabet = generate_alphabet();

    require __DIR__ . '/../views/layouts/main.view.php';
   
}
    

?>