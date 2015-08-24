<?php

namespace App\Http\Controllers;

use Acme\Commanding\CommandBus;

class BaseController extends Controller {

    protected $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

}