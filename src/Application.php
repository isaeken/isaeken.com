<?php


namespace IsaEken;


use Buki\Router\Router;
use Jenssegers\Blade\Blade;

class Application
{
    /**
     * @var Blade $blade
     */
    public static Blade $blade;

    /**
     * @var Router $router
     */
    public static Router $router;

    /**
     * @var object $config
     */
    public static object $config;

    /**
     * @return void
     */
    public static function run()
    {
        static::$router->run();
    }
}
