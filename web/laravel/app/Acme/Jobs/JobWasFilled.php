<?php namespace Acme\Jobs;


class JobWasFilled {

    public $job;

    public function __construct(Job $job)
    {
        $this->job = $job;
    }
}