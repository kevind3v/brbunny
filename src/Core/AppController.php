<?php

namespace BrBunny\Core;

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
}
