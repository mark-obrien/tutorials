<?php

use App\Http\Requests\Request as DifferentRequest;
return [

    'listeners' => [
        'Acme\Listeners\EmailNotifier',
        'Acme\Listeners\ReportListener'
    ]

];

