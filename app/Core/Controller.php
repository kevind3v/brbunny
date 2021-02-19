<?php

namespace App\Core;

use BrBunny\BrPlates\BrPlates;

class Controller
{
    /** @var BrPlates */
    protected $view;

    public function __construct($router, string $view = VIEWS['default'])
    {
        $this->view = new BrPlates($view);
        $this->view->data(["router" => $router]);
    }

    public function error(array $data): void
    {
        var_dump($data);
    }
}
