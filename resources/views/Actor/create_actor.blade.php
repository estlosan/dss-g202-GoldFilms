@extends('layout')

@section('content')


<h1>Nueva Actor</h1>
<form class="form-horizontal" action="{{url('/actor/new/create')}}" id="uploadForm" action="" method="post"  enctype= "multipart/form-data">

{{ csrf_field()}}
{{ method_field('POST')}}

  <div class="form-group">
    <label for="name" class="col-lg-1 control-label">Nombre:</label>
    <div class="col-lg-5">
      <input type="name"class="form-control" name="name"id="name" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="age" class="col-lg-1 control-label">Año:</label>
    <div class="col-lg-5">
      <input type="number" class="form-control" name="age" id="age" placeholder="Edad">
    </div>
  </div>

<div class="form-group">
    <label for="nacionality" class="col-lg-1 control-label">Nacionalidad:</label>
    <div class="col-lg-5">
        <input type="name" class="form-control" name="nacionality" id="nacionality"  placeholder="Nacionalidad">
    </div>
</div>

<div class="form-group">
    <label for="genero" class="col-lg-1 control-label">Genero:</label>
    <div class="col-lg-5">
        <label class="radio-inline"><input type="radio" name="radio_button" id="hombre_radio" value="hombre">Hombre</label>
        <label class="radio-inline"><input checked type="radio" name="radio_button" id="mujer_radio" value="mujer">Mujer</label>
    </div>
</div>

 <div class="form-group">
        <label for="rating" class="col-lg-1 control-label">Foto:</label>
        <div class="col-lg-5">
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
    <label for="rating" class="col-lg-1 control-label">Seleccione:</label>
        <div class="col-lg-5">
            <div class="button-group">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Películas</span> <span class="caret"></span></button>
            <ul class="dropdown-menu">
            @foreach ($films as $film)
                <div class="checkbox checkbox-inline">
                <li><input type="checkbox" name="films[]" id="film-{{$film->id}}" value="{{$film->id}}" {{$film->checked}}>{{$film->name}}</li>
                </div>
            @endforeach
            </ul>
            </div>
        </div>
    </div>
</div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-5">
      <input type="submit" value="Crear">
      <input type="button" onclick="location.href='/actors';" value="Cancelar">
    </div>
  </div>
  
</form>

<script>
window.onload = function() {
    document.getElementById('menu-actors').className = 'active';
};
</script>
@endsection
