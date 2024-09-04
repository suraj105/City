<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <title>Document</title>
</head>
<body>
    <header>
        <h1> Cities in Germany </h1>
        <h5>This website lets you search cities of germany!</h5>
        <nav>
            <?php foreach($alphabet as $a): ?>
                <a href="index.php" > <?php echo e($a); ?></a>
                <?php endforeach; ?>
        </nav>
    </header>

</body>
</html>