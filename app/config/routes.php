<?php

declare(strict_types=1);

use app\controllers\ApiExampleController;
use app\controllers\ExampleController;
use app\controllers\HomeController;
use app\controllers\AboutController;
use app\controllers\CatalogController;
use app\controllers\ContactController;
use app\controllers\BlogController;

// Home page
Flight::route('/', [HomeController::class, 'index']);

// About page
Flight::route('/sobre', [AboutController::class, 'index']);

// Catalog routes
Flight::route('/catalogo', [CatalogController::class, 'index']);
Flight::route('/catalogo/produto/@id', [CatalogController::class, 'show']);

// Contact routes
Flight::route('GET /contato', [ContactController::class, 'index']);
Flight::route('POST /contato', [ContactController::class, 'submit']);

// Blog routes
Flight::route('/blog', [BlogController::class, 'index']);
Flight::route('/blog/@id', [BlogController::class, 'show']);

// Example routes (keep for reference)
// Flight::route('/hello-world/@name', [ExampleController::class, 'helloWorld']);

// API routes
Flight::group('/api', function () {
    Flight::route('GET /users', [ApiExampleController::class, 'getUsers']);
    Flight::route('GET /users/@id', [ApiExampleController::class, 'getUser']);
});