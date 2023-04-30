<?php

class View
{
    function __construct()
    {
    }

    function render($nombre)
    {
        require 'views/' . $nombre . '.php';
    }

    function render2($nombre, $view)
    {
        require 'views/' . $nombre . '/' . $view . '.php';
    }
}