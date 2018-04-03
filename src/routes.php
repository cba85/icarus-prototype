<?php
/**
 * Route dispatcher
 */

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) use ($twig) {

    $r->addRoute('GET', '/', [new App\Controller($twig), 'index']);

});