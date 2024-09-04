
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

function getCitiesThatStartsWith(string $char){
        global $pdo;

        $alphabet = generate_alphabet();
        if(!in_array($char, $alphabet)){
            return NULL;
        }

        $stmt = $pdo->prepare('SELECT * FROM `cities` WHERE `title` LIKE :title ORDER BY `title` ASC, `zip` ASC');
        $stmt->bindValue(':title', "{$char}%");
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
         foreach($results as $result): 
             echo $result['title']; 
         endforeach; 
        
    }

?>