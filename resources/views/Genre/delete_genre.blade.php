@extends('layout')

@section('content')

<h1>Delete<span class="label label-default"></span></h1>

<form class="form" action="{{url('/genre/delete')}}" role="form" method="POST">
{{ csrf_field()}}
{{ method_field('POST')}}

<div class="form-group" style="max-height: 400px;max-width: 700px;overflow: auto;">

    <ul class="list-group checked-list-box">
    @foreach ($genres as $genre)
        <li class="list-group-item">
        <input type="checkbox" value="{{$genre->id}}" id="generos[]" name="generos[]" >{{$genre->genre}}
        <span class="badge badge-default badge-pill">{{$genre->id}}</span>
        </li>
    @endforeach
    </ul>
</div>

<br></br>

<div class="form-group">
    <button type="sumbit" name="borrar" onclick="return confirm('¿Esta seguro de desea elmininar esto?')" class="btn btn-danger">Delete</button>
</div>

</form>

<script>
window.onload = function() {
    document.getElementById('menu-genres').className = 'active';
};
</script>

@endsection