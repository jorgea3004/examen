@extends('layouts.plantillalogin')
@section('title', 'Listado de Usuarios')
@section('content')
       <h1>Listado de Usuarios</h1>
       <div><a href="{{route('usuarios.new')}}">Nuevo</a></div>
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
            @foreach($usuarios as $item)
                <tr>
                    <td>{{$item->name . " " . $item->lastname}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->salary}}</td>
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
                    <td><a href="{{route('usuarios.edit', $item->id)}}">EDITAR</a>
                <form method="post" action="{{route('usuarios.destroy',$item->id)}}">
                    @method('delete')
                    @csrf
                    <button type="submit">BORRAR</button>
                </form>
            </td>
                </tr>
            @endforeach
            </tbody>
        </table>
       </div>
@endsection