<?php

namespace Acme\Commanding;

use Illuminate\Contracts\Foundation\Application;

class CommandBus {

    protected $app;

    protected $commandTranslator;

    public function __construct(Application $app, CommandTranslator $commandTranslator)
    {
        $this->app = $app;
        $this->commandTranslator = $commandTranslator;
    }

    public function execute($command)
    {
        //translate that object name into handler class
        $handler = $this->commandTranslator->toCommandHandler($command);

        //resolve out of ioc container, and call handle method
        return $this->app->make($handler)->handle($command);
    }

}