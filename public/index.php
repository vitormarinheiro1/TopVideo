<?php

declare(strict_types=1);

use Alura\Mvc\Controller\Error404Controller;
use Alura\Mvc\Repository\VideoRepository;

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../Connection.php';

$videoRepository = new VideoRepository($pdo);

$routes = require_once __DIR__ . "/../config/routes.php";

$pathInfo = $_SERVER['PATH_INFO'] ?? "/";
$httpMethod = $_SERVER['REQUEST_METHOD'];

$key = "$httpMethod|$pathInfo";
if (array_key_exists($key, $routes)) {
    $controllerClass = $routes["$httpMethod|$pathInfo"];

    $controller = new $controllerClass($videoRepository);
} else {
    $controller = new Error404Controller();
}

/** @var \Alura\Mvc\Controller\Controller $controller */
$controller->processaRequisicao();
