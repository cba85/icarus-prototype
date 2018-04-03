<?php
/**
 * Route dispatcher
 */

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) use ($view) {

    $r->addRoute('GET', '/', [new App\Controller($view), 'index']);

});