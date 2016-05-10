<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{

	public function index(Request $request)
    {

    	$input = $request->all();
    	$contenido[0] = $input['nombre'];
    	$contenido[1] = $input['correo'];
    	$contenido[2] = $input['mensaje'];

    	Mail::send('public.emails.contacto', ['contenido' => $contenido], function ($m) use ($contenido) {
            $m->from('erickjrp@erickjrp.com.ve', 'www.erickjrp.com.ve');

            $m->to('erick29@gmail.com', 'Erick Ramírez')->subject('Contacto desde www.erickjrp.com.ve');
        });

        if (session()->has('idioma')) {

            $language = session('idioma');
            
            if ($language == 'en') {
                $mensaje = 'Message has been sent';
            }else{
                $mensaje = 'El mensaje ha sido enviado';
            }

        }else{
            $mensaje = 'Message has been sent';
            $language = 'en';
        }

        App::setLocale($language);

    	Session::flash('success_message', $mensaje);
        return view('layouts.public', compact('language'));

	}

}