<?php
namespace App\Renderer;
use Exception;
use App\Renderer\Twig as Twig;
use App\Renderer\Blade as Blade;

/**
 * Template Engine Renderer
 */
Class Driver {

     /**
     * Template Engine
     *
     * @var string
     */
    protected $engine;

    /**
     * Cache folder
     *
     * @var string
     */
    protected $cache;

    /**
     * View files folder
     *
     * @var string
     */
    protected $folder;

    /**
     * Renderer
     *
     * @var object
     */
    protected $view;

    /**
     * Constructor
     *
     * @param string $driver
     */
    public function __construct($config) {
        $this->engine = $config['engine'];
        $this->folder = $config['folder'];
        $this->cache = $config['cache'];
        $this->load();
    }

    /**
     * Loader
     *
     * @return void
     */
    public function load() {
        switch ($this->engine) {
            case 'twig':
                $twig = new Twig($this->folder, $this->cache);
                $this->view = $twig->renderer();
                break;
            case 'blade':
                $blade = new Blade($this->folder, $this->cache);
                $this->view = $blade->renderer();
                break;

            default:
                throw new Exception('This template engine is not supported');
                break;
        }
    }

    /**
     * Renderer
     *
     * @return object
     */
    public function renderer() {
        return $this->view;
    }

}