<?php

declare(strict_types= 1);

use Alura\Mvc\Controller\DeleteVideoController;
use Alura\Mvc\Controller\EditVideoController;
use Alura\Mvc\Controller\NewVideoController;
use Alura\Mvc\Controller\VideoListController;

return [
    "GET/" => VideoListController::class,
    "GET/novo-video" => VideoListController::class,
    "POST/novo-video" => NewVideoController::class,
    "GET/editar-video" => VideoListController::class,
    "POST/editar-video" => EditVideoController::class,
    "GET/remover-video" => DeleteVideoController::class,
];