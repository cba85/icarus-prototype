<?php
namespace App\Renderer;

use Twig_Loader_Filesystem;
use Twig_Environment;

/**
 * Twig driver
 */
Class Twig extends Driver {

    /**
     * Create and return Twig renderer
     *
     * @param string $folder
     */
    public function __construct($folder, $cache) {
        $loader = new Twig_Loader_Filesystem($folder);
        $this->view = new Twig_Environment($loader, [
            'cache' => $cache
        ]);
    }

}