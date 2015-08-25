<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class CompileReports extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $reportId;

    protected $type;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($reportId, $type)
    {
        $this->reportId = $reportId;
        $this->type = $type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        var_dump('compiling reports within job class ' .$this->reportId .' '. $this->type);
    }
}
