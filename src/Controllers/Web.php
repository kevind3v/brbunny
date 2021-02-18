<?php

namespace App\Controllers;

use App\Core\AppController;

class Web extends AppController
{
    /** Web Constructor */
    public function __construct($router)
    {
        parent::__construct($router);
    }

    /** Index */
    public function index(): void
    {
    }
}
