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

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'
    integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=='
    crossorigin='anonymous' />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

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