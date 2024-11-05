<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de usuarios</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/js/app.js'])
    
</head>
<body>
    @session('exito')
        <script>
            Swal.fire({
                title: "Respuesta del servidor",
                text: "{{$value}}",
                icon: "success"
            });
        </script>
    @endsession
    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">

    <form action="{{route('procesarUsuario')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Correo: </label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}">
            <small class="text-danger">{{$errors->first('email')}}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="password" class="form-control" name="password" value="{{old('password')}}">
            <small class="text-danger">{{$errors->first('password')}}</small>
        </div>                

        <div class="mb-3">
            <label  class="form-label">Edad: </label>
            <input type="number" class="form-control" name="age" value="{{old('age')}}">
            <small class="text-danger">{{$errors->first('age')}}</small>
        </div>


        <button type="submit" class="btn btn-danger "> Guardar Usuario</button>
    </form>


</div>


</body>
</html>