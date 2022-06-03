<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Users::all();
        return view('usuarios/index', compact('usuarios'));
    }

    public function create(){
        return view('usuarios/new');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|max:45',
            'lastname' => 'required|max:45',
            'email' => 'required|max:45',
            'password' => 'required|max:10',
            'salary' => 'required|max:8',
            'charge' => 'required',
            'status' => 'required'
        ]);
        $usuario = new Users();
        $usuario->name = $request->nombre;
        $usuario->lastname = $request->lastname;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->salary = $request->salary;
        $usuario->charge = $request->charge;
        $usuario->status = $request->status;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    public function edit($id){
        $usuarios = Users::find($id);
        return view('usuarios/edit',compact('usuarios'));
    }
    public function update(Request $request, Users $usuario){
        $usuario->name = $request->nombre;
        $usuario->lastname = $request->lastname;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->idcity = $request->idcity;
        $usuario->salary = $request->salary;
        $usuario->charge = $request->charge;
        $usuario->status = $request->status;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }
    public function destroy(Users $usuario){
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }

}
