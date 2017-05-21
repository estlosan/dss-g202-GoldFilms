<head>
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" type="text/css">
</head>

@extends ('layout')

@section ('content')

<h1>Resultados de la búsqueda</h1>

<div class="z-movie">
    <div class="margin-ntabs">
        <ul class="ntabs">
        </ul>
    </div>

    <div class="row row_peliculas">
    @foreach ($films as $film)
      <div class="films_row">
        <div class="thumbnail">
            <a href="/films/{{$film->id}}"><img src="/images/{{$film->name}}.jpg" style="width:150px; height:200px;"></a>
            <div class="caption">
            <p><a href="/films/{{$film->id}}"> {{$film->name}}</a></p>
            </div>
        </div>
      </div>
      @endforeach
    </div>

  <div class="paginate_films">
    {{$films->appends(['keyword' => $keyword])->links()}}
  </div>

</div>
@endsection