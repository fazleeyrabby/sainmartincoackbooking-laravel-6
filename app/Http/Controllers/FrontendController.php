<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Welcomemessage;

class FrontendController extends Controller
{
    public function index()
    {
    	$welcomemessages = Welcomemessage::where('publication_status',1)->get();

    	return view('welcome',compact('welcomemessages'));
    }
}
