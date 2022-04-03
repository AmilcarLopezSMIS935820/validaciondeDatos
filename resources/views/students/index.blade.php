<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Estudiantes - Index</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY">
    </script>
    
    <style>
        .init{
            margin-top: 45px;
        }
        .footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body class="init">
<div class="container">
  
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Listado de Estudiantes</h2>
            </div>
            <div class="pull-right">
                <a href="{{url('/student/create')}}" class="btn btn-success" style="font-size: 20px; font-weight:bold; padding-bottoM: 2px;">+</a>
            </div>
        </div>
    </div>
    <hr>
    <table  class="table table-bordered table-responsive-lg text-center">
        <tr>
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Codigo</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido</th>
                    <th class="text-center">Dirección</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Email</th>
                    <th width="260px" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($student as $student)
                <tr>
                    <td style="vertical-align: middle;">{{ $student->id}}</td>
                    <td style="vertical-align: middle;">{{ $student->codigo}}</td>
                    <td style="vertical-align: middle;">{{ $student->nombre}}</td>
                    <td style="vertical-align: middle;">{{ $student->apellido}}</td>
                    <td style="vertical-align: middle;">{{ $student->direccion}}</td>
                    <td style="vertical-align: middle;">{{ $student->telefono}}</td>
                    <td style="vertical-align: middle;">{{ $student->email}}</td>
                    <td>
                        <div class="row" style="align-items: center;">
                            <div class="col-md-6">
                                <form action="{{url('/student/'.$student->id.'/edit/')}}" method="post">
                                    <a href="{{url('/student/'.$student->id.'/edit/')}}" class="btn btn-info" style="width:100%; font-weight: bold;">Editar</a>    
                                </form>
                            </div>

                            <div class="col-md-6">
                                <form action="{{url('/student/'.$student->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    
                                    <input type="submit" value="Eliminar" class="btn btn-danger"
                                    onclick="return confirm('¿Desea eliminar el registro?')" style="width:100%; font-weight: bold;">        
                                </form>
                            </div>
                        </div>
                        
                        
                        
                    </td>
                </tr>
                @endforeach
            </tbody>

        </tr>
    </table>
</div>
</body>
</html>