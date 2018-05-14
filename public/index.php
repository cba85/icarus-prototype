<?php
// Autoload PSR-4
require __DIR__ . '/../vendor/autoload.php';

// Template Engine choice
require_once(__DIR__ . '/../config.php');

// Template Engine Renderer
$driver = new App\Renderer\Driver($config);
$view = $driver->renderer();

// Routes and dispatcher
require_once(__DIR__ . '/../src/routes.php');
require_once(__DIR__ . '/../src/dispatcher.php');
