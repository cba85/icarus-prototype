<?php
namespace App;

/**
 * Controller
 */
Class Controller {

    /**
     * object
     *
     * @var object
     */
    protected $view;

    /**
     * Constructor
     *
     * @param object $view
     */
    public function __construct($view) {
        $this->view = $view;
    }

    /**
     * Index
     *
     * @return void
     */
    public function index() {
        // Twig
        echo $this->view->render('index.html', []);
        // Laravel Blade
        //echo $this->view->make('index', []);
    }

}