<?php
namespace App;

Class Controller {

    /**
     * Twig object
     *
     * @var Twig
     */
    protected $twig;

    /**
     * Constructor
     *
     * @param Twig $twig
     */
    public function __construct($twig) {
        $this->twig = $twig;
    }

    /**
     * Index
     *
     * @return void
     */
    public function index() {
        echo $this->twig->render('index.html', []);
    }

}