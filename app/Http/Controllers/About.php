<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class About extends Controller
{
    //


public function aboutUs(){
$data['title']='About Us';
return Inertia::render('AboutUs',$data);
}



}
