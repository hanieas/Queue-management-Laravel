<?php

namespace App\Jobs;

use App\Repositories\Eloquent\ReserveRepository;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ReserveJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $reserveRepository , $request;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(ReserveRepository $reserveRepository,$request)
    {
        $this->reserveRepository = $reserveRepository;
        $this->request = $request;
        $this->onQueue('reserve');
    
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->reserveRepository
            ->create($this->request);
    }
}
