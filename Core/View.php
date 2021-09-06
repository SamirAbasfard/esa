<?php


namespace Core;


use Philo\Blade\Blade;

abstract class View
{
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);
        $file = "../App/Views/{$view}.php";
        if (is_readable($file)) {
            require $file;
        } else
            throw new \Exception("{$file} Not Found!");
    }

    public static function blade_render($template , $args = [])
    {
        $views = realpath(__DIR__ . '/../App/Views');
        $cache = realpath(__DIR__ . '/../Storage/views');

        $blade = new Blade($views , $cache);

        return $blade->view()->make($template, $args)->render();
    }
}