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

class WorkforceController extends Controller
{
    //Do some magic
    public function __construct(IJobsRepository $repo, ICRUDService $CRUDservice){
        $this->data = [];
        $this->repo = $repo;
        $this->CRUDservice = $CRUDservice;
        $this->data['title'] = 'Jobs';
        $this->data['job'] = null;
        $this->data['names'] = [
            'Frank Mahoney',
            'Samuel Orr',
            'Kian Nichols',
            'Makenna Cannon',
            'Leon Marquez',
            'Chaya Guzman',
            'Aleah Robinson',
            'Kiera Griffin',
            'Damarion Bernard',
        ];
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
        return view('backoffice.pages.workforce.index',$this->data);
    }
}
