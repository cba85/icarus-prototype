# Icarus prototype

Fast prototyping for future PHP applications.

A simple PHP application configured with FastRoute, a simple and fast router, and template engines.

Create a prototype of the interface of your future application  using your favorite template render engine: Twig or Laravel Blade.

When it's done, just move your template files in your favorite framework: Symfony, Laravel, SlimPHP...



## Dependencies

- [FastRoute](https://github.com/nikic/FastRoute)
- [Twig](https://twig.symfony.com)
- [Laravel Blade (jenssegers)](https://github.com/jenssegers/blade)

## Choose your weapon

Choose the template render engine you will use in your project (the template engine of the framework you have choose for your project).

### Usage

E.g. `/`

1. In `config/view.php` file, choose the template engine you want to use (comment the one you don't want to use):

    ```php
    // Views (choose your template engine)
    $view = $twig; // Twig
    $view = $blade; // Laravel Blade
    ```

2. In `index` method in `src/Controller.php` file, use the render function of the template engine you previously chose (comment the one you don't want to use):

    ```php
    public function index() {
        // Twig
        echo $this->view->render('index.html', []);
        // Laravel Blade
        echo $this->view->make('index', []);
    }
    ```

    For more information about the rendering of template files, see:

    - [Twig documentation](https://twig.symfony.com/doc/2.x/api.html)
    - [Laravel Blade documentation](https://github.com/jenssegers/blade)

### Twig

- Twig views folder is located in `views/twig/`.
- *Twig is not configured with cache.*

### Laravel Blade

- Laravel Blade views folder is located in `views/blade/`.
- Cache files are located in `tmp/` folder.

## Routes

Create routes in `src/routes.php` file:

```php
    $r->addRoute('GET', '/', [new App\Controller($view), 'index']);
```

See [FastRoute documentation](https://github.com/nikic/FastRoute) for more information.