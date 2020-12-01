<?php
namespace App\Core;

class Controller
{
    public function view($path, $data = [])
    {
        require "../app/views/{$path}.php";
    }

}