<?php

namespace Acme\Jobs;

use Acme\Commanding\CommandHandler;
use Acme\Eventing\EventDispatcher;

class PostJobListingCommandHandler implements CommandHandler{

    protected $dispatcher;

    public function __construct(EventDispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $job = Job::post($command->title,$command->description);

        $this->dispatcher->dispatch($job->releaseEvents());

    }

}