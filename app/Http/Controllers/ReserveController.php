<?php

namespace App\Http\Controllers;

use App\Jobs\Reserve;
use App\Jobs\ReserveJob;
use App\Repositories\Eloquent\ReserveRepository;
use Illuminate\Http\Request;

/**
 * Class ReserveController
 * @package App\Http\Controllers
 */
class ReserveController extends Controller
{
    private $reserveRepository;

    /**
     * ReserveController constructor.
     * @param ReserveRepository $reserveRepository
     */
    public function __construct(ReserveRepository $reserveRepository)
    {
        $this->reserveRepository = $reserveRepository;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(Request $request)
    {
        $this->dispatch( new ReserveJob($this->reserveRepository, 
                        $request->only($this->reserveRepository->getFillable()) ));
    }
}
