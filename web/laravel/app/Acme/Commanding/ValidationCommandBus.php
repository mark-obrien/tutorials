<?php namespace Acme\Commanding;

use Illuminate\Contracts\Foundation\Application;

class ValidationCommandBus implements CommandBus{

    private $commandBus;

    private $app;

    private $commandTranslator;

    public function __construct(DefaultCommandBus $commandBus, Application $app, CommandTranslator $commandTranslator)
    {
        $this->commandBus = $commandBus;
        $this->app = $app;
        $this->commandTranslator = $commandTranslator;
    }

    public function execute($command)
    {
        $validator = $this->commandTranslator->toValidator($command);

        if(class_exists($validator))
        {
            $this->app->make($validator)->validate($command);
        }

        return $this->commandBus->execute($command);
    }

}