<?php

$config = [
    // Twig or Blade are actually supported
    // You can create your own driver for your favorite template engine
    'engine' => 'twig',
    // View files folder
    'folder' => __DIR__ . '/views/examples/twig', // Twig example
    //'folder' => __DIR__ . '/views/examples/blade', // Blade example
    // Cache folder
    'cache' => __DIR__ . '/tmp',
];