<?php namespace Acme\Jobs;

use Illuminate\Support\Facades\Validator;

class PostJobListingValidator {

    protected $validator;

    private static $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function validate(PostJobListingCommand $command)
    {

        $validator = Validator::make([
                'title' => $command->title,
                'description' => $command->description
            ], static::$rules

        );

        if($validator->fails())
        {
            die('validation failed');
        }
    }

}