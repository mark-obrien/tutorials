<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Acme\Jobs\PostJobListingCommand;
use App\Http\Controllers\BaseController;
use Input;
use Acme\Jobs\JobFilledCommand;

class JobsController extends BaseController {

    /**
     * Store a new job
     * @return response
     */
    public function store()
    {

        $input = Input::only('title', 'description');

        $command = new PostJobListingCommand($input['title'], $input['description']);

        $this->commandBus->execute($command);

    }

    /**
     * Set job as filled
     * @param jobId
     * @return response
     */
    public function delete($jobId)
    {
        $command = new JobFilledCommand($jobId);

        $this->commandBus->execute($command);
    }

}
