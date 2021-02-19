<?php

namespace App\Controllers;

use App\Core\Controller;

class Web extends Controller
{
     /** Web Constructor */
    public function __construct($router)
    {
        parent::__construct($router, VIEWS['default'] . "welcome");
    }

    /** Index */
    public function index(): void
    {
        $this->view->show("welcome");
    }
}
