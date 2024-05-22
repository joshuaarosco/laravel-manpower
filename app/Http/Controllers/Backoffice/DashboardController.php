<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Domain\Interfaces\Repositories\Backoffice\IStaffsRepository;
use App\Domain\Interfaces\Repositories\Backoffice\IEventsRepository;
use App\Domain\Interfaces\Repositories\Backoffice\IFeedbacksRepository;
use App\Domain\Interfaces\Repositories\Backoffice\IParticipantsRepository;

use Input;

class DashboardController extends Controller
{
    public function __construct(){
        $this->data = [];
    }
    
    public function index(){
    	return view('backoffice.pages.dashboard.index', $this->data);
    }
}
