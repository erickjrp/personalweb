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

    	if (session()->has('idioma')) {
    		$language = session('idioma');
    		App::setLocale($language);
    	}else{
    		$language = 'en';
    	}

        return view('layouts.public', compact('language'));

	}

}