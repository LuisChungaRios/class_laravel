<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RDS - LARAVEL</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Listado de usuarios</h1>
                <button class="btn btn-success">Crear</button>
            </div>
            <div class="col-12">

                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Tipo de documento</th>
                        <th scope="col">N° de documento</th>
                        <th>opciones</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)

                            <tr>
                                <td>{{ $user->name  }}</td>
                                <td>  {{  $user->last_name  }} </td>
                                <td>  {{  $user->email   }}</td>
                                <td> {{ $user->age  }} </td>
                                <td> {{ $user->type_document  }}  </td>
                                <td>  {{ $user->number_document  }} </td>
                                <td>
                                    <a href="#" class="btn btn-primary">Editar</a>
                                    <form action="{{route('deleteUser', ['id' => $user->id])}}" method="POST" >
                                        <button class="btn btn-danger" >Eliminar</button>

                                    </form>

                                </td>
                            </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
