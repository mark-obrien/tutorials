<?php  namespace Acme\Jobs;

use Acme\Commanding\CommandHandler;
use Acme\Eventing\EventDispatcher;

class JobFilledCommandHandler implements CommandHandler {

    protected $job;
    protected $dispatcher;

    public function __construct(Job $job, EventDispatcher $dispatcher)
    {
        $this->job = $job;
        $this->dispatcher = $dispatcher;
    }

    public function handle($command)
    {
        $job = $this->job->findOrFail($command->jobId);

        $job->archive();

        $this->dispatcher->dispatch($job->releaseEvents());
    }
}