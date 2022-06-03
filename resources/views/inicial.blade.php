@extends('layouts.plantilla')
@section('title', 'Home')
@section('content')
       <h1>Bienvenido al Club</h1>
       <div>{{$msg}}</div>
       <div>
              <form action="{{route('home.login')}}" method="POST">
                     @csrf
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
                            <li><input type="password" name="password" id="password" value="" placeholder="**********"/>
                                   @error('password')
                                   <br><small>*{{$message}}</small><br>
                                   @enderror
                            </li>
                     </ul>
                     <ul>
                            <li><button type="submit">ENVIAR</button></li>
                     </ul>
              </form>
       </div>
@endsection