@extends('layout')

@section('content')

<div class="row">
<table class="table table-striped" style="margin-top: 40px;">
    <thead>
        <th>Nombre</th>
        <th>Accion</th>
    </thead>
    <tbody>
        @foreach($films as $film)
            <tr>
                <td> {{ $film->name}} </td>
                <td> <input type="button" id="{{$film->id}}" value="Borrar" onclick="eliminarPelicula(this.id);"></td>
            </tr>
        @endforeach
        
    </tbody>
    
</table>
{{$films->links()}}
</div>

<script>
    function eliminarPelicula(id){
        window.location.href="/films/delete/" + id;
    }
</script>

@endsection