<?php

namespace App\Core;

use BrBunny\BrPlates\BrPlates;

class AppController
{
    /** @var BrPlates */
    protected $view;

    public function __construct($router)
    {
        $this->view = new BrPlates(BRPLATES);
        $this->view->data(["router" => $router]);
    }

    public function error(array $data): void
    {
        var_dump($data);
    }
}
