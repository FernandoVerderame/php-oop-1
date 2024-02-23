<?php

//Movie class
require_once __DIR__ . '/models/Movie.php';

//Movies list
require __DIR__ . '/data/movies.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
</head>
<body>
    <section id="movies">
        <?php foreach ($movies as $movie) : ?>
            <article>
                <h2><?= $movie->title ?></h2>
                <p><?= $movie->getAbstract() ?></p>
                <div><?= $movie->language ?></div>
                <div><?= $movie->vote ?></div>
                <address><?= $movie->director->getFullName() ?></address>
            </article>
        <?php endforeach; ?>
    </section>
</body>
</html>