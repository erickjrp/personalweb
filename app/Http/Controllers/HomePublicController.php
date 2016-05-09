<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomePublicController extends Controller
{

	public function index()
    {

    	$language = App::getLocale();
        return view('layouts.public', compact('language'));

	}

}