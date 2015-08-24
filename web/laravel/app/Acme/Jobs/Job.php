<?php

namespace Acme\Jobs;

use Acme\Eventing\EventGenerator;
use Eloquent;

class Job extends Eloquent {

    use EventGenerator;

    protected $fillable = [
        'title',
        'description'
    ];

    public static function post($title, $description)
    {
        $job = new static(compact('title', 'description'));

        $job->save();

        $job->raise(new JobWasPosted($job));

        return $job;
    }

}