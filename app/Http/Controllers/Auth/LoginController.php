<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * 
     * @return type
     */
    public function index() {
         return view('login');
    }
    
    /**
     * 
     * @param Request $request
     * @return type
     */
    public function authenticated(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
        
            return redirect()->intended('/');
        } else {
            return back()->withErrors([
                'email' => 'Credenciais inválidas'
            ]);
            
        }
        
        
    }
}
