<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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

    <div class="row">
        
    </div>
    <div class="card">
        <div class="container" style="padding-top:30px; padding-bottom:30px; box-shadow: 0 0 10px rgb(68, 171, 255);">
            <div class="col-xs-12 col-sm-12 col-md-12">
                
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <div class="form-group">
                            <label for="codigo">Codigo:</label>
                            <input type="text" name="codigo" value="{{isset($student->codigo)?$student->codigo:''}}" class="form-control" 
                                required autofocus pattern="SMIS[0-9]{2}[0-9]{2}[0-9]{2}" title="Ejemplo SMIS935820">
                        </div>
                    </div>

                    <div class="col-xs-5 col-sm-5 col-md-5">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" value="{{isset($student->nombre)?$student->nombre:''}}" class="form-control" 
                                pattern="[a-zA-Záéíóú '-]{2,48}" required>
                        </div>
                    </div>

                    <div class="col-xs-5 col-sm-5 col-md-5">
                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input type="text" name="apellido" value="{{isset($student->apellido)?$student->apellido:''}}" class="form-control"
                            pattern="[a-zA-Záéíóú '-]{2,48}"  required>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="direccion">Dirección:</label>
                            <input type="text" name="direccion" value="{{isset($student->direccion)?$student->direccion:''}}" class="form-control" 
                                pattern="[a-zA-Z1-9áéíóú -,.]{2,84}" title="No utilizar simbolos como: #%&!" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="telefono">Telefono:</label>
                            <input type="tel" name="telefono" value="{{isset($student->telefono)?$student->telefono:''}}" class="form-control"
                                 required pattern="[0-9]{3} [1-9]{4}-[1-9]{4}" title="Ejemplo 503 7344-0204">
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" value="{{isset($student->email)?$student->email:''}}" class="form-control" 
                                required pattern=".+@gmail.com" title="Ejemplo prueba14Z@gmail.com">
                        </div>
                    </div>
                </div>

           <div class="row">
               <div class="col-md-2"></div>
               <div class="col-md-4">
                   <button type="submit" class="btn btn-success" style="width: 100%; font-weight:bold;">Guardar</button>
               </div>
               <div class="col-md-4"> 
                   <a href="{{url('/student/')}}" class="btn btn-primary" style="width:100%; font-weight:bold;">Regresar</a>
               </div>
               <div class="col-md-2"></div>
           </div> 
        </div>
    </div>

</body>
</html>