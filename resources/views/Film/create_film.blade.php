<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Nueva película</h1>

<form class="form-horizontal" action="{{url('/film/new/create')}}" id="uploadForm" action="" method="post"  enctype= "multipart/form-data">
{{ csrf_field()}}
{{ method_field('POST')}}

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
        </ul>
    </div>

    <br>

    <div class="form-group">
    <label for="name" class="col-lg-1 control-label">Nombre:</label>
    <div class="col-lg-6 formulario_peli">
      <input type="name"class="form-control" name="name"id="name" placeholder="Nombre">
       @if ($errors->has('name'))
    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
    <span class="sr-only">Error</span>
Pon un nombre de película</div>
@endif
    </div>
  </div>

  <div class="form-group">
    <label for="year" class="col-lg-1 control-label">Año:</label>
    <div class="col-lg-6 formulario_peli">
      <input type="number" class="form-control" name="year" id="year" placeholder="Año">
       @if ($errors->has('year'))
    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
    <span class="sr-only">Error</span>
Pon un año de película válido</div>
@endif
    </div>
  </div>

  <div class="form-group">
    <label for="description" class="col-lg-1 control-label">Descripción:</label>
    <div class="col-lg-6 formulario_peli">
     <textarea class="form-control" rows="4" name="description" id="description" placeholder="Descripción"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="genre" class="col-lg-1 control-label">Género:</label>
      <div class="col-lg-6 formulario_peli">
        <select name="genre">
            @foreach($genres as $genre)
                <option value="{{ $genre->id}}">{{$genre->genre}}</option>
            @endforeach
        </select>
      </div>
  </div>

    <div class="form-group">
        <label for="country" class="col-lg-1 control-label">País:</label>
        <div class="col-lg-6 formulario_peli">
            <input type="name" class="form-control" name="country" id="country"  placeholder="País">
             @if ($errors->has('country'))
    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
    <span class="sr-only">Error</span>
Añade un país válido a la película</div>
@endif
        </div>
    </div>

    <div class="form-group">
        <label for="director" class="col-lg-1 control-label">Director:</label>
        <div class="col-lg-6 formulario_peli">
            <input type="name" class="form-control" name="director" id="director"  placeholder="Director">
            @if ($errors->has('director'))
    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
    <span class="sr-only">Error</span>
Añade un director a la película</div>
@endif
        </div>
    </div>

    <div class="form-group">
        <label for="rating" class="col-lg-1 control-label">Puntuación:</label>
        <div class="col-lg-6 formulario_peli">
            <input type="number" class="form-control" name="rating" id="rating"  placeholder="Puntuación">
            @if ($errors->has('rating'))
    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
    <span class="sr-only">Error</span>
Añade una puntuación a la película</div>
@endif
        </div>
    </div>

     <div class="form-group">
        <label for="rating" class="col-lg-1 control-label">Caratula:</label>
        <div class="col-lg-6 formulario_peli">
            <input type="file" name="fileToUpload" id="fileToUpload" accept="image/jpeg, image/jpg, image/png" class="form-control-file" id="pictureFilm" aria-describedby="fileHelp">
        </div>
        <div class="container">
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Información</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">¿Como subir una caratula de una película?</h4>
                    </div>
                    <div class="modal-body">
                        <p>El nombre de la imagen debe de ser el mismo que el titutlo de la pelicula.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="form-group">
      <label for="rating" class="col-lg-1 control-label">Seleccione:</label>
      <div class="col-lg-6 formulario_peli">
        <div class="button-group">
          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Actores</span> <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
                <ul class='list-inline'>
                  @foreach ($actors as $actor)
                    <li>
                    <input type="checkbox" name="actors[]" id="actor-{{$actor->id}}" value="{{$actor->id}}" {{$actor->checked}}>{{$actor->name}}
                    </li>
                  @endforeach
                </ul>
        </div>
      </div>
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-5">
      <input type="submit" value="Crear" name="submit">
      <input type="button" onclick="location.href='/films';" value="Cancelar">
    </div>
  </div>

</div>

</form>


<script>
window.onload = function() {
    document.getElementById('menu-films').className = 'active';
};
</script>
@endsection
