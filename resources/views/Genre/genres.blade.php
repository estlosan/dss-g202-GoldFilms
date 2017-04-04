@extends('layout')

@section('content')

<div class="lista_generos">
<h1>Genres</h1>

<ul>
@foreach ($genres as $genre)
    <li><a href="genres/{{$genre->id}}">{{$genre->genre}}</a></li>
@endforeach
</ul>

<div class="paginacion">
    {{$genres->links()}}
</div>

<a class="btn btn-success" href="/genre/new">Create</a>
<a class="btn btn-primary" href="/genres/edit">Edit</a>
<a class="btn btn-danger"  href="/genres/delete">Delete</a>
</div>

<script>
window.onload = function() {
    document.getElementById('menu-genres').className = 'active';
};
</script>

@endsection