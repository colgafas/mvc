<?php

namespace App\Core;

use App\Controllers\HomeController;
use App\Controllers\StoresController;

require_once 'Controller.php';

class App
{
    protected $controller = StoresController::class;
    protected $method = 'create';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        if (isset($url[0]) && class_exists($this->className($url[0]))) {
            $this->controller = $this->className($url[0]);
            unset($url[0]);
        }
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    protected function parseUrl()
    {
        if (isset($_SERVER['REQUEST_URI'])) {

            $url = explode('/', filter_var(trim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL));
            $url = array_filter($url, function($value) {
                return $value != "";
            });

            return $url;
        }
    }

    protected function className($segment)
    {
        $controllerName = mb_strtolower($segment);
        $controllerName[0] = mb_strtoupper($controllerName[0]);

        return "App\\Controllers\\{$controllerName}Controller";
    }

}