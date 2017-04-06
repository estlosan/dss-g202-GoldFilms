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
                <td> <input class="btn btn-primary" type="button" id="{{$film->id}}" value="Borrar" onclick="eliminarPelicula(this.id);"></td>
                <td> <input class="btn btn-danger" type="button" id="{{$film->id}}" value="Editar" onclick="editarPelicula(this.id);"></td>
            </tr>
        @endforeach
        
    </tbody>
    
</table>
{{$films->links()}}
</div>

<script>
    function eliminarPelicula(id){

        r= confirm('¿Esta seguro de desea elmininar esto?');
        if(r == true){
        window.location.href="/films/delete/" + id;
        }else{
          window.location.href="/films";
        }
    }

    function editarPelicula(id){
        window.location.href="/films/edit/" + id;
    }
</script>

@endsection