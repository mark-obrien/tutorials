<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Acme\Jobs\PostJobListingCommand;
use App\Http\Controllers\BaseController;
use Input;

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
}
