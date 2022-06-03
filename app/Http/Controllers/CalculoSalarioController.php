<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class CalculoSalarioController extends Controller
{
    public function index($calculo){
        $usuarios = Users::all();
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
                $msg = '';
                $mult = 1;
                break;
        }
        return view('calculo/index', compact('usuarios', 'msg', 'mult'));
    }
}
