@extends('layouts.plantillalogin')
@section('title', 'Calculo de salarios')
@section('content')
       <h1>Calculo de salarios de Usuarios {{$msg}} a {{$mult}} días</h1>
       <div><a href="{{route('calculosalario.index',0)}}">Semanal</a></div>
       <div><a href="{{route('calculosalario.index',1)}}">Quincenal</a></div>
       <div><a href="{{route('calculosalario.index',2)}}">Mensual</a></div>
       <div>
        <table>
            <thead>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th>PUESTO</th>
                <th>ESTATUS</th>
                <th>SALARIO {{$msg}}</th>
            </thead>
            <tbody>
            @foreach($usuarios as $item)
                <tr>
                    <td>{{$item->name . " " . $item->lastname}}</td>
                    <td>{{$item->email}}</td>
                    @if($item->charge == 1)
                    <td>Operador</td>
                    @elseif($item->charge == 2)
                    <td>Gerente</td>
                    @elseif($item->charge == 3)
                    <td>Lider de Proyecto</td>
                    @elseif($item->charge == 4)
                    <td>Manager</td>
                    @elseif($item->charge == 5)
                    <td>Telefonista</td>
                    @elseif($item->charge == 6)
                    <td>Ventas</td>
                    @endif
                    @if($item->status == 0)
                    <td>Inactivo</td>
                    @elseif($item->status == 1)
                    <td>Activo</td>
                    @elseif($item->status == 2)
                    <td>Suspension</td>
                    @endif
                    <td>{{$item->salary}} => {{$item->salary*$mult}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
       </div>
@endsection