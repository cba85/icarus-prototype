# Icarus prototype

Fast prototyping for future PHP applications.

A simple PHP application configured with FastRoute, a simple and fast router, and template engines.

Create a prototype of the interface of your future application  using your favorite template render engine: Twig or Laravel Blade are actually supported.

When it's done, just move your template files in your favorite framework: Symfony, Laravel, SlimPHP...And start development!

## Dependencies

- [FastRoute](https://github.com/nikic/FastRoute)
- [Twig](https://twig.symfony.com)
- [Laravel Blade (jenssegers)](https://github.com/jenssegers/blade)

## Install

Via Composer

``` bash
$ composer require cba85/icarus-prototype
```

## Configuration

Choose the template render engine you will use in your project (the template engine of the framework you have choose for your project).

In `config.php` file, specify the template engine you want to use (Twig or Laravel Blade are actually supported):

```php
'engine' => 'twig', // or 'engine' => 'blade'
```

## Usage

In `src/Controller.php` file, an `index` method for `/` is created. Just use the render function of the template engine you previously chose:

```php
public function index() {
    // Twig
    echo $this->view->render('index.html', []);
    // Laravel Blade
    //echo $this->view->make('index', []);
}
```

For more information about the rendering of template files, see:

- [Twig documentation](https://twig.symfony.com/doc/2.x/api.html)
- [Laravel Blade documentation](https://github.com/jenssegers/blade)

## Informations

- Cache files are located in `tmp/` folder. You can change this folder in `config.php` file.
- It's possible to disable caching in Twig in `config.php` file:
    ```php
    'cache' => false,
    ```
- Twig and Blade views example folder are located in `views/example/`.

## Routes

Create routes in `src/routes.php` file:

```php
$r->addRoute('GET', '/', [new App\Controller($view), 'index']);
```

See [FastRoute documentation](https://github.com/nikic/FastRoute) for more information.

## Testing

Tests unavailable.

## Credits

- [Clément Barbaza](https://github.com/cba85)