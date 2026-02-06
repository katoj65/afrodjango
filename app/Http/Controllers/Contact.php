<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class Contact extends Controller
{
    //


public function contactUs(){
$data['title']='Contact Us';
return Inertia::render('ContactUs',$data);
}












}
