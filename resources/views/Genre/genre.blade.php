@extends('layout')

@section('content')
<div class='info_genero'>
<h2>Genero: {{$genre->genre}}</h2>

    <h3>Peliculas del genero:</h3>
    
    @foreach ($genre->film as $film)
        <a href="/films/{{$film->id}}" class="text-center" >
        <img style="width: 150px;
            height: 220px;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 10px;
            margin-bottom: 10px;" src="/images/{{$film->name}}.jpg" >
    @endforeach
</div>  

<script>
window.onload = function() {
    document.getElementById('menu-genres').className = 'active';
};
</script>

@endsection