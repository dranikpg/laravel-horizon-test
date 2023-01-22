<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Cache;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TestJon implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $jon;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($jon)
    {
        $this->jon = $jon;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        Cache::increment('runs');
    }
}
