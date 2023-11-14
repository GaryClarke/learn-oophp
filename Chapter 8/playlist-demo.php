<?php // playlist-demo.php

require_once 'vendor/autoload.php';

$connection = \App\MySQL\Connection::getInstance();
$entityManager = $connection->getEntityManager();

$playlist = $entityManager->getRepository(\App\Entity\Playlist::class)->find(1);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Playlist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1><?= $playlist->getName() ?></h1>
    <h3>Category: <?= $playlist->getCategory() ?></h3>
    <ul>
        <?php foreach ($playlist->getSongs() as $song): ?>

            <li><?= $song->getName() ?> by <?= $song->getArtist()->getName() ?></li>

        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>