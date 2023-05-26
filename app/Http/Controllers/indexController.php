<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class indexController extends Controller
{
    public function __invoke()
    {
        /*
        $new_vr = new Volunteer();
        $new_vr->first_name = 'Alex';
        $new_vr->last_name  = 'Bob';
        $new_vr->email_id   = 'alex888@gmail.com';
        $new_vr->class      = '10';
        $new_vr->section    = 'F';
        $new_vr->shift      = 'Day';
        $new_vr->contact_number = '01976682341';
        $new_vr->save();
        */
        
        $volunteers = Volunteer::orderBy('first_name')->get();

        return view('index', ['Volunteers' => $volunteers]);
    }
}

