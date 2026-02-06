<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class Programs extends Controller
{
    //



public function programsIndex(){
$data['title']='Programs';
return Inertia::render('ProgramsPage',$data);
}



}
