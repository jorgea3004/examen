<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style type="text/css">
            body, div {
                width: 100%;
                display: inline;
                float: left;
                position: relative;
                height: auto;
                margin: 0;
            }
            .menu {
                width: 90%;
                height: auto;
                margin: 0 10px;
                padding: 0;
                display: inline;
                float: left;
            }
            .menu li {
                width: auto;
                height: auto;
                display: inline;
                float: left;
            }
            .menu li:hover {
                background-color: gray;
                cursor: pointer;
            }
            .menu li a {
                color: #000;
                text-decoration: none;
                border: solid 1px #000;
                border-radius: 5px;
                margin: 5px;
                padding: 10px;
                width: auto;
                height: auto;
                display: inline;
                float: left;
            }
            table, thead, tbody, tr {
                width: 100%;
                height: auto;
                margin: 0;
                padding: 0;
                display: inline;
                float: left;
                position: relative;
            }
            table tr th, table tr td {
                width: 16%;
                height: auto;
                margin: 0;
                padding: 5px 0 5px 5px;
                display: inline;
                float: left;
                position: relative;
            }
            table tbody tr {
                border: solid 1px #000;
            }
            table tbody tr:hover {
                background-color: gray;
                cursor: pointer;
            }
            table tr td a, table tr td form {
                width: auto;
                height: auto;
                padding: 0;
                display: inline;
                float: left;
                position: relative;
            }
            table tr td form {
                margin: 0 5px 0 0;
            }
            table tr td a, table tr td form button {
                color: #000;
                text-decoration: none;
                border: solid 1px #000;
                border-radius: 5px;
                margin: 5px;
                padding: 5px;
            }
            table tr td a:hover, table tr td form button:hover {
                background-color: #fff;
                cursor: pointer;
            }
            .selectedoption {
                background-color: gray;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Bienvenido {{session('username')}}</h1>
        <div>
            <ul class="menu">
                <li><a href="{{route('empleados.index')}}">Empleados</a></li>
                <li><a href="{{route('calculosalario.index',0)}}">Calculo Salario</a></li>
            </ul>
        </div>
       @yield('content')
        <script type="text/javascript">
            $(document).ready(function(){
                $( "#editemp" ).click(function() {
                    if(!confirm("Continuar para editar el Empleado")){
                        return false;
                    }
                });
                $( "#deleteemp" ).click(function() {
                    if(!confirm("Continuar para borrar el Empleado")){
                        return false;
                    }
                });
            });
        </script>
    </body>
</html>
