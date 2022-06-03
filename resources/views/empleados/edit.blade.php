@extends('layouts.plantillalogin')
@section('title', 'Editar Empleado')
@section('content')
       <h1>Editar Empleado</h1>
       <div>
              <form action="{{route('empleados.update',$empleados->id)}}" method="POST">
                     @csrf
                     @method('put')
                     <ul>
                            <li>Nombre</li>
                            <li><input type="text" name="nombre" id="nombre" value="{{old('nombre', $empleados->name)}}" />
                                   @error('name')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Apellido</li>
                            <li><input type="text" name="lastname" id="lastname" value="{{old('lastname', $empleados->lastname)}}"/>
                                   @error('lastname')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>E-mail</li>
                            <li><input type="email" name="email" id="email" value="{{old('email', $empleados->email)}}"/>
                                   @error('email')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Password</li>
                            <li><input type="password" name="password" id="password" value="{{old('password', $empleados->password)}}"/>
                                   @error('password')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Salario</li>
                            <li><input type="numeric" name="salary" id="salary" value="{{old('salary', $empleados->salary)}}"/>
                                   @error('salary')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Puesto</li>
                            <li><select id="charge" name="charge">
                                   @foreach($charges as $item)
                                   <option value="{{$item->title}}" {{old('charge', $empleados->charge) == $item->id ? 'selected' : '' }} >{{$item->title}}</option>
                                   @endforeach
                            </select>
                            </li>
                     </ul>
                     <ul>
                            <li>Estatus</li>
                            <li><select id="status" name="status">
                                   <option value="0" {{old('status', $empleados->status) == 0 ? 'selected' : '' }} >Inactivo</option>
                                   <option value="1" {{old('status', $empleados->status) == 1 ? 'selected' : '' }} >Activo</option>
                                   <option value="2" {{old('status', $empleados->status) == 2 ? 'selected' : '' }} >Suspension</option>
                            </select>
                            </li>
                     </ul>
                     <ul>
                            <li><button type="submit">ENVIAR</button></li>
                     </ul>
              </form>
       </div>
@endsection