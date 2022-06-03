@extends('layouts.plantillalogin')
@section('title', 'Calculo de salarios')
@section('content')
       <h1>Calculo de salarios de Usuarios {{$msg}} a {{$mult}} días</h1>
        <div>
            <ul class="menu" >
                <li><a href="{{route('calculosalario.index',0)}}" class="{{$clases[0]}}">Semanal</a></li>
                <li><a href="{{route('calculosalario.index',1)}}" class="{{$clases[1]}}">Quincenal</a></li>
                <li><a href="{{route('calculosalario.index',2)}}" class="{{$clases[2]}}">Mensual</a></li>
            </ul>
        </div>
       <div>
        <table>
            <thead>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th>PUESTO</th>
                <th>ESTATUS</th>
                <th>SALARIO {{strtoupper($msg)}}</th>
            </thead>
            <tbody>
            @foreach($usuarios as $item)
                <tr>
                    <td>{{$item->name . " " . $item->lastname}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->title}}</td>
                    @if($item->status == 0)
                    <td>Inactivo</td>
                    @elseif($item->status == 1)
                    <td>Activo</td>
                    @elseif($item->status == 2)
                    <td>Suspension</td>
                    @endif
                    <td>{{number_format($item->salary, 2)}} => {{number_format($item->salary*$mult, 2)}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
       </div>
@endsection