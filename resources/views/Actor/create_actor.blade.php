<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<h1>Nuevo actor</h1>

<form class="form-horizontal" action="{{url('/actor/new/create')}}" id="uploadForm" action="" method="post"  enctype= "multipart/form-data">
{{ csrf_field()}}
{{ method_field('POST')}}

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
        </ul>
    </div>

    <br>

    <div class="form-group">
    <label for="name" class="col-lg-1 control-label">Nombre</label>
    <div class="col-lg-6 formulario_peli">
      <input  value="{{old('name') }}" type="name"class="form-control" name="name"id="name" placeholder="Inserta el nombre">
       @if ($errors->has('name'))
    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
    <span class="sr-only">Error</span>
Pon un nombre válido</div>
@endif
    </div>
  </div>

  <div class="form-group">
    <label for="biography" class="col-lg-1 control-label">Biografía</label>
    <div class="col-lg-6 formulario_peli">
      <input value="{{old('biography') }}" type="url" class="form-control" name="biography"id="biography" placeholder="Ejeplo: https://es.wikipedia.org/wiki/Matt_Damon">
       @if ($errors->has('biography'))
    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
    <span class="sr-only">Error</span>
Pon un enlace</div>
@endif
    </div>
  </div>

  <div class="form-group">
    <label for="year" class="col-lg-1 control-label">Edad</label>
    <div class="col-lg-6 formulario_peli">
      <input value="{{old('age') }}" type="number" class="form-control" name="age" id="age" placeholder="Inserta la edad">
       @if ($errors->has('age'))
    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
    <span class="sr-only">Error</span>
Añade un año válido</div>
@endif
    </div>
  </div>

  <div class="form-group">
    <label for="description" class="col-lg-1 control-label">Nacionalidad</label>
    <div class="col-lg-6 formulario_peli">
        <input value="{{old('nacionality') }}"  type="name" class="form-control" name="nacionality" id="nacionality"  placeholder="Inserta la nacionalidad">
         @if ($errors->has('nacionality'))
    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
    <span class="sr-only">Error</span>
Añade una nacionalidad</div>
@endif
    </div>
  </div>

    <div class="form-group">
    <label for="genero" class="col-lg-1 control-label">Genero</label>
    <div class="col-lg-6 formulario_peli">
        <label class="radio-inline"><input type="radio" name="radio_button" id="hombre_radio" value="hombre" @if(old('radio_button')=="hombre") checked @endif>Hombre </label>
        <label class="radio-inline"><input type="radio" name="radio_button" id="mujer_radio" value="mujer" @if(old('radio_button')=="mujer") checked @endif>Mujer</label>
        @if ($errors->has('radio_button'))
    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
    <span class="sr-only">Error</span>
Añade el género</div>
@endif
    </div>
</div>

 <div class="form-group">
        <label for="rating" class="col-lg-1 control-label">Foto</label>
        <div class="col-lg-6 formulario_peli">
            <input type="file" name="fileToUpload" id="fileToUpload" accept="image/jpeg, image/jpg, image/png" class="form-control-file" id="pictureFilm" aria-describedby="fileHelp">
             @if ($errors->has('fileToUpload'))
    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
    <span class="sr-only">Error</span>
Añade una imagen</div>
@endif
        </div>
        <div class="container">
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Información</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">¿Como subir una foto de un actor?</h4>
                    </div>
                    <div class="modal-body">
                        <p>El nombre de la imagen debe de ser el mismo que el nombre del actor o actriz.</p>
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
      <label for="rating" class="col-lg-1 control-label">Seleccione</label>
      <div class="col-lg-6 formulario_peli">
        <div class="button-group">
          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-film"> Películas</span> <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
                <ul class='list-inline'>
                  @foreach ($films as $film)
                    <li>
                    <input type="checkbox" name="films[]" id="film-{{$film->id}}" value="{{$film->id}}" {{$film->checked}}>{{$film->name}}
                    </li>
                  @endforeach
                </ul>
            </ul>
        </div>
         @if ($errors->has('films'))
    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"  aria-hidden="true" ></span>
    <span class="sr-only">Error</span>
Añade al menos una película</div>
@endif
      </div>
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-5">
      <input type="submit" value="Crear" name="submit">
      <input type="button" onclick="location.href='/actors';" value="Cancelar">
    </div>
  </div>

</div>

</form>


<script>
window.onload = function() {
    document.getElementById('menu-actors').className = 'active';
};
</script>
@endsection
