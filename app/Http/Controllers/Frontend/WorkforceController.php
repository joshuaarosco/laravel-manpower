<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;

//Repositories

class WorkforceController extends Controller
{
    public function __construct(){
        $this->data = [];
        
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
    }

    public function index(){
        return view('frontend.web._pages.workforce.index',$this->data);
    }
}
