<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\CompileReports;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function index(Request $request)
    {
        $this->dispatchFrom(CompileReports::class, $request);

        return 'done';
    }

}
