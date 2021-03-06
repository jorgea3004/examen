@extends('layouts.plantillalogin')
@section('title', 'Nuevo Empleado')
@section('content')
       <h1>Nuevo Empleado</h1>
       <div>
              <form action="{{route('empleados.store')}}" method="POST">
                     @csrf
                     <ul>
                            <li>Nombre</li>
                            <li><input type="text" name="nombre" id="nombre" value="{{old('nombre')}}" placeholder="Hugo" />
                                   @error('name')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Apellido</li>
                            <li><input type="text" name="lastname" id="lastname" value="{{old('lastname')}}" placeholder="Lopez" />
                                   @error('lastname')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>E-mail</li>
                            <li><input type="email" name="email" id="email" value="{{old('email')}}"/>
                                   @error('email')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Password</li>
                            <li><input type="password" name="password" id="password" value="{{old('password')}}"/>
                                   @error('password')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Salario</li>
                            <li><input type="numeric" name="salary" id="salary" value="{{old('salary')}}"/>
                                   @error('salary')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Puesto</li>
                            <li><select id="charge" name="charge">
                                   @foreach($charges as $item)
                                   <option value="{{$item->title}}" {{old('charge') == $item->id ? 'selected' : '' }} >{{$item->title}}</option>
                                   @endforeach
                           </select>
                            </li>
                     </ul>
                     <ul>
                            <li>Estatus</li>
                            <li><select id="status" name="status">
                                   <option value="0" {{old('status') == 0 ? 'selected' : '' }} >Inactivo</option>
                                   <option value="1" {{old('status') == 1 ? 'selected' : '' }} >Activo</option>
                                   <option value="2" {{old('status') == 2 ? 'selected' : '' }} >Suspension</option>
                            </select>
                            </li>
                     </ul>
                     <ul>
                            <li><button type="submit">ENVIAR</button></li>
                     </ul>
              </form>
       </div>
@endsection