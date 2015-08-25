<?php namespace App\Http\Controllers;

use Acme\Commanding\ValidationCommandBus;

class BaseController extends Controller {

    protected $commandBus;

    public function __construct(ValidationCommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

}