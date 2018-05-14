<?php
namespace App\Renderer;

use Jenssegers\Blade\Blade as Laravel;

/**
 * Laravel Blade driver
 */
Class Blade extends Driver {

    /**
     * Create and return Laravel Blade renderer
     *
     * @param string $folder
     * @param string $cache
     */
    public function __construct($folder, $cache) {
        $this->view = new Laravel($folder, $cache);
    }

}