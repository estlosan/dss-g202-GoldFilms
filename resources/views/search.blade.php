@extends ('layout')

@section ('content')

<h1>Search results:</h1>

<div class="Caratulas">
     <div class="films_row" style="width:200px; margin:auto; display:inline-block; vertical-align: middle;">
    <div class="thumbnail" style="width:150px; height:278px;">
        <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" style="width:150px; height:200px;"></a>
        <div class="caption" style="text-align:center;">
        <p><a href="/films/{{$film->id}}"> {{$film->name}}</a></p>
        </div>
    </div>
  </div>
</div>

@endsection