<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{

	public function index(Request $request)
    {

    	$input = $request->all();
        $language = $input['idioma'];
    	App::setLocale($language);
    	session(['idioma' => $language]);
        return Redirect::to('/');

	}

}