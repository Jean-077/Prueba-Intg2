<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'correo'=> 'required|email',
            'mensaje'=> 'required',
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('jeancarlosdipas1@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info','Mensaje enviado');
    }
}
