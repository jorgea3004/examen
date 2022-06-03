<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index(){
        $empleados = Employees::all();
        return view('empleados/index', compact('empleados'));
    }

    public function create(){
        return view('empleados/new');
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
        $empleado = new Employees();
        $empleado->name = $request->nombre;
        $empleado->lastname = $request->lastname;
        $empleado->email = $request->email;
        $empleado->password = $request->password;
        $empleado->salary = $request->salary;
        $empleado->charge = $request->charge;
        $empleado->status = $request->status;
        $empleado->save();
        return redirect()->route('empleados.index');
    }

    public function edit($id){
        $empleados = Employees::find($id);
        return view('empleados/edit',compact('empleados'));
    }
    public function update(Request $request, Employees $empleado){
        $empleado->name = $request->nombre;
        $empleado->lastname = $request->lastname;
        $empleado->email = $request->email;
        $empleado->password = $request->password;
        $empleado->salary = $request->salary;
        $empleado->charge = $request->charge;
        $empleado->status = $request->status;
        $empleado->save();
        return redirect()->route('empleados.index');
    }
    public function destroy(Employees $empleado){
        $empleado->delete();
        return redirect()->route('empleados.index');
    }

}
