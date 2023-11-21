<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginControler extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('username','password')))
        {
            return back()->with('mensaje','Credenciales Incorrectas');
        }

        if (auth()->attempt($request->only('username', 'password'))) {
            if (auth()->user()->permisos()) 
            {
                return redirect()->route('AdminIndex');
            } else {
                return redirect()->route('MuroIndex');
            }
        }
        
    }
}
