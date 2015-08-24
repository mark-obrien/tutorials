<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/22/2015
 * Time: 5:41 PM
 */

namespace Acme\Listeners;


use Acme\Eventing\EventListener;
use Acme\Jobs\JobWasPosted;

class ReportListener extends EventListener {

    public function whenJobWasPosted(JobWasPosted $event)
    {
        var_dump('do something with reporting');
    }
}