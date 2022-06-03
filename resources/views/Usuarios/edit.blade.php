@extends('layouts.plantillalogin')
@section('title', 'Editar Usuario')
@section('content')
       <h1>Editar Usuario</h1>
       <div>
              <form action="{{route('usuarios.update',$usuarios->id)}}" method="POST">
                     @csrf
                     @method('put')
                     <ul>
                            <li>Nombre</li>
                            <li><input type="text" name="nombre" id="nombre" value="{{old('nombre', $usuarios->name)}}" />
                                   @error('name')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Apellido</li>
                            <li><input type="text" name="lastname" id="lastname" value="{{old('lastname', $usuarios->lastname)}}"/>
                                   @error('lastname')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>E-mail</li>
                            <li><input type="email" name="email" id="email" value="{{old('email', $usuarios->email)}}"/>
                                   @error('email')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Password</li>
                            <li><input type="password" name="password" id="password" value="{{old('password', $usuarios->password)}}"/>
                                   @error('password')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Salario</li>
                            <li><input type="numeric" name="salary" id="salary" value="{{old('salary', $usuarios->salary)}}"/>
                                   @error('salary')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li>Puesto</li>
                            <li><select id="charge" name="charge">
                                   <option value="1" {{old('charge', $usuarios->charge) == 1 ? 'selected' : '' }} >Operador</option>
                                   <option value="2" {{old('charge', $usuarios->charge) == 2 ? 'selected' : '' }} >Gerente</option>
                                   <option value="3" {{old('charge', $usuarios->charge) == 3 ? 'selected' : '' }} >Lider de Proyecto</option>
                                   <option value="4" {{old('charge', $usuarios->charge) == 4 ? 'selected' : '' }} >Manager</option>
                                   <option value="5" {{old('charge', $usuarios->charge) == 5 ? 'selected' : '' }} >Telefonista</option>
                                   <option value="6" {{old('charge', $usuarios->charge) == 6 ? 'selected' : '' }} >Ventas</option>
                            </select>
                            </li>
                     </ul>
                     <ul>
                            <li>Estatus</li>
                            <li><select id="status" name="status">
                                   <option value="0" {{old('status', $usuarios->status) == 0 ? 'selected' : '' }} >Inactivo</option>
                                   <option value="1" {{old('status', $usuarios->status) == 1 ? 'selected' : '' }} >Activo</option>
                                   <option value="2" {{old('status', $usuarios->status) == 2 ? 'selected' : '' }} >Suspension</option>
                            </select>
                            </li>
                     </ul>
                     <ul>
                            <li><button type="submit">ENVIAR</button></li>
                     </ul>
              </form>
       </div>
@endsection