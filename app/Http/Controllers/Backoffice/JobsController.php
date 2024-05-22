<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Jobs
use App\Jobs\SendEmailEvent;

//Services & Repositories
use App\Domain\Interfaces\Services\Backoffice\ICRUDService;
use App\Domain\Interfaces\Repositories\Backoffice\IJobsRepository;

//Request Validator
use App\Http\Requests\Backoffice\EventRequest;

//Global Classes
use Input, DB;

class JobsController extends Controller
{
    //Do some magic
    public function __construct(IJobsRepository $repo, ICRUDService $CRUDservice){
        $this->data = [];
        $this->repo = $repo;
        $this->CRUDservice = $CRUDservice;
        $this->data['title'] = 'Jobs';
        $this->data['job'] = null;
        $this->data['jobTitles'] = [
            'Construction : <strong>Laborer</strong>',
            'Construction : <strong>Skilled Laborer</strong>',
            'Construction : <strong>Builder</strong>',
            'Construction : <strong>Painter</strong>',
            'Construction : <strong>Mason</strong>',
            'Production & Manufacturing : <strong>Assembler</strong>',
            'Production & Manufacturing : <strong>Factory Worker</strong>',
            'Production & Manufacturing : <strong>Packager</strong>',
            'Production & Manufacturing : <strong>Machine Operator</strong>',
            'Installation & Maintenance : <strong>Operator</strong>',
            'Installation & Maintenance : <strong>Technician</strong>',
            'Installation & Maintenance : <strong>Inspector</strong>',
            'Retail : <strong>Cashier</strong>',
            'Retail : <strong>Inventory Specialist</strong>',
            'Retail : <strong>Branch Manager</strong>',
        ];

        $this->data['categories'] = [
            1 => "Construction",
            2 => "Production & Manufacturing",
            3 => "Installation & Maintenance",
            4 => "Retail",
        ];
    }

    public function index(){
        return view('backoffice.pages.jobs.index',$this->data);
    }

    public function create(){
        return view('backoffice.pages.jobs.create',$this->data);
    }

    public function store(EventRequest $request){
        $crudData = $this->repo->saveData($request);
        if(!$crudData){
            return redirect()->back();
        }
        return redirect()->route('backoffice.jobs.index');
    }
    
    public function edit($id){
        $this->data['event'] = $this->repo->findOrFail($id);
        if(!$this->data['event']){
            return abort(404);
        }
        return view('backoffice.pages.jobs.create',$this->data);
    }

    public function update(EventRequest $request){
        $crudData = $this->CRUDservice->save($request, $this->repo);
        return redirect()->route('backoffice.jobs.index');
    }

    public function cancel($id){
        $cancel = $this->CRUDservice->delete($id, $this->repo);
        return redirect()->route('backoffice.jobs.index');
    }

    public function view($id){
        $this->data['feedbacks'] = $this->feedbackRepo->fetchFeedbacks($id);
        $this->data['event'] = $this->repo->findOrFail($id);
        if(!$this->data['event']){
            return abort(404);
        }
        $attendance = $this->data['event']->attendance->pluck('user_id')->toArray();
        $this->data['attendance'] = false;
        if(in_array(auth()->user()->id,$attendance)){
            $this->data['attendance'] = true;
        }
        return view('backoffice.pages.jobs.view',$this->data);
    }
}
