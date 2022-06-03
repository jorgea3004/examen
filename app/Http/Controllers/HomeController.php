<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return redirect()->route('home.index');
    }
    
    public function index(){
        $msg=session('msg');
        session()->forget('msg');
        return view('inicial', compact('msg'));
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|max:45',
            'password' => 'required|max:10'
        ]);
        $email =$request->email;
        $usuarios = Users::where('email',$email)->where('password',$request->password)->where('status',1)->first();
        //var_dump($usuarios);exit();
        $msg='';
        if ($usuarios===NULL) {
            //$msg='Usuario o password no validos.';
            session()->forget('msg');
            session(['msg' => 'Usuario o password no validos.']);
            return redirect()->route('home.index');
        } else {
            session(['username' => $usuarios->name . " " . $usuarios->lastname]);
            return redirect()->route('usuarios.index');
        }
        

    }
}
