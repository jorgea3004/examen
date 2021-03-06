@extends('layouts.plantillalogin')
@section('title', 'Listado de Empleados')
@section('content')
       <h1>Listado de Empleados</h1>
        <div>
            <ul class="menu" >
                <li><a href="{{route('empleados.new')}}">Nuevo</a></li>
            </ul>
       </div>
       <div>
        <table>
            <thead>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th>SALARIO</th>
                <th>PUESTO</th>
                <th>ESTATUS</th>
                <th>OPCIONES</th>
            </thead>
            <tbody>
            @foreach($empleados as $item)
                <tr>
                    <td>{{$item->name . " " . $item->lastname}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{number_format($item->salary, 2)}}</td>
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
                    <td><a id="editemp" href="{{route('empleados.edit', $item->id)}}">EDITAR</a>
                <form method="post" action="{{route('empleados.destroy',$item->id)}}">
                    @method('delete')
                    @csrf
                    <button type="submit" id="deleteemp">BORRAR</button>
                </form>
            </td>
                </tr>
            @endforeach
            </tbody>
        </table>
       </div>
@endsection