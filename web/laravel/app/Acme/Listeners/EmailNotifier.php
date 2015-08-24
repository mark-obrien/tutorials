<?php

namespace Acme\Listeners;

use Acme\Jobs\JobWasFilled;
use Acme\Jobs\JobWasPosted;
use Acme\Eventing\EventListener;

class EmailNotifier extends EventListener{

    public function whenJobWasPosted(JobWasPosted $event)
    {
        var_dump('Email Sent ' . $event->job->title);
    }

    public function whenJobWasFilled(JobWasFilled $event)
    {
        var_dump('Job Filled ' . $event->job->title);
    }

}