<?php
// Autoload PSR-4
require __DIR__ . '/../vendor/autoload.php';

// View cache
$cacheFolder = __DIR__ . '/../tmp';

// Twig
$twigViewsFolder = __DIR__ . '/../views/twig';
$loader = new Twig_Loader_Filesystem($twigViewsFolder);
$twig = new Twig_Environment($loader);

// Laravel Blade
use Jenssegers\Blade\Blade;
$bladeViewsFolder = __DIR__ . '/../views/blade';
$blade = new Blade($bladeViewsFolder, $cacheFolder);

// Views (choose your template engine)
require_once(__DIR__ . '/../config/view.php');

// Routes
require_once(__DIR__ . '/../src/routes.php');

// Dispatcher
require_once(__DIR__ . '/../src/dispatcher.php');