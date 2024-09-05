<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities in Germany</title>
    <link rel="stylesheet" href="./styles/simple.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Cities in Germany</h1>
            <p class="tagline">Explore the statistics of cities, including population and area</p>
        </div>
        <nav>
            <ul class="alphabet-nav">
                <?php foreach($alphabet AS $char): ?>
                    <li>
                        <a href="index.php?<?php echo http_build_query(['char' => $char]); ?>">
                            <?php echo e($char); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <section class="search-section">
        <form method="GET" action="search.php" class="search-form">
            <input type="text" name="search" value="<?php echo e($searchTerm ?? ''); ?>" minlength="3" placeholder="Search cities..." />
            <button type="submit">Search</button>
        </form>
    </section>

    <main>
        <?php echo $content; ?>
    </main>

    <footer>
        <hr />
        <p>&copy; 2024 Cities in Germany. All rights reserved.</p>
    </footer>
</body>
</html>
