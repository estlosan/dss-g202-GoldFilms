@extends('layout')

@section('content')
<form>
<h1>Delete<span class="label label-default"></span></h1>
<div class="lista_generos" style="max-height: 400px;max-width: 700px;overflow: auto;">
    <ul class="list-group checked-list-box">
    @foreach ($genres as $genre)
        <li class="list-group-item">
        <input type="checkbox" value="{{$genre->id}}" id="checkbox[]" name="checkbox[]" >{{$genre->genre}}
        <span class="badge badge-default badge-pill">{{$genre->id}}</span>
        </li>
    @endforeach
    </ul>
</div>

<br></br>

<div class="formulario_boton">
    <button type="sumbit" name="borrar" class="btn btn-danger" onclick="eliminar()">Delete</button>
</div>

</form>

<script>
    function eliminar(){
    <?php
        if(isset($_POST['checkbox'])){//Si el array del checklist no esta vacio
            foreach($_POST['checkbox'] as $id){//Recorre el array sacando los id
                echo 'window.location.href="/genres/delete/" + id;';
            }
        }
    ?>
    }
</script>

@endsection