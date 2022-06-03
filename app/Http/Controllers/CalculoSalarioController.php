<?php

namespace App\Http\Controllers;

use App\Models\Charges;
use App\Models\Employees;
use Illuminate\Http\Request;

class CalculoSalarioController extends Controller
{
    public function index($calculo){
        //$usuarios = Employees::all();
        $usuarios = DB::table('employees')
            ->join('charges', 'charges.id', '=', 'employees.charge')
            ->select('employees.*', 'charges.title')
            ->get();
        //echo "string: ".$calculo."";exit();
        switch ($calculo) {
            case 0:
                $msg = 'Semanal';
                $mult = 5;
                break;
            case 1:
                $msg = 'Quincenal';
                $mult = 10;
                break;
            case 2:
                $msg = 'Mensual';
                $mult = 22;
                break;
            
            default:
                $msg = 'Semanal';
                $mult = 5;
                break;
        }
        $clases = ['','',''];
        $clases[$calculo] = 'selectedoption';
        return view('calculo/index', compact('usuarios', 'msg', 'mult', 'clases'));
    }
}
