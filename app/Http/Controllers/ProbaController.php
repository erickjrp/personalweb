<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProbaController extends Controller
{

	public function index()
    {

    	return view('public.proba.index');

	}

}