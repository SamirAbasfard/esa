<?php

namespace Core;

//use mysql_xdevapi\Exception;

class Router
{
    protected $routes = [];
    protected $ContentRoute = [];

    public function add($route, $action)/*Years\/{Setting}*/
    {

        $route = preg_replace('/^\//', '', $route);
        $route = preg_replace('/\//', '\\/', $route);
        $route = preg_replace('/\{([a-z,A-Z,-]+)\}/', '(?<\1>[a-z,A-Z,0-9,-]+)', $route);
        $route = '/^' . $route . '\/?$/';

        list($Controll['Controller'], $Controll['action']) = explode('@', $action);

        $this->routes[$route] = $Controll;
    }

    public function Matches($url)
    {

        foreach ($this->routes as $route => $ContentRoute) {

            if (preg_match($route, $url, $ismatch)) {

                foreach ($ismatch as $key => $value) {

                    if (is_string($key)) {
                        $ContentRoute['MyContent'][$key] = $value;
                    }
                }
                $this->ContentRoute = $ContentRoute;
                return true;
            }
        }
        return false;
    }

    public function patches($url)
    {
        /* var_dump($url);die();*/
        $url = $this->cut_url_get($url);
        if ($this->Matches($url)) {

            $MyController = $this->ContentRoute['Controller'];
            $MyController = 'App\Controllers\\' . $MyController;

            if (class_exists($MyController)) {
                $MyController_Object = new $MyController();

                $Action_Methode = $this->ContentRoute['action'];
                if (is_callable([$MyController_Object, $Action_Methode])) {
                    $this->ContentRoute['MyContent'] = isset($this->ContentRoute['MyContent']) ? $this->ContentRoute['MyContent'] : [];
                    if($MyController_Object->before() == true) {
                        echo call_user_func_array([$MyController_Object, $Action_Methode], $this->ContentRoute['MyContent']);
                        $MyController_Object->after();
                    }

                } else
                    throw new \Exception("Methode => $Action_Methode in $MyController Controller Not Find !");
            } else
                throw new \Exception("Controller $MyController Not Find !");

        } else {
            throw new \Exception("Not Find Route!",404);
        }
    }

    protected function cut_url_get($url)
    {
        if ($url != '') {
            $cuting = explode('&', $url, 2);
            if (strpos($cuting[0], '=') === false) {
                $url = $cuting[0];
            } else
                $url = '';
        }
        return $url;
    }

    public function getroute()
    {
        return $this->routes;
    }


}
