<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends('layout')

@section('content')

<div class="row">
<table class="table table-striped" >
    <thead>
        <th>Nombre</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach($actors as $actor)
            <tr>
                <td> {{ $actor->name}} </td>
                <td> <input class="btn btn-danger" type="button" id="{{$actor->id}}" value="Borrar" onclick="eliminarActor(this.id);"></td>
                <td> <input class="btn btn-primary" type="button" id="{{$actor->id}}" value="Editar" onclick="editarActor(this.id);"></td>
            </tr>
        @endforeach
        
    </tbody>
    
</table>
{{$actors->links()}}
</div>

<script>
    function eliminarActor(id){
        r= confirm('¿Esta seguro de desea elmininar esto?');
        if(r == true){
             window.location.href="/actors/delete/" + id;
        }else{
            window.location.href="/actors";
        }
    }

    function editarActor(id){
        window.location.href="/actors/edit/" + id;
    }
</script>

<script>
window.onload = function() {
    document.getElementById('menu-actors').className = 'active';
};
</script>

@endsection