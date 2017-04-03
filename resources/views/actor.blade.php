@extends('layout')

@section('content')

<h1>Actor</h1>

<div class="row">
  <div class="col-sm-12">
      <img style="width: 180px;
    height: 220px;
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 10px;
    margin-bottom: 10px;" src="/images/Actores/{{$actor->name}}.jpg" >
    </a>
  </div>
</div>

<p>Nombre:{{$actor->name}}</br>Edad:{{$actor->age}}</br>Nacionalidad:{{$actor->nacionality}}</br>Sexo:{{$actor->gender}}</p>
</br></br>
<p>Peliculas</p>
</br>


<div class="row">
  <div class="col-sm-12">
  @foreach ($actor->films as $film)
    <a href="/films/{{$film->id}}" class="text-center" >
      <img style="width: 150px;
    height: 220px;
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 10px;
    margin-bottom: 10px;" src="/images/{{$film->name}}.jpg" >
    </a>
  @endforeach
  </div>
  
</div>
        
@endsection
