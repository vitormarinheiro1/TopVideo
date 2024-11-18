<?php

use Alura\Mvc\Entity\Video;
use Alura\Mvc\Repository\VideoRepository;

require "Connection.php";

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if($url == false) {
    header('Location: /?sucesso=0');
    exit();
}

$titulo = filter_input(INPUT_POST, 'titulo');
if ($titulo === false) {
    header('Location: /?sucesso=0');
    exit();
}

// $sql = 'INSERT INTO videos (url, title) VALUES (?, ?)';
// $statement = $pdo->prepare($sql);
// $statement->bindValue(1, $url);
// $statement->bindValue(2, $titulo);

$repository = new VideoRepository($pdo);


if ($repository->add(new Video($url, $titulo)) === false) {
    header('Location: /?sucesso=0');
} else {
    header('Location: /?sucesso=1');
}
