@extends('layout')

@section('content')

<div class="row">
<table class="table table-striped" style="margin-top: 40px;">
    <thead>
        <th>Nombre</th>
        <th>Accion</th>
    </thead>
    <tbody>
        @foreach($actors as $actor)
            <tr>
                <td> {{ $actor->name}} </td>
                <td> <input type="button" id="{{$actor->id}}" value="Borrar" onclick="eliminarActor(this.id);"></td>
                <td> <input type="button" id="{{$actor->id}}" value="Editar" onclick="editarActor(this.id);"></td>
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